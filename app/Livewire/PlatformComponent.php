<?php

namespace App\Livewire;

use App\Models\Platform;
use Livewire\Component;

class PlatformComponent extends Component
{
    public
        $allPlatforms,
        $platform,
        $auto_publish_reviews;

    public function mount()
    {
        $platforms = Platform::latest()->get();

        $groupedPlatforms = $platforms->groupBy('name')->toArray();


        $this->allPlatforms = $groupedPlatforms;

        $this->auto_publish_reviews = optional($platforms->first())->is_auto_import;
    }


    public function updatePlatform($platform)
    {
        return $this->$platform = $platform;
    }
    public function toggleAutoPublishReviews($name)
    {

        $platforms = Platform::where('name', $name)->get();
        foreach ($platforms as $platform) {
            if ($this->auto_publish_reviews) {
                $platform->is_auto_import = true;
                
                $campaign = $platform->campaigns()->first();
                if ($campaign) {
                    $reviews = $campaign->reviews()->get();
                    if ($reviews) {
                        foreach ($reviews as $review) {
                            $review->show = '1';
                            $review->update();
                        }
                    }
                }
            } else {
                $platform->is_auto_import = false;
                $campaign = $platform->campaigns()->first();
                if ($campaign) {
                    $reviews = $campaign->reviews()->get();
                    if ($reviews) {
                        foreach ($reviews as $review) {
                            $review->show = '0';
                            $review->update();
                        }
                    }
                }
            }
            $platform->update();
        }
        $this->dispatch('refreshPage');
    }
    public function render()
    {
        return view('livewire.platform-component');
    }
}
