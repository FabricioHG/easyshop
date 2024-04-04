<?php

/**
 * This file is auto-generated.
 */

namespace Drupal\webprofiler\Entity;

class WebformOptionsStorageDecorator extends ConfigEntityStorageDecorator implements \Drupal\webform\WebformOptionsStorageInterface
{
    public function getCategories()
    {
        return $this->getOriginalObject()->getCategories();
    }

    public function getOptions()
    {
        return $this->getOriginalObject()->getOptions();
    }

    public function getLikerts()
    {
        return $this->getOriginalObject()->getLikerts();
    }

    public function getUsedByCompositeElements($webform_options)
    {
        return $this->getOriginalObject()->getUsedByCompositeElements($webform_options);
    }

    public function getUsedByWebforms($webform_options)
    {
        return $this->getOriginalObject()->getUsedByWebforms($webform_options);
    }
}
