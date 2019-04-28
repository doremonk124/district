<?php
namespace Khoa\District\Model\ResourceModel\Post;

use Magento\Framework\App\ObjectManager;
use Magento\Directory\Model\AllowedCountries;
use Magento\Store\Model\ScopeInterface;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'maqh';
    protected $_eventPrefix = 'khoa_district_post_collection';
    protected $_eventObject = 'post_collection';
    /**
     * Define resource model
     *
     * @return void
     */

    protected function _construct()
    {
        $this->_init('Khoa\District\Model\Post', 'Khoa\District\Model\ResourceModel\Post');
    }

}