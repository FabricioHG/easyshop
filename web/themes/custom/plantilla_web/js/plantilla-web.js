/**
 * @file
 * Plantilla web behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.plantillaWeb = {
    attach: function (context, settings) {

      //Iniciar la libreria wow
      new WOW().init();
      console.log('It works tema!.');
    
    }
  };

} (Drupal));
