<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace OnTap\MasterCard\Gateway\Config\Hosted;

class Config extends \OnTap\MasterCard\Gateway\Config\Config
{
    const COMPONENT_URI = '%scheckout/version/%s/checkout.js';

    /**
     * @return string
     */
    public function getComponentUrl()
    {
        return sprintf(
            static::COMPONENT_URI,
            $this->getApiAreaUrl(),
            $this->getValue('api_version')
        );
    }

    /**
     * @return bool
     */
    public function isVaultEnabled()
    {
        return false;
    }
}
