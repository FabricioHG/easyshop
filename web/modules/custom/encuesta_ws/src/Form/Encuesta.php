<?php

namespace Drupal\encuesta_ws\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface; 
use Drupal\Core\Database\Connection;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a Encuesta ws form.
 */
class Encuesta extends FormBase {

  protected $database; 
  protected $currentUser;

  public function __construct(Connection $database, AccountInterface $current_user) {
    $this->database = $database;
    $this->currentUser = $current_user; 
  }
  public static function create(ContainerInterface $container) { 
    return new static(
      $container->get('database'),
      $container->get('current_user') 
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'encuesta_ws_encuesta';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['voto'] = [
      '#type' => 'radios',
      '#title' => $this->t('Finalistas'),
      '#options' => [
        1 => $this->t('Ximena López'),
        2 => $this->t('Ana Hernández'),
        3 => $this->t('Francisco Gómez'),
      ],
      '#description' => $this->t('Seleccione el nombre de la persona por la que quiere votar.'),
      '#required' => TRUE,
    ];

    $form['tel_number'] = [
      '#type' => 'tel',
      '#title' => t('Numero celular'),
      '#maxlength' => 30,
      '#size' => 30,
      '#required' => TRUE,
      '#description' => $this->t('Ingrese un numero celular en formato 3331003438 al que le llegara el codigo para poder votar.'),
    ];

    $form['codigo_wrapper'] = [
      '#type' => 'container',
      '#attributes' => ['id' => 'codigowrapper'],
    ];
    

    $form['actions'] = [
      '#type' => 'actions',
    ];


    $form['actions']['enviar_codigo'] = [
      '#type' => 'button',
      '#value' => $this->t('Enviar Código'),
      '#ajax' => [
        'callback' => '::enviarCodigo',
        'wrapper' => 'codigowrapper',      
      ],
    ];
    
    // Desactivar la caché de formulario
    $form_state->setCached(FALSE);

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Votar'),
      '#attributes' => ['id' => 'btnvotar'],
      '#states' => [
        'visible' => [
          ':input[name="codigo"]' => ['filled' => true],
        ],
      ],
    ];
    $form['#attached']['library'][] = 'encuesta_ws/encuesta_ws';

    return $form;
  }

  public function enviarCodigo(array &$form, FormStateInterface $form_state) {
  // Realiza aquí la lógica necesaria, como enviar el código.
  // Después de enviar el código, puedes cambiar el valor de code_sent a 'sent'.
    //$form_state->setValue('code_sent', 'sent');

    $form['codigo_wrapper']['codigo'] = [
      '#type' => 'textfield',
      '#title' => t('Ingresa código'),
      // '#required' => TRUE,
      '#description' => $this->t('Ingrese el codigo que se envio al celular.'),
    ];
   
    //$response = new AjaxResponse();
    //$response->addCommand(new ReplaceCommand('#code-sent', $form['code_sent']));


  // Devuelve la parte del formulario que deseas actualizar.
  return $form['codigo_wrapper'];
}

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // if (mb_strlen($form_state->getValue('tel_number')) < 10) {
    //   $form_state->setErrorByName('message', $this->t('Message should be at least 10 characters.'));
      
    //    //$form_state->setValue('code_sent', 'sent');
    // }
    $celular = $form_state->getValue('tel_number');
    if (!empty($celular)) {
      //Enviar codigo y guardar en base de datos con el telefono
     
      

    }else {
      $form_state->setErrorByName('tel_number', $this->t('Ingresa un número celular.'));
    }
  
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $celular = $form_state->getValue('tel_number');
    $form_state->setRebuild();

    $this->messenger()->addStatus($this->t('Código enviado al numero @celular.', ['@celular' => $celular]));

    //$form_state->setRedirect('encuesta_ws.encuesta');
  }

  

}
