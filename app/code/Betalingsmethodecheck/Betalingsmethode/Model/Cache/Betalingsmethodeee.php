<?php


namespace Betalingsmethodecheck\Betalingsmethode\Model\Cache;

class Betalingsmethodeee extends \Magento\Framework\Cache\Frontend\Decorator\TagScope
{

    const TYPE_IDENTIFIER = 'betalingsmethodeee_cache_tag';
    const CACHE_TAG = 'BETALINGSMETHODEEE_CACHE_TAG';

    /**
     * @param \Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool
     */
    public function __construct(
        \Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool
    ) {
        parent::__construct($cacheFrontendPool->get(self::TYPE_IDENTIFIER), self::CACHE_TAG);
    }
}
