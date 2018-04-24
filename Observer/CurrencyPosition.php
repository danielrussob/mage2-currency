<?php

namespace DNAFactory\Currency\Observer;

use DNAFactory\Currency\Config\Currency;
use Magento\Framework\Event\ObserverInterface;

class CurrencyPosition implements ObserverInterface
{
    /**
     * @var Currency
     */
    protected $_currencyConfig;

    public function __construct(\DNAFactory\Currency\Config\Currency $currencyConfig)
    {
        $this->_currencyConfig = $currencyConfig;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $currencyOptions = $observer->getEvent()->getCurrencyOptions();
        $currencyOptions->setData('position', $this->_currencyConfig->getPositionByBaseCode($observer->getEvent()->getBaseCode()));
        return $this;
    }
}