<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('platform');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Platform $platform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platform $platform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platform $platform)
    {
        //
    }

    public function batchDelete(Request $request)
    {
        $platformIds = $request->input('platforms');

        Campaign::whereIn('platform_id', $platformIds)->update(['platform_id' => null]);

        Platform::whereIn('id', $platformIds)->delete();

        return redirect()->back()->with('success', 'Platforms deleted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();
    }
}



// I have this in my recent WEAC result in Nigeria: Civic Education   A1, English   B3, Mathematics D7, Agricultural Science  C6, Biology  C6, Chemistry  f9, Physics  f9. I want to apply for an undergraduate scholarship program  in the school,  can i get any. I have four years of work experience in software development. I wanted to study computer but because of my grade, I now started considering art which is my born talent that i have practiced  since childhood till now.
// So my question is this: can my grade score afford me the scholarship program in  Dundee.