<?php


namespace Betalingsmethodecheck\Betalingsmethode\Api\Data;

interface BetlaingsmthodeSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get betlaingsmthode list.
     * @return \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface[]
     */
    public function getItems();

    /**
     * Set betlaingsmethode list.
     * @param \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
