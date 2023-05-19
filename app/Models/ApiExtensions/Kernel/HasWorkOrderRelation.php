<?php

namespace App\Models\ApiExtensions\Kernel;

use App\Models\workOrder;

trait HasWorkOrderRelation
{
    public function workOrder()
    {
        return $this->belongnsTo(WorkOrder::class);
    }
}
