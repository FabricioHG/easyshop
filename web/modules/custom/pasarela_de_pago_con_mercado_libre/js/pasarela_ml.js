(function (Drupal, $, once, drupalSettings) {
  
  'use strict';
  // Variable para rastrear si el evento ya se ha agregado
  let formPagoEventAdded = false;

  window.addEventListener("message", function(event) {
    console.log('Mensaje recibido:', event);  // Añadir log para ver todo el mensaje
    if (event.origin.includes("mercadopago.com")) {
      if (event.data && event.data.redirect) {
        console.log('Redirección a:', event.data.redirect);  // Verifica si la URL de redirección se está recibiendo correctamente
        window.location.href = event.data.redirect;  // Realiza la redirección
      } else {
        console.log('No se encontró propiedad redirect:', event.data);  // Verifica si el mensaje no contiene la URL
      }
    } else {
      console.log('Origen desconocido:', event.origin);  // Verifica si el origen es el correcto
    }
  }, false);

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
        // const checkout = mp.checkout({
        //   preference:{
        //     id: preference_Id,
        //   },
        //   render:{
        //     container:'#wallet_container',
        //     label: 'Pagar',
        //   },
        //   iframe: true,  // Agregar esta línea
        // });

        //Inicio del checkout nuevo con brinks
        mp.bricks().create("wallet", "wallet_container", {
          initialization: {
              preferenceId: preference_Id,
          },
        customization: {
        texts: {
        valueProp: 'smart_option',
        },
        },
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
