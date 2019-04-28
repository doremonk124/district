<?php
namespace Khoa\Currency\Block;
class Header extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function header()
    {
        return __('Hello Menu');
    }
}