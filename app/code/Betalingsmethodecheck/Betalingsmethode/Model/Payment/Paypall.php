<?php


namespace Betalingsmethodecheck\Betalingsmethode\Model\Payment;

class Paypall extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "paypall";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
