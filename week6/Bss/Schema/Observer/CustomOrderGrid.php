<?php

namespace Bss\Schema\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class CustomOrderGrid implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return $this|void
     */
    public function execute(Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $quote = $observer->getEvent()->getQuote();
        if (empty($order) || empty($quote)) {
            return $this;
        }
        $shippingAddress = $quote->getShippingAddress();
        if ($shippingAddress->getCustomVat()) {
            $order->setCustomVat($shippingAddress->getCustomVat())->save();
        }
        return $this;
    }
}

