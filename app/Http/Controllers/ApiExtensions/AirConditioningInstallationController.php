<?php

namespace App\Http\Controllers\ApiExtensions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirConditioningInstallationController extends Controller
{
    public function create(Request $request)
    {
        return [
            'view' => view('api-extensions/air-conditioning-installation/create')->render(),
            'script' => null,
        ];
    }
}
