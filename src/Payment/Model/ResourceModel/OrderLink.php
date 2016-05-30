<?php

namespace Amazon\Payment\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class OrderLink extends AbstractDb
{
    const TABLE_NAME = 'amazon_sales_order';
    
    protected function _construct()
    {
        $this->_init(static::TABLE_NAME, 'entity_id');
    }
}
