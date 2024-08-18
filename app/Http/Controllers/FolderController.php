<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // dd('hello');
        $user = auth()->user();
        $siteId =  $user->sites()->first();

        $valaidatedData = $request->validate([
            "site_id" =>  'sometimes',
            "name" => "required",
        ]);
        $valaidatedData['site_id'] =  $siteId->id;

        $folder = Folder::create($valaidatedData);

        return redirect()->back()->with("success", "Folder Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function addToFolder(Request $request)
    {
        $campaignId = $request->input('campaignId');
        $folderId = $request->input('folderId');

        $campaign = Campaign::find($campaignId);
        $campaign->folder_id = $folderId;
        $campaign->save();
        return back()->with('success', 'Added to folder');
    }
    public function show(Folder $folder)
    {
        return view('folder', compact('folder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Folder $folder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Folder $folder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Folder $folder)
    {
        $campaigns = $folder->campaigns;

        foreach ($campaigns as $campaign) {
            $campaign->update(['folder_id' => null]);
        }

        $folder->delete();

        return redirect()->to('campaign')->with('success', 'Folder deleted successfully.');
    }
}
