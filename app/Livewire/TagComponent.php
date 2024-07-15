<?php

namespace App\Livewire;

use App\Models\Platform;
use App\Models\Review;
use App\Models\Tag;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;

class TagComponent extends Component
{

    public $tag_list = [];
    public $reviewId, $platformId;
    public $tags;

    public function mount($reviewId, $platformId = null)
    {
        $this->tags = Tag::all();
        $this->reviewId = $reviewId;
        $this->platformId = $platformId;

    }
    
    
    public function addTags()
    {
        
        
        $platforms = Platform::where('id', $this->reviewId)->get();
            foreach ($platforms as $platform) {
                    
                    $campaign = $platform->campaigns()->first();
                    if ($campaign) {
                        $reviews = $campaign->reviews()->get();
                        if ($reviews) {
                            foreach ($reviews as $review) {
                                $tags = collect($this->tag_list)->map(function ($tagId) {
                                    return Tag::find($tagId);
                                });
                                $review->tags()->attach($tags->pluck('id'));
                            }
                        }
                    }
            }
            $this->dispatch('refreshPage');


            // 
            return 

        $review = Review::find($this->reviewId);
        
        $tags = collect($this->tag_list)->map(function ($tagId) {
            return Tag::find($tagId);
        });

        $review->tags()->attach($tags->pluck('id'));

    }

    public function render()
    {
        return view('livewire.tag-component');
    }
}
