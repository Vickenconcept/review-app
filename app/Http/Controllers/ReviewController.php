<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\CSRF;


class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('index','update', 'destroy');

        // $this->middleware('csrf')->only('store','update', 'destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('review.index');
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
        $campaignId = $request->input('campaignId');
        $siteId = $request->input('siteId');
        $email = $request->input('email');
        $message = $request->input('message');


        $data = [
            'site_id' => $siteId,
            'campaign_id' => $campaignId,
            'uuid' => Str::uuid()->toString(),
            'private_feed_back_ans' => [
                'name' =>'Client',
            ],
            'contact_info_ans' => [
                'email' => $email,
                'location' => null,
                'organisation' => null,
                'image' => null,
            ],
            'review_platform_ans' => $message,
        ];

        // dd($data);

        $feedback = Review::create($data);
        return back()->with('success', 'Your message was successfully submitted');
        
    }

    /**
     * Display the specified resource.
     */
    public function show( $uuid)
    {
        $review = Review::where('uuid', $uuid)->firstOrFail();
        
        return view('review.show', compact('review'));
    }

    public function share( )
    {
        $reviews = Review::latest()->simplePaginate(3);
        
        return view('review.share', compact('reviews'));
    }

    public function shareOne( $uuid)
    {
        $review = Review::where('uuid', $uuid)->firstOrFail();
        
        return view('review.social-share', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
         return back()->with('success', 'Delete sucessfully');
    }
}
