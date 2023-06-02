<?php

namespace App\Models\ApiExtensions\Kernel;

use App\Models\Order;

trait HasOrderRelation
{
    public function workOrder()
    {
        return $this->belongnsTo(Order::class);
    }
}
