(function (Drupal, $, once, drupalSettings) {
  
  'use strict';

  Drupal.behaviors.pago_ws = {
    attach: function (context, settings) {
    	let form_pago= "#commerce-checkout-flow-multistep-default";
      let data_form = drupalSettings.pasarela_de_pago_ws;
      
      const stripe = Stripe(data_form.publishablekey);
      let elements;
      let clientSecret;
      
    	$(once('once_pago_ws', form_pago, context)).each(function (element) {
        	// Apply the myCustomBehaviour effect to the elements only once.
          clientSecret = data_form.clientsecret;

          //Inicializar stripe element
          elements = stripe.elements({ clientSecret });
          
          //Opciones para el paymentElement
          let paymentElementOptions = {
            layout: "tabs",
          };   

          const paymentElement = elements.create("payment", paymentElementOptions);
         
          //Monta el formulario de stripe en el div de mi formulario
          paymentElement.mount("#payment-element"); 
      });

      //Escuchador del envio de formulario
      document.querySelector(form_pago).addEventListener("submit", handleSubmit);
     
      async function handleSubmit(e) {
        e.preventDefault();
        setLoading(true);

        const { error } = await stripe.confirmPayment({
          elements,
          confirmParams: {
            // Make sure to change this to your payment completion page
            return_url: data_form.return_url,
          },
        });

        // This point will only be reached if there is an immediate error when
        // confirming the payment. Otherwise, your customer will be redirected to
        // your `return_url`. For some payment methods like iDEAL, your customer will
        // be redirected to an intermediate site first to authorize the payment, then
        // redirected to the `return_url`.
        if (error.type === "card_error" || error.type === "validation_error") {
          showMessage(error.message);
        } else {
          showMessage("An unexpected error occurred.");
        }
        setLoading(false);
      }

      
      // Show a spinner on payment submission
      function setLoading(isLoading) {
        if (isLoading) {
          // Disable the button and show a spinner
          document.querySelector("#submit").disabled = true;
          document.querySelector("#spinner").classList.remove("hidden");
        } else {
          document.querySelector("#submit").disabled = false;
          document.querySelector("#spinner").classList.add("hidden");
        }
      }
      
      function showMessage(messageText) {
        const messageContainer = document.querySelector("#payment-message");

        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;

        setTimeout(function () {
          messageContainer.classList.add("hidden");
          messageContainer.textContent = "";
        }, 4000);
      }


    }//fin del attach


  };



}) (Drupal, jQuery, once, drupalSettings);
