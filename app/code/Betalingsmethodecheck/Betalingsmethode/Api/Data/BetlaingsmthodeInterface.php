<?php


namespace Betalingsmethodecheck\Betalingsmethode\Api\Data;

interface BetlaingsmthodeInterface
{

    const BETLAINGSMETHODE = 'betlaingsmethode';
    const BETLAINGSMTHODE_ID = 'betlaingsmthode_id';


    /**
     * Get betlaingsmthode_id
     * @return string|null
     */
    public function getBetlaingsmthodeId();

    /**
     * Set betlaingsmthode_id
     * @param string $betlaingsmthode_id
     * @return \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface
     */
    public function setBetlaingsmthodeId($betlaingsmthodeId);

    /**
     * Get betlaingsmethode
     * @return string|null
     */
    public function getBetlaingsmethode();

    /**
     * Set betlaingsmethode
     * @param string $betlaingsmethode
     * @return \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface
     */
    public function setBetlaingsmethode($betlaingsmethode);
}
