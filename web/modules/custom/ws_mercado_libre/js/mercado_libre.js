(function ($){
	
	'use strict';

	Drupal.behaviors.addRedtext = {
		attach: function (context, settings) {
			console.log('prueba de modulo mercado libre desde attach');
		}
	};
	
	$(document).ready(function() {
	
		console.log('Se cargo la pagina');	
		console.log('ejecutado al final del archivo');	
	});



	Drupal.attachBehaviors();

})(jQuery);