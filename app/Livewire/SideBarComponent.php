<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class SideBarComponent extends Component
{
    public function render()
    {
        $reviews = '';
        $widgets = '';
        $responses = Review::all()->count();
        

        $user = auth()->user();
        $site = $user->sites()->first();
        $totalUsers = $site->users()->count();
        $totalNumberOfUsers = 3; 
        $totalUsers = $site->users()->count();

        $UserPercentage = ($totalUsers / $totalNumberOfUsers) * 100;
        // dd($UserPercentage);

        return view('livewire.side-bar-component', compact('site', 'UserPercentage', 'totalNumberOfUsers','responses'));
    }
}
