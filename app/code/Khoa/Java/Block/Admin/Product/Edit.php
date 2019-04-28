<?php
namespace Khoa\Currency\Block\Admin\Product;
class Edit extends \Magento\Framework\View\Element\Template
{

    protected $_coreRegistry;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        array $data = []
    ){
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    public function test()
    {
        $post = $this->_coreRegistry->registry('foo');
        return $post;
    }
}