<?php

namespace Bss\Schema\Model;

use Magento\Framework\Model\AbstractModel;

class DataExample extends AbstractModel
{
    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init("Bss\Schema\Model\ResourceModel\DataExample");
    }
}
