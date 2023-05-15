<?php

namespace App\Http\Controllers;

use App\Api\Server\ApiExtension;
use App\Models\Extension;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    public function index(Request $request)
    {
        return view('extensions.index', [
            'api_extensions' => ApiExtension::all(),
            'extensions' => Extension::all(),
            'tags' => $request->get('tags', ''),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->dd();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Extension $extension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extension $extension)
    {
        //
    }
}
