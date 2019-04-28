<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Khoa\District\Model\ResourceModel;


class District extends \Magento\Eav\Model\Entity\Attribute\Source\Table
{
    /**
     * @var Post\CollectionFactory
     */
    protected $_countriesFactory;

    /**
     * District constructor.
     * @param \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory
     * @param \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory
     * @param Post\CollectionFactory $countriesFactory
     */
    public function __construct(
        \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory,
        \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory,
        \Khoa\District\Model\ResourceModel\Post\CollectionFactory $countriesFactory
//        \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $countriesFactory
//        \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $countriesFactory
    ) {
        $this->_countriesFactory = $countriesFactory;
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory);
    }

    /**
     * @inheritdoc
     */
    public function getAllOptions($withEmpty = true, $defaultValues = false)
    {
//        if (!$this->_options) {
//            $this->_options = $this->_createCountriesCollection()->loadByStore(
//                $this->getStoreManager()->getStore()->getId()
//            )->toOptionArray();
//        }
        $collection = $this->_createCountriesCollection();
        $array = array();
        foreach($collection as $item){
            $array[] = array(
                'value' =>$item->getData('maqh'),
                'title' =>$item->getData('name'),
                'region_id' => $item->getData('matp'),
                'label' => $item->getData('name')
                );
        }
//        var_dump($array);die();
        return $array;
    }

    /**
     * @return \Magento\Directory\Model\ResourceModel\Country\Collection
     */
    protected function _createCountriesCollection()
    {
        return $this->_countriesFactory->create();
    }
}
