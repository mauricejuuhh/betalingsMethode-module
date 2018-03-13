<?php


namespace Betalingsmethodecheck\Betalingsmethode\Model\ResourceModel;

class Betlaingsmthode extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('betalingsmethodecheck_betalingsmethode_betlaingsmthode', 'betlaingsmthode_id');
    }
}
