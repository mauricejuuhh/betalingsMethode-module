<?php


namespace Betalingsmethodecheck\Betalingsmethode\Model;

use Betalingsmethodecheck\Betalingsmethode\Api\BetlaingsmthodeRepositoryInterface;
use Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeSearchResultsInterfaceFactory;
use Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Betalingsmethodecheck\Betalingsmethode\Model\ResourceModel\Betlaingsmthode as ResourceBetlaingsmthode;
use Betalingsmethodecheck\Betalingsmethode\Model\ResourceModel\Betlaingsmthode\CollectionFactory as BetlaingsmthodeCollectionFactory;
use Magento\Store\Model\StoreManagerInterface;

class BetlaingsmthodeRepository implements betlaingsmthodeRepositoryInterface
{

    protected $resource;

    protected $betlaingsmthodeFactory;

    protected $betlaingsmthodeCollectionFactory;

    protected $searchResultsFactory;

    protected $dataObjectHelper;

    protected $dataObjectProcessor;

    protected $dataBetlaingsmthodeFactory;

    private $storeManager;


    /**
     * @param ResourceBetlaingsmthode $resource
     * @param BetlaingsmthodeFactory $betlaingsmthodeFactory
     * @param BetlaingsmthodeInterfaceFactory $dataBetlaingsmthodeFactory
     * @param BetlaingsmthodeCollectionFactory $betlaingsmthodeCollectionFactory
     * @param BetlaingsmthodeSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceBetlaingsmthode $resource,
        BetlaingsmthodeFactory $betlaingsmthodeFactory,
        BetlaingsmthodeInterfaceFactory $dataBetlaingsmthodeFactory,
        BetlaingsmthodeCollectionFactory $betlaingsmthodeCollectionFactory,
        BetlaingsmthodeSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->betlaingsmthodeFactory = $betlaingsmthodeFactory;
        $this->betlaingsmthodeCollectionFactory = $betlaingsmthodeCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataBetlaingsmthodeFactory = $dataBetlaingsmthodeFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface $betlaingsmthode
    ) {
        /* if (empty($betlaingsmthode->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $betlaingsmthode->setStoreId($storeId);
        } */
        try {
            $betlaingsmthode->getResource()->save($betlaingsmthode);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the betlaingsmthode: %1',
                $exception->getMessage()
            ));
        }
        return $betlaingsmthode;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($betlaingsmthodeId)
    {
        $betlaingsmthode = $this->betlaingsmthodeFactory->create();
        $betlaingsmthode->getResource()->load($betlaingsmthode, $betlaingsmthodeId);
        if (!$betlaingsmthode->getId()) {
            throw new NoSuchEntityException(__('betlaingsmthode with id "%1" does not exist.', $betlaingsmthodeId));
        }
        return $betlaingsmthode;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->betlaingsmthodeCollectionFactory->create();
        foreach ($criteria->getFilterGroups() as $filterGroup) {
            foreach ($filterGroup->getFilters() as $filter) {
                if ($filter->getField() === 'store_id') {
                    $collection->addStoreFilter($filter->getValue(), false);
                    continue;
                }
                $condition = $filter->getConditionType() ?: 'eq';
                $collection->addFieldToFilter($filter->getField(), [$condition => $filter->getValue()]);
            }
        }
        
        $sortOrders = $criteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage($criteria->getCurrentPage());
        $collection->setPageSize($criteria->getPageSize());
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setTotalCount($collection->getSize());
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \Betalingsmethodecheck\Betalingsmethode\Api\Data\BetlaingsmthodeInterface $betlaingsmthode
    ) {
        try {
            $betlaingsmthode->getResource()->delete($betlaingsmthode);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the betlaingsmthode: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($betlaingsmthodeId)
    {
        return $this->delete($this->getById($betlaingsmthodeId));
    }
}
