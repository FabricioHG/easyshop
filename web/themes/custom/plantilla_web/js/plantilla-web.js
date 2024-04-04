/**
 * @file
 * Plantilla web behaviors.
 */
(function ($, Drupal, once) {

  'use strict';

	Drupal.behaviors.plantillaWeb = {
    	attach: function (context, settings) {
      		//Iniciar la libreria wow
 			once('com_wow', 'html', context).forEach(function (element) {
        		new WOW().init();
        		console.log('It works tema!...');
      		});    
    	}
  	};

}) (jQuery, Drupal, once);
