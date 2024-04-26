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

        $this->auto_publish_reviews = $platforms->first()->is_auto_import;

    }


    public function updatePlatform($platform)
    {
        return $this->$platform = $platform;
    }
    public function toggleAutoPublishReviews($name)
    {

        $platforms = Platform::where('name', $name) ->get();
        //  dd($platforms);
        foreach ($platforms as $key => $platform) {
            if ($this->auto_publish_reviews) {
                $platform->is_auto_import = '0';
                // dd('0');
                $platform->update();
            }else{
                $platform->is_auto_import = '1';
                // dd('1');
                $platform->update();
            }
            
        }
        $this->dispatch('refreshPage');
    }
    public function render()
    {
        return view('livewire.platform-component');
    }
}
