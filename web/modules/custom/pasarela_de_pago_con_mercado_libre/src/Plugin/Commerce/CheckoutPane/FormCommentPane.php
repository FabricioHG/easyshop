<?php

namespace Drupal\pasarela_de_pago_con_mercado_libre\Plugin\Commerce\CheckoutPane;

use Drupal\commerce_checkout\Plugin\Commerce\CheckoutPane\CheckoutPaneBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a custom message pane.
 *
 * @CommerceCheckoutPane(
 *   id = "form_comment_pane",
 *   label = @Translation("Formulario para comentario del cliente"),
 * 	 display_label = @Translation("Comentarios sobre su Orden"),
 * )
 */
class FormCommentPane extends CheckoutPaneBase {

	/**
	 * {@inheritdoc}
	 */

	public function buildPaneForm(array $pane_form, FormStateInterface $form_state, array &$complete_form) {
		
		$default_value_text_area = 'Por favor, utilice este campo para escribir cualquier comentario adicional sobre su pedido. Puede incluir:
		    	-Instrucciones especiales de entrega
		    	-Preferencias sobre el color o características del producto
		    	-Comentarios generales sobre su compra	
		    Queremos asegurarnos de que su experiencia de compra sea satisfactoria y que reciba exactamente lo que necesita. ¡Gracias por su colaboración!';

		$pane_form['comentario'] = array(
		    '#type' => 'textarea',
		    '#title' => $this->t('Comentario adicional'),
		    '#default_value'=> $default_value_text_area,
		    '#attributes' => [
		        'class' => ['txt_area_comment'],
		    ],
		);

		return $pane_form;
		
	}


}
