<?php

namespace Magento\Plugin;

class Product
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result * 1.1;
    }
}