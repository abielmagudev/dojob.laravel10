<?php

namespace App\Http\Controllers\ApiExtensions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AtticInsulationCalculationController extends Controller
{
    public function create(Request $request)
    {
        return [
            'template' => view('api-extensions/attic-insulation-calculation/create')->render(),
            'script' => '4tt1c1nsul4t10n.js',
        ];
    }
}
