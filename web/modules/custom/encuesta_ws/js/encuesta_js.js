(function($){ 
	'use strict';

	Drupal.behaviors.encuesta_ws = {
		attach: function (context, settings) {
			$('#edit-enviar-codigo').prop('disabled', false);
			//$('#btnvotar').prop('disabled', false); 
		}
	};

	$(document).ready(function(){
		
		$('#edit-enviar-codigo').prop('disabled', true);
		$('#btnvotar').prop('disabled', true);

		$('#edit-tel-number').on('input', function () {
			var celular_long = $(this).val().length;
		    var radios_voto = $('input[name="voto"]');
			var radioSeleccionado = radios_voto.is(':checked');

			if (radioSeleccionado && celular_long > 9) {
			 	Drupal.attachBehaviors();
			}
			else{
				$('#edit-enviar-codigo').prop('disabled', true);
			}
		});

		$('input[name="voto"]').on('change', function () {
			var celular_long = $("#edit-tel-number").val().length;
		    var radios_voto = $('input[name="voto"]');
			var radioSeleccionado = radios_voto.is(':checked');

			if (radioSeleccionado && celular_long > 9) {
			 	Drupal.attachBehaviors();
			}
			else{
				$('#edit-enviar-codigo').prop('disabled', true);
			}
		});


			 
	
	}); 

	


})(jQuery);