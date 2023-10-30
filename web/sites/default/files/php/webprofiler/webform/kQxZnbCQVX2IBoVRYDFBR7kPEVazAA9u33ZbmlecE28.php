<?php

/**
 * This file is auto-generated.
 */

namespace Drupal\webprofiler\Entity;

class WebformEntityStorageDecorator extends ConfigEntityStorageDecorator implements \Drupal\webform\WebformEntityStorageInterface
{
    public function getWebformIds()
    {
        return $this->getOriginalObject()->getWebformIds();
    }

    public function getCategories($template, $default)
    {
        return $this->getOriginalObject()->getCategories($template, $default);
    }

    public function resetCategoriesCache()
    {
        return $this->getOriginalObject()->resetCategoriesCache();
    }

    public function getOptions($template)
    {
        return $this->getOriginalObject()->getOptions($template);
    }

    public function getNextSerial($webform)
    {
        return $this->getOriginalObject()->getNextSerial($webform);
    }

    public function setNextSerial($webform, $next_serial)
    {
        return $this->getOriginalObject()->setNextSerial($webform, $next_serial);
    }

    public function getSerial($webform)
    {
        return $this->getOriginalObject()->getSerial($webform);
    }

    public function getMaxSerial($webform)
    {
        return $this->getOriginalObject()->getMaxSerial($webform);
    }

    public function getTotalNumberOfResults($webform_id)
    {
        return $this->getOriginalObject()->getTotalNumberOfResults($webform_id);
    }
}
