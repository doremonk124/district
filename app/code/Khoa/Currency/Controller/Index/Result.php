<?php
namespace Khoa\Currency\Controller\Index;

class Result extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $pageObject  = $this->_pageFactory->create();
        var_dump($_POST);
        return $pageObject;
    }
}