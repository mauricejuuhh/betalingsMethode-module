<?php


namespace Betalingsmethodecheck\Betalingsmethode\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface BetlaingsmthodeRepositoryInterface
{


    /**
     * Save betlaingsmthode
     * @param \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface $betlaingsmthode
     * @return \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface $betlaingsmthode
    );

    /**
     * Retrieve betlaingsmthode
     * @param string $betlaingsmthodeId
     * @return \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($betlaingsmthodeId);

    /**
     * Retrieve betlaingsmthode matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete betlaingsmthode
     * @param \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface $betlaingsmthode
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface $betlaingsmthode
    );

    /**
     * Delete betlaingsmthode by ID
     * @param string $betlaingsmthodeId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($betlaingsmthodeId);
}
