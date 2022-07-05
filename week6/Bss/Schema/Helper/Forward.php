<?php
namespace Bss\Schema\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Forward extends AbstractHelper
{
    const PATH = 'internship/general/enable';
    /**
     * @return mixed
     */
    public function isEnable(){
        return $this->scopeConfig->getValue(self::PATH, ScopeInterface::SCOPE_STORE);
    }
}

