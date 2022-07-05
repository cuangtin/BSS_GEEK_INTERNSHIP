<?php

namespace Bss\Schema\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class DataExample extends AbstractDb
{
    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init("internship_geek2", "id");
    }
}

