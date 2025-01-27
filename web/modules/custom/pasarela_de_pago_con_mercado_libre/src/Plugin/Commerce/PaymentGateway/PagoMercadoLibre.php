<?php

namespace Drupal\pasarela_de_pago_con_mercado_libre\Plugin\Commerce\PaymentGateway;

use Drupal\Core\Form\FormStateInterface;
use Drupal\commerce_order\Entity\OrderInterface;
use Drupal\commerce_payment\Entity\PaymentInterface;
use Drupal\commerce_payment\Entity\PaymentMethodInterface;
use Drupal\commerce_payment\Exception\DeclineException;
use Drupal\commerce_payment\Exception\PaymentGatewayException;
use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\OffsitePaymentGatewayBase;
use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\OnsitePaymentGatewayBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Component\Serialization\Json;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\commerce_price\Price;
use MercadoPago\Payment;
use MercadoPago\SDK;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\State\StateInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;



/**
 * Provides the Ws onsite Checkout payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "pago_mercado_libre",
 *   label = @Translation("Payment Mercado libre"),
 *   display_label = @Translation("Mercado Pago"),
 *    forms = {
 *     "offsite-payment" = "Drupal\pasarela_de_pago_con_mercado_libre\PluginForm\MercadoLibreForm",
 *   },
 *   payment_method_types = {"credit_card"},
 *   credit_card_types = {
 *     "mastercard", "visa",
 *   },
 *   requires_billing_information = FALSE,
 * )
 */
class PagoMercadoLibre extends OffsitePaymentGatewayBase {


    public function defaultConfiguration() {
        return [
            'access_token' => '',
            'public_key' => '',
            'webhook_key' => '',
          ] + parent::defaultConfiguration();
      }

    public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
        $form = parent::buildConfigurationForm($form, $form_state);

        $form['access_token'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Access token'),
          '#description' => $this->t('This is the access token from the mercado pago checkout pro.'),
          '#default_value' => $this->configuration['access_token'],
          '#required' => TRUE,
        ];

        $form['public_key'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Public key'),
          '#description' => $this->t('This is the public key from the mercado pago checkout pro.'),
          '#default_value' => $this->configuration['public_key'],
          '#required' => TRUE,
        ];
        $form['webhook_key'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Webhook key'),
          '#description' => $this->t('This is the webhook key from the mercado pago.'),
          '#default_value' => $this->configuration['webhook_key'],
          '#required' => TRUE,
        ];

        return $form;
    }

    public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
        parent::submitConfigurationForm($form, $form_state);
        $values = $form_state->getValue($form['#parents']);
        $this->configuration['public_key'] = $values['public_key'];
        $this->configuration['access_token'] = $values['access_token'];
        $this->configuration['webhook_key'] = $values['webhook_key'];
    }

    public function onCancel(OrderInterface $order, Request $request) {
        parent::onCancel($order, $request);
      
    }

     // public function onReturn(OrderInterface $order, Request $request){
     // }

    public function onNotify(Request $request) {
        // Obtain params related to the request URL
        $request_body = Json::decode($request->getContent());
        $data = $request_body['data'];

        \Drupal::logger('ws_mercado_libre')->notice('respuesta despues del pago %res',['%res'=>print_r($data)]);
        
        // Extract the "data.id" from the query params
        $dataID = isset($data['id']) ? $data['id'] : '';

        //Obtener el valor del header HTTP_X_SIGNATURE
        // Obtain the x-signature value from the header
        $xSignature = $_SERVER['HTTP_X_SIGNATURE'];
        $xRequestId = $_SERVER['HTTP_X_REQUEST_ID'];


        // Separating the x-signature into parts
        $parts = explode(',', $xSignature);

        // Initializing variables to store ts and hash
        $ts = null;
        $hash = null;

        // Iterate over the values to obtain ts and v1
        foreach ($parts as $part) {
            // Split each part into key and value
            $keyValue = explode('=', $part, 2);
            if (count($keyValue) == 2) {
                $key = trim($keyValue[0]);
                $value = trim($keyValue[1]);
                if ($key === "ts") {
                    $ts = $value;
                } elseif ($key === "v1") {
                    $hash = $value;
                }
            }
        }
        // Obtain the secret key for the user/application from Mercadopago developers site
        $secret = $this->getWebhookKey();

        // Generate the manifest string
        $manifest = "id:$dataID;request-id:$xRequestId;ts:$ts;";

        // Create an HMAC signature defining the hash type and the key as a byte array
        $sha = hash_hmac('sha256', $manifest, $secret);
        if ($sha === $hash) {
            SDK::setAccessToken($this->getAccessToken());
            switch($request_body["type"]) {
                case "payment":
                    $payment_remote = Payment::find_by_id($data["id"]);
                    $metadata_pago_id = $payment_remote->metadata->order_id;

                    //comprovar si existe un pago con ese paiment id, si existe actualizarlo si no crear uno nuevo
                    $payment_storage = \Drupal::entityTypeManager()->getStorage('commerce_payment');
                    $pagos = $payment_storage->loadByProperties(['remote_id' => $dataID]);
                    
                    \Drupal::logger('ws_mercado_libre')->notice('Dentro de paiment %var',['%var'=>print_r($payment_remote)]);
                    
                    $payment_currency = $payment_remote->currency_id;
                    $monto = new Price($payment_remote->transaction_amount, $payment_currency); 
                    $fecha_pago_creado =  strtotime ($payment_remote->date_created);
                    
                    if ($payment_remote->date_approved != null) {
                        $fecha_pago_autorizado = strtotime ($payment_remote->date_approved);
                    }else{
                        $fecha_pago_autorizado = $payment_remote->date_approved;
                    }

                    if (empty($pagos)) {
                            $payment = $payment_storage->create([
                                'state' => $payment_remote->status,
                                'amount' => $monto,
                                'payment_gateway' => $this->entityId,
                                'order_id' => $metadata_pago_id,
                                'remote_state' => $payment_remote->status,
                                'remote_id' => $dataID,
                                'completed' => $fecha_pago_creado,
                                'authorized' => $fecha_pago_autorizado,
                            ]);
                            $payment->setRefundedAmount($monto);
                            $payment->save();
                            $logger = \Drupal::logger('pasarela_de_pago_ws');
                            $logger->info('Se creo un pago nuevo con id remoto :@id',['@id' => $dataID]);


                            /**************************** */
                            // Cargar la orden utilizando el almacenamiento de entidades.
                            $entityTypeManager_orden = \Drupal::entityTypeManager();
                            $orderStorage_orden = $entityTypeManager_orden->getStorage('commerce_order');
                            $order = $orderStorage_orden->load(intval($metadata_pago_id));
                            $order_id = $order->id();

                            return new RedirectResponse('/checkout/' . $order_id . '/review');
                            return new JsonResponse();
                            
                    }else{
                        // Si el pago esta completado, actualizar pago y cambiar el estado de la orden
                        if ( $payment_remote->status === 'approved') {
                            
                            $pago = reset($pagos);

                            // Obtener el servicio de gestión de entidades (entity type manager).
                            $entityTypeManager = \Drupal::entityTypeManager();

                            // Cargar la orden utilizando el almacenamiento de entidades.
                            $orderStorage = $entityTypeManager->getStorage('commerce_order');
                            $order = $orderStorage->load(intval($metadata_pago_id));
                            
                            // Verificar si la entidad cargada es una instancia de OrderInterface.
                            if ($order instanceof OrderInterface) {
                              // Verificar el estado actual de la orden.
                              $currentState = $order->getState()->getId();

                              // Verificar si la orden está en el estado adecuado para realizar la transición.
                              if ($currentState === 'draft' && $order->get('checkout_step')->value === 'payment') {
                                // Obtener el estado 'completed' que queremos aplicar a la orden.
                                $completedStateId = 'Validation';

                                // Aplicar directamente el estado 'completed' a la orden.
                                $order->getState()->applyTransitionById('place');
                                $order->set('checkout_step','Validation');

                                // Guardar la orden actualizada.
                                $order->save();
                              }
                            }
                            // Check if the Refund is partial or full.
                            $old_refunded_amount = $pago->getRefundedAmount();
                            $new_refunded_amount = $old_refunded_amount->add($monto);

                            $pago->set('state', $payment_remote->status);
                            $pago->set('completed', $fecha_pago_creado);
                            $pago->set('authorized', $fecha_pago_autorizado); 
                            $pago->setRefundedAmount($new_refunded_amount);
                            $pago->save();

                            $logger = \Drupal::logger('pasarela_de_pago_ws');
                            $logger->info('Se actualizo el pago con id remoto @id',['@id' => $currentState]);
                            return new JsonResponse();
                        }//Fin, si el pago esta aprobado
                        else{
                            $logger = \Drupal::logger('pasarela_de_pago_ml');
                            $logger->info('El pago con id: @id_pago  de la orden @orden  se registro con el status: @status  sin cambiar el estado de la orden',[
                                '@id_pago '=>$dataID,
                                '@orden '=>$metadata_pago_id,
                                '@status '=>$payment_remote->status,
                            ]);
                        }
                        
                    }
                    break;
                case "plan":
                    //$plan = MercadoPago\Plan::find_by_id($_POST["data"]["id"]);
                    $logger->info('Hacer codigo para Plan');
                    break;
            }
            return new JsonResponse();
        } else {
            // HMAC verification failed
            $logger = \Drupal::logger('pasarela_de_pago_ml');
            $logger->info('HMAC verification failed');
            return new JsonResponse([
                'error' => 'Hubo un error al procesar la solicitud.'
            ], JsonResponse::HTTP_BAD_REQUEST);
        }
        
    }

    public function getAccessToken() {
        return $this->configuration['access_token'];
    }

    public function getPublicKey() {
        return $this->configuration['public_key'];
    }

    public function getWebhookKey() {
        return $this->configuration['webhook_key'];
    }


}