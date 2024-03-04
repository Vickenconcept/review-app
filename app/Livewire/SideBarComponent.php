<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class SideBarComponent extends Component
{
    public function render()
    {
        // $reviews = '';
        $widgets = '';
        $totlalResponse = Review::all()->count();
        $totalNumberOfResponse = 100;
        $responsePercentage = ($totlalResponse / $totalNumberOfResponse) * 100;
        

        $user = auth()->user();
        $site = $user->sites()->first();
        $totalUsers = $site->users()->count();
        $totalNumberOfUsers = 3; 
        $totalUsers = $site->users()->count();
        $UserPercentage = ($totalUsers / $totalNumberOfUsers) * 100;


        $totalEmail =  $site->email_number;
        $totalNumberOfEmail =  15;
        $emailPercentage = ($totalEmail / $totalNumberOfEmail) * 100;





        return view('livewire.side-bar-component', compact(
            'site', 'UserPercentage', 'totalNumberOfUsers',
            'totlalResponse','totalNumberOfResponse','responsePercentage','totalNumberOfEmail', 'emailPercentage',
            'totalEmail'));
    }
}
