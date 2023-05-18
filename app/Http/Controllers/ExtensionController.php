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
        $api_extension = ApiExtension::find( $request->extension );

        $api_extension->modeling::install();

        Extension::create([
            'api_extension_id' => $api_extension->id,
            'api_extension_model' => $api_extension->model,
        ]);

        return redirect()->route('extensions.index')->with('success', "Extension {$api_extension->modeling->name} installed");
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
