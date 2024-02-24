(function (Drupal, $, once, drupalSettings) {
  
  'use strict';

  Drupal.behaviors.pago_ws = {
    attach: function (context, settings) {
    	var form_pago= "#commerce-checkout-flow-multistep-default";

    	$(once('once_pago_ws', form_pago, context)).each(function (element) {
        	// Apply the myCustomBehaviour effect to the elements only once.
        	var clientSecret = drupalSettings.pasarela_de_pago_ws.clientsecret;
        	
        	console.log(clientSecret);
        	
      	});        
    }
  };



}) (Drupal, jQuery, once, drupalSettings);
