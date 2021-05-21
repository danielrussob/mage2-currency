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
    /**
     * @var array
     */
    protected $currenciesPositions;

    public function __construct (
        ScopeConfigInterface $scopeConfig,
        array $currenciesPositions = []
    ) {
        $this->_scopeConfig = $scopeConfig;
        $this->currenciesPositions = $currenciesPositions;
    }

    public function getPositionByBaseCode($baseCode)
    {
        $baseCode = trim($baseCode);

        $defaultPosition = (int)$this->_scopeConfig->getValue('dnafactory/currency/position', ScopeInterface::SCOPE_STORE);
        if($defaultPosition == '') {
            $defaultPosition = \Magento\Framework\Currency::LEFT;
        }

        if (!array_key_exists($baseCode, $this->currenciesPositions)) {
            return $defaultPosition;
        }
        return $this->currenciesPositions[$baseCode];
    }
}
