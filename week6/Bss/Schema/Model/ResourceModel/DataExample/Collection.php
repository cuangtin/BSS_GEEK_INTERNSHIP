<?php

namespace Bss\Schema\Model\ResourceModel\DataExample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init("Bss\Schema\Model\DataExample", "Bss\Schema\Model\ResourceModel\DataExample");
    }
}
