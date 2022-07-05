<?php
namespace Bss\Routing\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    public function getText($text){
        return $this->scopeConfig->getValue('helloworld/general/'.$text, ScopeInterface::SCOPE_STORE);
    }

    public function getGeneralConfig($text)
    {
        return $this->getConfigValue('helloworld/general/'. $text, null);
    }
}
