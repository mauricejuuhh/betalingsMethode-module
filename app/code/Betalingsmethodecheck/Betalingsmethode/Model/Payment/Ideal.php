<?php


namespace Betalingsmethodecheck\Betalingsmethode\Model\Payment;

class Ideal extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "ideal";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
