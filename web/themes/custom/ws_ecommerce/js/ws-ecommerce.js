/**
 * @file
 * WS ecommerce behaviors.
 */
(function ($, Drupal) {

 
  'use strict';
  //quitar el total de envio que aparece en el label
  let texto = $('#edit-shipping-information-shipments-0-shipping-method-0 div label.form-check-label.form-label.option').text();
  let nuevoTexto = texto.replace(/MXN\d+\.\d{2}/, '');
  $('#edit-shipping-information-shipments-0-shipping-method-0 div label.form-check-label.form-label.option').text(nuevoTexto.trim()); 

  /* */


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

      /*Ocultar categorias en mobil*/
      function isMobileDevice() {
        return /Mobi|Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
      }

      var $details = $('#edit-field-categoria-target-id-collapsible--4');

      // Ocultar el elemento si es un dispositivo móvil
      if (isMobileDevice()) {
         $details.removeAttr('open');
      }
      else{
         $details.attr('open','');
      }

      /* Agregar SDK de login con facebook */
      // window.fbAsyncInit = function() {
      //   FB.init({
      //     appId      : '620096173968475',
      //     xfbml      : true,
      //     version    : 'v22.0'
      //   });
      //   FB.AppEvents.logPageView();
      // };
    
      // (function(d, s, id){
      //    var js, fjs = d.getElementsByTagName(s)[0];
      //    if (d.getElementById(id)) {return;}
      //    js = d.createElement(s); js.id = id;
      //    js.src = "https://connect.facebook.net/en_US/sdk.js";
      //    fjs.parentNode.insertBefore(js, fjs);
      //  }(document, 'script', 'facebook-jssdk'));

      /*Dentro del atach tambien agregamos la funcionalidad para la vista del primer row del blog */
      let url_img_blog = $('.view-display-id-blog_all.view-id-blog .view-content > div.views-row:first-child .img_blog_port img').attr("src");
      let first_row = $('.view-display-id-blog_all.view-id-blog .view-content > div.views-row:first-child');

      first_row.css({
        'background-image': 'url('+url_img_blog+')',
        'background-repeat': 'no-repeat',
        'background-size': 'cover',
      });

      $('.view-display-id-blog_all.view-id-blog .view-content > div.views-row:first-child h5').css({
        'position': 'absolute',
        'bottom': '60px',
        'top': 'unset',
      });

      $('.view-display-id-blog_all.view-id-blog .view-content > div.views-row:first-child p').css({
        'font-size': '14px',
        'font-weight': 'bold',
        'position': 'absolute',
        'bottom':'10px',
      });

      let nuevoSrc = url_img_blog.split("?")[0]; 
      
    }

    
  };

})(jQuery, Drupal);
