<?php
namespace Khoa\District\Model;
use \Magento\Framework\DataObject\IdentityInterface;
use \Khoa\Currency\Api\TestInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements IdentityInterface, TestInterface
{
    const CACHE_TAG = 'khoa_district_post';

    protected $_cacheTag = 'khoa_district_post';

    protected $_eventPrefix = 'khoa_district_post';

    protected function _construct()
    {
        $this->_init('Khoa\District\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
    public function getValue()
    {
        // TODO: Implement getValue() method.
    }
}