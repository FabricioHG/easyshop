(function (Drupal, $, once, drupalSettings) {
  
  'use strict';
  // Variable para rastrear si el evento ya se ha agregado
  let formPagoEventAdded = false;

  Drupal.behaviors.pago_ws = {
    attach: function (context, settings) {
      let form_pago= "#commerce-checkout-flow-custom-checkout-flow";
      let data_form = drupalSettings.pasarela_de_pago_ml;
      let preference_Id = data_form.preference_id;

      //Ejecutar el codigo una sola vez ya que si no se agrega en un once, el cdigo se ejecuta
      //varias veces porque el attach se ejecuta varias veces en el core de drupal durante la carga
      $(once('once_pago_ml', form_pago, context)).each(function (element) {
        const mp = new MercadoPago(data_form.public_key,{
          locale: 'es-MX'
        });  
        //Crea el checkout
        const checkout = mp.checkout({
          preference:{
            id: preference_Id
          },
          render:{
            container:'#wallet_container',
            label: 'pagar',
          }
        });
        //Escuchador del boton de mercado pago, cuando se presione se ejecuta la funcion 
        //handleSubmit para hacer el request
        $(form_pago, context).on('submit', handleSubmit);
        
        //el request se agrego dentro de un async para que el prompt deje interactuar con el 
        //usuario y lo deje escoger la forma de pago ya que si no se agrega en un async, si se ejecuta
        //el codigo pero la ventana se cierra rapudamente
        async function handleSubmit(e) {
          e.preventDefault();
          const { error } = await checkout;
        }

      });
  

    }//fin del attach


  };



}) (Drupal, jQuery, once, drupalSettings);
