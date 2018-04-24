<?php

namespace DNAFactory\Currency\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Magento\Framework\Currency;

class ListPosition implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => Currency::LEFT, 'label' => __('Left')],
            ['value' => Currency::RIGHT, 'label' => __('Right')],
        ];
    }
}