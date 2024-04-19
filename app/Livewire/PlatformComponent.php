<?php

namespace App\Livewire;

use Livewire\Component;

class PlatformComponent extends Component
{
    public
        $platform ,
        $auto_publish_reviews;


    public function updatePlatform($platform)
    {
        return $this->$platform = $platform;
        // dd($this->$platform );

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
