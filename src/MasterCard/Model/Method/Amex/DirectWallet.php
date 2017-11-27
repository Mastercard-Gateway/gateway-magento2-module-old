<?php
/**
 * Copyright (c) 2017. On Tap Networks Limited.
 */
namespace OnTap\MasterCard\Model\Method\Amex;

use OnTap\MasterCard\Model\Method\WalletInterface;

class DirectWallet extends \OnTap\MasterCard\Model\Method\Wallet implements WalletInterface
{
    protected $walletInitializeCommand = 'amex_create_session';

    /**
     * @return array
     */
    public function getJsConfig()
    {
        return [
            'adapter_component' => $this->getMethodConfig()->getValue('adapter_component')
        ];
    }
}
