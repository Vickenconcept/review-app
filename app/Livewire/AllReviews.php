<?php

namespace App\Livewire;

use App\Models\Campaign;
use App\Models\Review;
use Livewire\Component;

class AllReviews extends Component
{

    public
        $campaigns,
        $reviews,
        $allRateing,
        $sortOption = 'latest',
        $selectedRatings = [],
        $selectedNPS = [],
        $search;

    public
        $rate_one,
        $rate_two,
        $rate_three,
        $rate_four,
        $rate_five;


    public function showOrHide($id)
    {

        $review = Review::findOrFail($id);

        if ($review->show == 1) {
            # code...
            $review->update([
                'show' => '0', // Set the value to 1 (or any other value as needed)
            ]);
        } else {

            $review->update([
                'show' => '1', // Set the value to 1 (or any other value as needed)
            ]);
        }
    }


    public function render()
    {

        $query = Review::query();

        if ($this->search) {
            $query->where(function ($query) {
                $query->where("private_feed_back_ans->name", 'like', '%' . $this->search . '%')
                    ->orWhere("contact_info_ans->location", 'like', '%' . $this->search . '%')
                    ->orWhere("private_feed_back_ans->email", 'like', '%' . $this->search . '%')
                    ->orWhere("contact_info_ans->email", 'like', '%' . $this->search . '%')
                    ->orWhere("contact_info_ans->organisation", 'like', '%' . $this->search . '%');
            });
        }

        if ($this->sortOption == 'latest') {
            $query->latest();
        } elseif ($this->sortOption == 'oldest') {
            $query->oldest();
        }

        // Filter reviews based on selected ratings
        if (!empty($this->selectedRatings)) {
            // dd($this->selectedRatings);
            $query->whereIn('star_question_ans', $this->selectedRatings);
        }


        if (!empty($this->selectedNPS)) {
            foreach ($this->selectedNPS as $range) {
                // Split the range into minimum and maximum values
                list($minNPS, $maxNPS) = array_map('intval', explode(',', $range));
                $query->whereBetween('net_promote_ans', [$minNPS, $maxNPS]);
            }
        }

        $this->reviews  = $query->get();



        // Initialize arrays to store ratings
        $ratings = [
            1 => [],
            2 => [],
            3 => [],
            4 => [],
            5 => [],
        ];

        $this->allRateing =  Review::all();

        foreach ($this->allRateing as $key => $review) {
            $starRating = $review->star_question_ans;

            $ratings[$starRating][] = $starRating;
        }

        $percentages = [];

        if (count($this->allRateing) > 0) {
            // Calculate the percentage for each rating
            foreach ($ratings as $rating => $values) {
                // Calculate the percentage and round it to the nearest whole number
                $percentage = round(count($values) / count($this->allRateing) * 100);
                // Store the percentage
                $percentages[$rating] = $percentage;
            }
        } else {
            // If there are no reviews, set all percentages to 0
            foreach ($ratings as $rating => $values) {
                $percentages[$rating] = 0;
            }
        }

        $this->rate_one = $percentages[1];
        $this->rate_two = $percentages[2];
        $this->rate_three = $percentages[3];
        $this->rate_four = $percentages[4];
        $this->rate_five = $percentages[5];


        return view('livewire.all-reviews');
    }
}
