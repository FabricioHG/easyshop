/**
 * @file
 * WS ecommerce behaviors.
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.wsEcommerce = {
    attach: function (context, settings) {
      
      $('#edit-field-categoria-target-id--4 ul li input[type="checkbox"]').on('click',function(){
        var $li = $(this).closest('li');
        var div = $(this).closest('div');
        if ($(this).prop('checked')) {
          if ($li.has('ul').length > 0) {
              $li.children('ul').css('display', 'block'); // Mostramos el <ul> hijo del <li>
          }
        } else {
            if ($li.has('ul').length > 0) {
                $li.children('ul').css('display', 'none'); // Ocultamos el <ul> hijo del <li>
                $li.find('input[type="checkbox"]').prop('checked', false);
            }
        }
      });

    }
  };

})(jQuery, Drupal);
