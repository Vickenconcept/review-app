<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class ResponseComponent extends Component
{

    public $campaign;
    public $reviews;
    public $search = '',
        $sortOption = 'latest',
        $selectedOption1,
        $selectedOption2,
        $selectedContactOption,
        $selectedDate;

    public function mount($campaign)
    {
        $this->campaign = $campaign;
        // $this->reviews = $campaign->reviews()->latest()->get();
    }

    public function deleteReview($id)
    {

        $review = Review::where('id', $id)->first();
        $review->delete();

        $this->dispatch('review-deleted');
    }
    public function render()
    {
        $query = $this->campaign->reviews();
        if ($this->search) {
            $query->where(function ($query) {
                $query->where("private_feed_back_ans->name", 'like', '%' . $this->search . '%')
                    ->orWhere("contact_info_ans->location", 'like', '%' . $this->search . '%')
                    ->orWhere("private_feed_back_ans->email", 'like', '%' . $this->search . '%')
                    ->orWhere("contact_info_ans->email", 'like', '%' . $this->search . '%')
                    ->orWhere("contact_info_ans->organisation", 'like', '%' . $this->search . '%');
            });
        }

        
        // if ($this->search) {
        //     $query->where(function ($query) {
        //         $searchTerm = $this->search;
        
        //         $query->where("private_feed_back_ans->name", 'LIKE', "%$searchTerm%")
        //             ->orWhere("contact_info_ans->location", 'LIKE', "%$searchTerm%")
        //             ->orWhere("private_feed_back_ans->email", 'LIKE', "%$searchTerm%")
        //             ->orWhere("contact_info_ans->email", 'LIKE', "%$searchTerm%")
        //             ->orWhere("contact_info_ans->organisation", 'LIKE', "%$searchTerm%");
        //     });
        // }

        if ($this->sortOption == 'latest') {
            $query->latest();
        } elseif ($this->sortOption == 'oldest') {
            $query->oldest();
        }

        // fillter by date
        if ($this->selectedDate) {
            $query->whereDate('created_at', $this->selectedDate);
        }


        // 
        if ($this->selectedOption1 == 'How would you rate our service?') {
            $query->whereNotNull('star_question_ans');
        } elseif ($this->selectedOption1 == 'Please let us know what was missing or disappointing in your experience with us.') {
            $query->whereNotNull('review_platform_ans');
        }

        // 
        if ($this->selectedOption2 == 'How likely are you to recommend our service to a friend or colleague?') {
            $query->whereNotNull('net_promote_ans');
        } elseif ($this->selectedOption2 == 'What is the primary reason for your score?') {
            $query->whereNotNull('nps_comment_ans');
        }

        // fillter by contact 
        if ($this->selectedContactOption == 'with_contact') {
            $query->whereNotNull('private_feed_back_ans'); // Assuming contact_info_ans is the contact column
        } elseif ($this->selectedContactOption == 'without_contact') {
            $query->whereNull('private_feed_back_ans');
        }

        $this->reviews = $query->get();

        return view('livewire.response-component');
    }
}
