<?php


namespace Betalingsmethodecheck\Betalingsmethode\Model\ResourceModel\Betlaingsmthode;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Betalingsmethodecheck\Betalingsmethode\Model\Betlaingsmthode',
            'Betalingsmethodecheck\Betalingsmethode\Model\ResourceModel\Betlaingsmthode'
        );
    }
}
