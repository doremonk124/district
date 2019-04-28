<?php
namespace Khoa\Currency\Block\Admin;
class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function helloAdmin()
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/khoa.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('block');
        return __('Hello Admin');
    }
}