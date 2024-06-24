<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Platform;
use App\Models\Review;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $reviews = Campaign::with(['reviews' => function ($query) {
            $query->latest();
        }])->latest()->get()->pluck('reviews')->flatten()->take(4);

        $user = auth()->user();

        $site = $user->sites()->first();
        if ($site) {
            $data = Site::withCount(['users', 'campaigns'])
            ->with(['campaigns' => function ($query) {
                $query->withCount('reviews');
            }])
            ->where('id', $site->id)
            ->get();

            $platforms = Platform::get();
            
            $platforms = $platforms->groupBy('name')->toArray();
            # code...
            return view('dashboard', compact('reviews', 'data', 'platforms'));
        }else {

            $userId = session()->get('userId');

            return view('auth.web-detail', compact('userId'));
        }




    }
}
