<?php

/**
 * This file is auto-generated.
 */

namespace Drupal\webprofiler\Entity;

class PaymentGatewayStorageDecorator extends ConfigEntityStorageDecorator implements \Drupal\commerce_payment\PaymentGatewayStorageInterface
{
    public function loadForUser($account)
    {
        return $this->getOriginalObject()->loadForUser($account);
    }

    public function loadMultipleForOrder($order)
    {
        return $this->getOriginalObject()->loadMultipleForOrder($order);
    }
}
