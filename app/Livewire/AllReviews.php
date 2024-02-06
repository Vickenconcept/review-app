<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class AllReviews extends Component
{

    public $campaigns,
    $reviews;
    

    public function render()
    {
        // $query = $this->campaign->reviews();
        $this->reviews  = Review::latest()->get();

        // dd($this->reviews);

        // $this->reviews = $this->campaigns->reviews();

        return view('livewire.all-reviews');
    }
}
