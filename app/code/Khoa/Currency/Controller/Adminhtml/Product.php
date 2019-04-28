<?php
namespace Khoa\Currency\Controller\Adminhtml;


abstract class Product extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Magento_Catalog::products';

    protected $productBuilder;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Catalog\Controller\Adminhtml\Product\Builder $builder
    ) {
        $this->productBuilder = $builder;
        parent::__construct($context);
    }
}
