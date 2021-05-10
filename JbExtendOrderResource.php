<?php

namespace jbApiExample;

use Shopware\Components\Plugin;

class JbExtendOrderResource extends Plugin
{
/**
 * Attributes of one order
 */
    public function getAction()
    {
        $id = $this->Request()->getParam('id');
        //GET /api/Order/Details{id}
        $orderData = $this->resource->getOne($id);
        //get Orderdata from the Order with he id $id
        $this->View()->assign(['success' => true, 'data' => $orderData]);
    }
}
