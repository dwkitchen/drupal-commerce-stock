<?php

namespace Drupal\commerce_stock\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

class StockLocationForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $form_state->setRedirect('entity.commerce_stock_location.collection');
    $location = $this->getEntity();
    $location->save();
  }
}
