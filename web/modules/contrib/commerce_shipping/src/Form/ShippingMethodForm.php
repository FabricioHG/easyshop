<?php

namespace Drupal\commerce_shipping\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\entity\Form\EntityDuplicateFormTrait;

class ShippingMethodForm extends ContentEntityForm {

  use EntityDuplicateFormTrait;

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Skip building the form if there are no available stores.
    $store_query = $this->entityTypeManager->getStorage('commerce_store')->getQuery()->accessCheck(FALSE);
    if ($store_query->count()->execute() == 0) {
      $link = Link::createFromRoute('Add a new store.', 'entity.commerce_store.add_page');
      $form['warning'] = [
        '#markup' => $this->t("Shipping methods can't be created until a store has been added. @link", ['@link' => $link->toString()]),
      ];
      return $form;
    }

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $this->entity->save();
    $this->messenger()->addMessage($this->t('Saved the %label shipping method.', ['%label' => $this->entity->label()]));
    $form_state->setRedirect('entity.commerce_shipping_method.collection');
  }

}
