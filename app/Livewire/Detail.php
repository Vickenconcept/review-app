<?php

namespace App\Livewire;

use App\Models\Site;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use OpenGraph;

class Detail extends Component
{
    public $userId;
    public $siteName;
    public $description;
    public $color;
    public $siteUrl;


    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function collectWebData()
    {
        $this->validate([
            'siteUrl' => 'required|url',
        ]);
        
        $data = OpenGraph::fetch($this->siteUrl, true);

        $this->color = $data['theme-color'] ?? null;
        $this->description = $data['description'] ?? null;

        $urlComponents = parse_url($this->siteUrl);
        $hostName = $urlComponents['host'] ?? null;
        $hostName = str_replace('www.', '', $hostName);
        $this->siteName = $this->removeTld($hostName);


        $site = new Site();
        $site->name = $this->siteName ; // Replace 'name' with the actual field name
        $site->description = $data['description'] ?? null;
        $site->url = $data['url'] ?? null;
        $site->color = $data['theme-color'] ?? null;

        $user = User::find($this->userId); 
        // Save the site and associate it with the user
        $user->sites()->save($site);
        Auth::login($user);

        $this->dispatch('site-created');
    }

    private function removeTld($hostName)
    {
        $parts = explode('.', $hostName);

        // Check if there are at least two parts before removing the TLD
        if (count($parts) >= 2) {
            array_pop($parts); // Remove TLD
        }

        return implode('.', $parts);
    }

    public function render()
    {
        return view('livewire.detail');
    }
}
