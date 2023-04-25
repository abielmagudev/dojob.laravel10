<?php

namespace App\Http\Controllers;

use App\Models\ApiExtension;
use App\Models\Extension;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    public function index(Request $request)
    {
        $api_categories = ApiExtension::categories();

        $api_extensions = $api_categories->contains($request->category) 
                        ? ApiExtension::byCategory($request->category)->get() 
                        : ApiExtension::all();

        return view('extensions.index', [
            'api_categories' => $api_categories,
            'api_extensions' => $api_extensions,
            'api_category_selected' => $request->category,
            'extensions' => Extension::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
