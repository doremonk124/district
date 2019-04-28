<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Khoa\Currency\Controller\Adminhtml\Products;

class Newproduct extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
    protected $postFactory;
    protected $messageManager;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Catalog\Controller\Adminhtml\Product\Builder $productBuilder
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Khoa\Currency\Model\PostFactory $postFactory
    ) {
        $this->messageManager = $messageManager;
        $this->postFactory = $postFactory;
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    /**
     * Product list page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        if(isset($_POST['name'])) {
            $post = $this->postFactory->create();
            $collection = $post->getCollection($_POST['name']);
            $live = '';
            foreach ($collection as $collec)
            {
                if($collec->getData('title')== $_POST['name'])
                {
                    $live = 'live';
                }
            }
            if($live == 'live') {
                $this->messageManager->addError(__("Product đã tồn tại"));
            } else {
                $post = $this->postFactory->create();
                $post->setData('title',$_POST['name']);
                $post->save();
                $this->messageManager->addSuccess(__("Đã thêm sản phẩm"));
            }
        }
        return $resultPage;
    }
}
