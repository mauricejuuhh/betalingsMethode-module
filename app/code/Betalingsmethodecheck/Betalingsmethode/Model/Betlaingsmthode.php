<?php


namespace Betalingsmethodecheck\Betalingsmethode\Model;

use Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface;

class Betlaingsmthode extends \Magento\Framework\Model\AbstractModel implements BetlaingsmthodeInterface
{

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Betalingsmethodecheck\Betalingsmethode\Model\ResourceModel\Betlaingsmthode');
    }

    /**
     * Get betlaingsmthode_id
     * @return string
     */
    public function getBetlaingsmthodeId()
    {
        return $this->getData(self::BETLAINGSMTHODE_ID);
    }

    /**
     * Set betlaingsmthode_id
     * @param string $betlaingsmthodeId
     * @return \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface
     */
    public function setBetlaingsmthodeId($betlaingsmthodeId)
    {
        return $this->setData(self::BETLAINGSMTHODE_ID, $betlaingsmthodeId);
    }

    /**
     * Get betlaingsmethode
     * @return string
     */
    public function getBetlaingsmethode()
    {
        return $this->getData(self::BETLAINGSMETHODE);
    }

    /**
     * Set betlaingsmethode
     * @param string $betlaingsmethode
     * @return \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface
     */
    public function setBetlaingsmethode($betlaingsmethode)
    {
        return $this->setData(self::BETLAINGSMETHODE, $betlaingsmethode);
    }
}
