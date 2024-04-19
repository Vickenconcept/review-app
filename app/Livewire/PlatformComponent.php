<?php

namespace App\Livewire;

use Livewire\Component;

class PlatformComponent extends Component
{
    public
        $platform ,
        $auto_publish_reviews;


    public function updatePlatform($platform = 'hello')
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
