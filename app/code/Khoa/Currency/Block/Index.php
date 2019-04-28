<?php
namespace Khoa\Currency\Block;
use Magento\Store\Model\ScopeInterface;

class Index extends \Magento\Framework\View\Element\Template
{
    protected  $_helperData;
    protected $_productRepository;
    protected $_productImageHelper;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Khoa\Currency\Helper\Data $helperData,
        \Magento\Catalog\Model\ProductRepository $productRepository,
        \Magento\Catalog\Helper\Image $productImageHelper
    ) {
        $this->_productRepository = $productRepository;
        $this->_productImageHelper = $productImageHelper;
        $this->_helperData = $helperData;
        parent::__construct($context);
    }

    public function getUrlController()
    {
        return $this->getUrl('currency/adminhtml/products/index');
    }

    public function sayHello()
    {

        $khoa1 = $this->_helperData->getConfigValue('enable');
        $khoa = $this->_helperData->getConfigValue('display_text');
        return $khoa;
    }
    public function getProductById($id)
    {
        return $this->_productRepository->getById($id);
    }

    public function getProductBySku($sku)
    {
        return $this->_productRepository->get($sku);
    }
    public function getImageProduct($_product)
    {
        $image_url = $this->_productImageHelper->init($_product, 'product_base_image')->getUrl();
        return $image_url;
    }
//    public function resizeImage($product, $imageId, $width, $height = null)
//    {
//        $resizedImage = $this->_productImageHelper
//            ->init($product, $imageId)
//            ->constrainOnly(TRUE)
//            ->keepAspectRatio(TRUE)
//            ->keepTransparency(TRUE)
//            ->keepFrame(FALSE)
//            ->resize($width, $height);
//        return $resizedImage;
//    }
}