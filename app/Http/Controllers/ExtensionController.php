<?php

namespace App\Http\Controllers;

use App\Models\ApiExtension;
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

        Extension::create([
            'api_extension_id' => $api_extension->id,
            'api_extension_model_classname' => $api_extension->model_classname,
        ]);

        return redirect()->route('extensions.index')->with('success', "Extension {$api_extension->incubator->name} installed");
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
