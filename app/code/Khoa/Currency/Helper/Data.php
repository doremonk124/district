<?php
namespace Khoa\Currency\Helper;
use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_khoa = 'khoa';

    public function khoa()
    {
        return $this->_khoa;
    }
    public function getConfigValue($code, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            'currency/general/'. $code, ScopeInterface::SCOPE_STORE, $storeId
        );
    }
}
?>