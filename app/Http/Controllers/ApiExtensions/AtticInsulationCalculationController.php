<?php

namespace App\Http\Controllers\ApiExtensions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AtticInsulationCalculationController extends Controller
{
    public function create(Request $request)
    {
        return [
            'view' => view('api-extensions/attic-insulation-calculation/create')->render(),
            'script' => null,
        ];
    }
}
