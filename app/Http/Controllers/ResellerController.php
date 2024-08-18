<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Reseller;
use App\Models\Site;
use App\Models\User;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
// use shweshi\OpenGraph\OpenGraph;
use OpenGraph;

class ResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reseller');
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
        try {

            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'url' => 'required|url',
            ]);

            $data['is_admin'] = '1';
            $user = User::create($data);
            $uderId = $user->id;
            
            $owner = auth()->user();
            $user->resellers()->create([
                'resell_id' => $owner->id,
            ]);
            

            // session()->put('userId', $user->id);


            // $openGraphData = OpenGraph::fetch($data['url'], true);

            try {
                // Attempt to fetch the OpenGraph data from the provided URL
                $openGraphData = OpenGraph::fetch($data['url'], true);
            } catch (RequestException $e) {
                // If the URL cannot be resolved or any other error occurs, use an alternative URL
                $alternativeUrl = 'https://trustconvertio.com/login'; // Replace with your alternative URL
        
                try {
                    // Attempt to fetch the OpenGraph data from the alternative URL
                    $openGraphData = OpenGraph::fetch($alternativeUrl, true);
                } catch (RequestException $e) {
                    // Handle the failure to fetch even from the alternative URL
                    $openGraphData = null; // Or handle as needed
                }
            }

            $color = $openGraphData['theme-color'] ?? null;
            $description = $openGraphData['description'] ?? null;

            $urlComponents = parse_url($data['url']);
            $hostName = $urlComponents['host'] ?? null;
            $hostName = str_replace('www.', '', $hostName);
            $siteName = $this->removeTld($hostName);


            $site = new Site();
            $site->name = $siteName; // Replace 'name' with the actual field name
            $site->description = $openGraphData['description'] ?? null;
            $site->url = $openGraphData['url'] ?? $data['url'];
            $site->color = $openGraphData['theme-color'] ?? null;

            // Save the site and associate it with the user
            $user->sites()->save($site);
            Mail::to($data['email'])->send(new WelcomeMail($data['password']));
            // Your code that might throw the duplicate entry error
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle the exception
            if ($e->getCode() == 23000) {
                return redirect()->back()->withInput()->withErrors(['error' => 'A duplicate entry error occurred. Please try again.']);
            }
        }


        return back()->with('success','User Created Successfully');
    }

    private function removeTld($hostName)
    {
        $parts = explode('.', $hostName);

        // Check if there are at least two parts before removing the TLD
        if (count($parts) >= 2) {
            array_pop($parts); // Remove TLD
        }

        return implode('.', $parts);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reseller $reseller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reseller $reseller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reseller $reseller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return back()->with('success', 'User Deleted Successfully');
    }
}
