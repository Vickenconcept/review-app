<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Folder;
use App\Models\Review;
use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
    {

        $this->middleware('checkRouteStatus')->only('component');
    }
    public function index()
    {

        $campaigns = Campaign::latest()->paginate(7);
        // $QRCode = QrCode::size(300)->generate($url);

        return view('campaign.index', compact('campaigns'));
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

        $user = auth()->user();
        $siteId = $user->sites->first()->id;
        // $folderId = Folder::find(1);

        // dd($siteId);
        // $campaignId =  DB::table('campaigns')->insertGetId([
        $campaign =  Campaign::create([
            'uuid' => Str::uuid()->toString(),
            'site_id' => $siteId,
            'widget_id' => 1,
            'folder_id' => null,
            'name' => 'Campaign Name',
            'no_negative' => 1,
            'language' => 'English',
            'net_promote' => 'How likely are you to recommend our service to a friend or colleague?',
            'nps_comment' => 'What is the primary reason for your score?',
            'nps_comment_desc' => "Your feedback helps us improve. Could tell us more about your experience with us and why you chose this rating? Feel free to share your thoughts in as much detail as you wish. We're thankful for your input!",
            'star_question' => 'How would you rate our service?',
            'normal_review' => 'Please describe your experience with us.',
            'normal_review_desc' => 'Feel free to give your honest opinion and share your thoughts in as much detail as you wish. Your review will be a huge help to other people.',
            'review_platform' => 'Please take a moment to share your experience with us. Your feedback not only helps us, it helps other potential customers',
            'contact_info' => 'Tell us about yourself',
            'video_review' => 'Record a video review',
            'video_review_desc' => 'Leave a short video review. Feel free to give your honest opinion and share your thoughts in as much detail as you wish. ',
            'review_thanks' => 'Thank you for the review!',
            'review_thanks_desc' => 'We appreciate your review. You can close the survey now. Kind regards, [company_name:]',
            'private_feed_back' => 'Please let us know what was missing or disappointing in your experience with us.',
            'private_feed_back_desc' => 'Feel free to share your thoughts in as much detail as you wish. We are thankful for your input!',
            'private_feed_back_Thanks' => 'Thanks for the feedback!',
            'private_feed_back_Thanks_desc' => 'We appreciate your feedback. You can now close the survey. Kind regards, [company_name:]',
        ]);

        // dd($campaign->slug);
        return redirect()->route('campaign.show', ['campaign' => $campaign->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $campaign = Campaign::where('slug', $slug)->with('reviews')->firstOrFail();


        return view('campaign.show', ['campaign' => $campaign]);
    }
    public function share($uuid)
    {

        $campaign = Campaign::where('uuid', $uuid)->firstOrFail();
        // dd($campaign);

        return view('campaign.share', ['campaign' => $campaign]);
    }
    public function component($uuid)
    {
        $campaign = Campaign::where('uuid', $uuid)->firstOrFail();

        $reviews = Review::where('campaign_id', $campaign->id)
            ->where('show', '1')
            ->take(2)
            ->get();

        return view('campaign.component', ['campaign' => $campaign, 'reviews' => $reviews]);
    }
    public function selectWidget($uuid = null)
    {
        if ($uuid) {
        //    dd($id);
        }
        $widgets = Widget::latest()->get();
        return view('widget.index', ['widgets' => $widgets,'campaignId' => $uuid]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $uuid)
    {
     
         $widgetId = $request->input('widget_id');
        $campaign = Campaign::where('uuid', $uuid)->firstOrFail();
        $campaign->widget_id =  $widgetId;
        $campaign->update();

        return back()->with('success', 'Widget ' . $widgetId. ', set successfully');
        // dd($campaign->widget_id );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
