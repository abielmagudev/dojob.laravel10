<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Task;
use Illuminate\Http\Request;

class ApiExtensionComponentController extends Controller
{
    public function __invoke($task_id, $type)
    {
        $components = [];

        $task = Task::find($task_id);
        $job  = Job::with('extensions.api')->where('id', $task->job_id)->first();

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
