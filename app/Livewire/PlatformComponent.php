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
        
        // dd($groupedPlatforms);
        $this->allPlatforms = $groupedPlatforms;
    }


    public function updatePlatform($platform)
    {
        return $this->$platform = $platform;
    }
    public function toggleAutoPublishReviews()
    {
        return 'toggleAutoPublishReviews';
    }
    public function render()
    {
        return view('livewire.platform-component');
    }
}
