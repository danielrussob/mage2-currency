<?php

namespace DNAFactory\Currency\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Currency
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->_scopeConfig = $scopeConfig;
    }

    public function getPositionByBaseCode($baseCode)
    {
        if($position = $this->_scopeConfig->getValue('dnafactory/currency/position', ScopeInterface::SCOPE_STORE) == '') {
            $position = \Magento\Framework\Currency::LEFT;
        }
        $positions = ['EUR' => $position];
        return $positions[$baseCode];
    }
}