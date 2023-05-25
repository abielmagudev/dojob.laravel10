<?php

namespace App\Models\ApiExtensions\Kernel;

use App\Models\Order;

trait HasWorkOrderRelation
{
    public function workOrder()
    {
        return $this->belongnsTo(Order::class);
    }
}
