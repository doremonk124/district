<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Khoa\District\Controller\Adminhtml\Customer;


class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    protected $postFactory;
    protected $_resultJsonFactory;

    function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Khoa\District\Model\ResourceModel\Post\CollectionFactory $countriesFactory
    ) {
        parent::__construct($context);
        $this->_resultJsonFactory = $resultJsonFactory;
        $this->postFactory = $countriesFactory;
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Product list page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $result = $this->_resultJsonFactory->create();
        $resultPage = $this->resultPageFactory->create();
        $collection = $this->postFactory->create();
        $currentProductId = $this->getRequest()->getParams();
        $currentProductId = $currentProductId['param'];
        $data = array();
        foreach($collection as $item){
            if($item->getData('matp') == $currentProductId){
                $data[] = array(
                    'value' =>$item->getData('maqh'),
                    'title' =>$item->getData('name'),
                    'region_id' => $item->getData('matp'),
                    'label' => $item->getData('name')
                );
            }
        }
        $result->setData(['output'=> $data]);
        return $result;
    }
}
