<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Order;
use Illuminate\Http\Request;

class ApiExtensionComponentController extends Controller
{
    public function __invoke($work_order_id, $type)
    {
        $components = [];

        $order = Order::find($work_order_id);
        $job  = Job::with('extensions.api')->where('id', $order->job_id)->first();

        foreach($job->extensions as $extension)
        {
            $path = sprintf('api-extensions-components/%s/%s', $extension->api->slug, $type);
            $components[] = json_encode([
                'template' => view($path)->render(),
                'script' => null,
            ]);
        }

        return response()->json(['components' => $components]);
    }
}
