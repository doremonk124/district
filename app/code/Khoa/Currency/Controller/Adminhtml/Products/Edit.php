<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Khoa\Currency\Controller\Adminhtml\Products;


class Edit extends \Magento\Backend\App\Action
{
    protected $_publicActions = ['edit'];

    protected $_coreRegistry;
    protected $resultPageFactory;
    protected $_postFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Khoa\Currency\Model\PostFactory $postFactory
    ) {
        $this->_postFactory = $postFactory;
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
//        $productId = $this->getRequest()->getParams('id');
//
//        $post = $this->_postFactory->create();
//        $product = $post->getCollection();
//        $productDetail = '';
//        foreach($product as $item){
//            if($item->getData('id') == $productId['id']) {
//                $productDetail = $item->getData();
//            }
//        }
//        $this->_coreRegistry->register('foo', $productDetail);
        return $resultPage;
    }
}
