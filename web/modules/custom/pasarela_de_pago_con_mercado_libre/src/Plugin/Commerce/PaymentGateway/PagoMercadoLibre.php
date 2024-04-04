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


/**
 * Provides the Ws onsite Checkout payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "pago_mercado_libre",
 *   label = @Translation("Payment Mercado libre"),
 *   display_label = @Translation("Mercado libre"),
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
          ] + parent::defaultConfiguration();
      }

    public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
        $form = parent::buildConfigurationForm($form, $form_state);

        $form['access_token'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Access token'),
          '#description' => $this->t('This is the access token from the mercado libre checkout pro.'),
          '#default_value' => $this->configuration['access_token'],
          '#required' => TRUE,
        ];

        $form['public_key'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Public key'),
          '#description' => $this->t('This is the public key from the mercado libre checkout pro.'),
          '#default_value' => $this->configuration['public_key'],
          '#required' => TRUE,
        ];

        return $form;
    }

    public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
        parent::submitConfigurationForm($form, $form_state);
        $values = $form_state->getValue($form['#parents']);
        $this->configuration['public_key'] = $values['public_key'];
        $this->configuration['access_token'] = $values['access_token'];
    }

    public function onCancel(OrderInterface $order, Request $request) {
        parent::onCancel($order, $request);
      
    }

    // public function onReturn(OrderInterface $order, Request $request){
        
    //     $paymentIntentClientSecret = $request->query->get('payment_intent');
    //     $stripe = new StripeClient($this->getPrivateKey());
    //     $paimentIntent = $stripe->paymentIntents->retrieve($paymentIntentClientSecret);
    //     $paimentIntentStatus = $paimentIntent->toArray()['status'];
    //     $paimentIntentId = $paimentIntent->toArray()['id'];

    //     switch ($paimentIntentStatus) {
    //         case 'succeeded':
    //             $logger = \Drupal::logger('pasarela_de_pago_ws');
    //             $logger->info('Pago guardado');

    //             $payment_storage = \Drupal::entityTypeManager()->getStorage('commerce_payment');
    //             $payment = $payment_storage->create([
    //                 'state' => 'completed',
    //                 'amount' => $order->getTotalPrice(),
    //                 'payment_gateway' => $this->entityId,
    //                 'order_id' => $order->id(),
    //                 'remote_state' => 'succeeded',
    //                 'remote_id' => $paimentIntentId,
    //             ]);

    //             $payment->save();
    //             $this->messenger()->addMessage('La orden se ha creado con exito, enviamos un correo con los datos de la orden');
    //             break;
    //         case 'requires_action':
    //             $logger = \Drupal::logger('pasarela_de_pago_ws');
    //             $logger->info('Pago guardado');

    //             $payment_storage = \Drupal::entityTypeManager()->getStorage('commerce_payment');
    //             $payment = $payment_storage->create([
    //                 'state' => 'authorization',
    //                 'amount' => $order->getTotalPrice(),
    //                 'payment_gateway' => $this->entityId,
    //                 'order_id' => $order->id(),
    //                 'remote_state' => 'requires_action',
    //                 'remote_id' => $paimentIntentId,
    //             ]);
    //             $payment->save();
    //              $this->messenger()->addMessage('Procesando el pago, cuando sea aprobado le enviaremos un correo con los datos de la orden');
    //             break;
    //         case 'requires_payment_method':
    //             $this->messenger()->addMessage('El pago requiere un metodo de pago');
    //             break;
            
    //         default:
    //             $this->messenger()->addMessage('Algo salio mal, intenta de nuevo');
    //             break;
    //     }
    
    // }

    public function onNotify(Request $request) {
        //Revisar si la peticion viene del servidor de stripe
        // if (isset($_SERVER['HTTP_USER_AGENT'])) {
        //     $userAgent = $_SERVER['HTTP_USER_AGENT'];
            
        //     // Verificar si el User-Agent contiene "Stripe" como parte de la cadena
        //     if (strpos($userAgent, 'Stripe') !== false) {
        //         // La solicitud viene de Stripe
        //         $request_body = Json::decode($request->getContent());
        //         $objet = $request_body['data']['object'];
        //         $paimentIntent_id = $objet['id'];
        //         $payment_currency = $objet['currency'];
        //         $fecha_pago_autorizado = $objet['created'];
        //         $monto = new Price($objet['amount'] / 100, $payment_currency); 
                
        //         switch ($request_body['type']) {
        //             case 'payment_intent.succeeded':
        //                 //Obtener el id remoto del pago o el payment creado
        //                 $paimentIntent_id = $objet['id'];
                        
        //                 //comprovar si existe un pago con ese paiment id, si existe actualizarlo si no crear uno nuevo
        //                 $payment_storage = \Drupal::entityTypeManager()->getStorage('commerce_payment');
        //                 $pagos = $payment_storage->loadByProperties(['remote_id' => $paimentIntent_id]);

        //                 if (empty($pagos)) {
        //                     $payment = $payment_storage->create([
        //                         'state' => 'completed',
        //                         'amount' => $monto,
        //                         'payment_gateway' => $this->entityId,
        //                         'order_id' => $objet['metadata']['orden_id'],
        //                         'remote_state' => $objet['status'],
        //                         'remote_id' => $paimentIntent_id,
        //                         'authorized' => $fecha_pago_autorizado,
        //                     ]);
        //                     $payment->setRefundedAmount($monto);
        //                     $payment->save();
                            
        //                     $logger = \Drupal::logger('pasarela_de_pago_ws');
        //                     $logger->info('Se creo un pago nuevo con id remoto :@id',['@id' => $paimentIntent_id]);
        //                     return new JsonResponse();
                            
        //                 }else{
        //                     $pago = reset($pagos);

        //                     // Check if the Refund is partial or full.
        //                     $old_refunded_amount = $pago->getRefundedAmount();
        //                     $new_refunded_amount = $old_refunded_amount->add($monto);

        //                     $pago->set('state', 'completed');
        //                     $pago->set('authorized', $fecha_pago_autorizado); 
        //                     $pago->setRefundedAmount($new_refunded_amount);
        //                     $pago->save();

        //                     $logger = \Drupal::logger('pasarela_de_pago_ws');
        //                     $logger->info('Se actualizo el pago con id remoto @id',['@id' => $paimentIntent_id]);
        //                     return new JsonResponse();
        //                 }

                        
        //                 break;
        //             case 'payment_intent.requires_action':
        //                 // Crear un pago con status no pagado
                        
        //                 $payment_storage = \Drupal::entityTypeManager()->getStorage('commerce_payment');
        //                 $payment = $payment_storage->create([
        //                         'state' => 'Pago en proceso',
        //                         'amount' => $monto,
        //                         'payment_gateway' => $this->entityId,
        //                         'order_id' => $objet['metadata']['orden_id'],
        //                         'remote_state' => $objet['status'],
        //                         'remote_id' => $paimentIntent_id,
                                
        //                     ]);
        //                     $payment->save();
        //                     $logger = \Drupal::logger('pasarela_de_pago_ws');
        //                     $logger->info('Se creo el pago con id remoto @id esta pendiente de pago',['@id' => $paimentIntent_id]);
        //                     return new JsonResponse();
        //                 break;
                    
        //             default:
        //                 // code...
        //                 break;
        //         }
        //     } else {
        //         // La solicitud no viene de Stripe
        //         $logger = \Drupal::logger('pasarela_de_pago_ws');
        //         $logger->info('La solicitud no viene de stripe');
        //         return;
        //     }
        // } else {
        //     // No se proporcionó el User-Agent en la solicitud
        //     $logger = \Drupal::logger('pasarela_de_pago_ws');
        //     $logger->info('No se proporcionó el User-Agent en la solicitud.');
        //     return;
        // }
           
    }

    public function getAccessToken() {
        return $this->configuration['access_token'];
    }

    public function getPublicKey() {
        return $this->configuration['public_key'];
    }


}