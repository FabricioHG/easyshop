/**
 * @file
 * Plantilla web behaviors.
 */
(function (Drupal,$) {

  'use strict';

  Drupal.behaviors.moduloWs = {
    attach: function (context, settings) {
    	once('com_custom', 'html', context).forEach(function (element) {
            console.log('prueba modulo...');
          }); 
	      
    	
    }
  };
	

})(Drupal,jQuery);
