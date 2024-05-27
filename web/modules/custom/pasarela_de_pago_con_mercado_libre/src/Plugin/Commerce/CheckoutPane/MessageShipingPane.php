<?php

namespace Drupal\pasarela_de_pago_con_mercado_libre\Plugin\Commerce\CheckoutPane;

use Drupal\commerce_checkout\Plugin\Commerce\CheckoutPane\CheckoutPaneBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a custom message pane.
 *
 * @CommerceCheckoutPane(
 *   id = "message_shiping_pane",
 *   label = @Translation("Custom message shiping"),
 * )
 */
class MessageShipingPane extends CheckoutPaneBase {

	/**
	 * {@inheritdoc}
	 */

	public function buildPaneForm(array $pane_form, FormStateInterface $form_state, array &$complete_form) {

		$fecha_actual = date('M d');

		// Sumar 10 días
		$nueva_fecha_10 = date('M d', strtotime($fecha_actual . ' +15 days'));

		// Sumar 15 días
		$nueva_fecha_15 = date('M d', strtotime($fecha_actual . ' +20 days'));

		$pane_form['message'] = [
			'#markup' => "<div class='text_ch'> <strong>". $this->t('Entrega estimada para el ')."</strong> <strong class='txt_rojo upper'>". $nueva_fecha_10.' - '.$nueva_fecha_15 ."</strong> </div>",
		];
		return $pane_form;
	}


}
