/**
 * @file
 * WS ecommerce behaviors.
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.wsEcommerceProduct = {
    attach: function (context, settings) {
      console.log('It works Ecommerce Product!');

      if (typeof $.fn.slick !== 'undefined') {
        console.log('Slick library found!');
        // Inicializa el slider principal
        $('.slider-for', context).slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '.slider-nav'
        });

        // Inicializa el slider de navegación
        $('.slider-nav', context).slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          asNavFor: '.slider-for',
          focusOnSelect: true,
          dots: false,
          arrows: true,
        });

      } else {
        console.log('Slick library not found!');
      }

    }
  };

})(jQuery, Drupal);
