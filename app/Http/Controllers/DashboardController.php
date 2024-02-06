<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
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
        $data = Site::withCount(['users', 'campaigns'])
        ->with(['campaigns' => function ($query) {
            $query->withCount('reviews');
        }])
        ->where('id', $site->id)
        ->get();


        return view('dashboard', compact('reviews', 'data'));
    }
}
