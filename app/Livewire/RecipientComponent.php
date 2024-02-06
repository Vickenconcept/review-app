<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class RecipientComponent extends Component
{

    public $campaign;
    public $reviews, $campaignType;

    public function mount($campaign)
    {
        $this->campaign = $campaign;
        $this->campaignType = $campaign->campaignType;

        // $this->reviews  = Review::where('campaign_id', $this->campaign->id )->paginate(7);
        // dd($review);

        $this->reviews = $this->campaign->reviews;
    }
    public function deleteReview($id)
    {

        $review = Review::where('id', $id)->first();
        
        $review->delete();

        $this->dispatch('review-deleted');
    }
    public function render()
    {

        return view('livewire.recipient-component');
    }
}
