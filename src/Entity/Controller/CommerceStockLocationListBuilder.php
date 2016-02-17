<?php

/**
 * @file
 * Contains \Drupal\commerce_stock\Entity\Controller\CommerceStockLocationListBuilder.
 */

namespace Drupal\commerce_stock\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Defines the list builder for commerce_stock_location.
 */
class CommerceStockLocationListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['name'] = $this->t('Location name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['name'] = $this->getLabel($entity);
    return $row + parent::buildRow($entity);
  }

}
