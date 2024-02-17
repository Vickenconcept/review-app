<?php

namespace App\Livewire;

use App\Mail\InviteMail;
use App\Models\Campaign;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CampaignIndex extends Component
{
    public $currentUUID = 'QRValue';
    public $search;
    public $sortOrder = 'latest';
    public $textEmail;
    public $email = '',
        $url,
        $name = '';

    public function mount()
    {
        $this->textEmail = auth()->user()->email;
    }


    public function setUrl($uuid)
    {
        // Set $url to the clicked campaign's uuid
        $this->url = route('campaign.share', ['uuid' => '/']) . "/" . $uuid;

        $this->currentUUID = (string)$this->url;
    }

    public function invitUser()
    {
        Mail::to($this->email)->send(new InviteMail($this->url, $this->name));

        $this->name = '';
        $this->email = '';
        session()->flash('success', 'Invitation email sent successfully!');
        $this->dispatch('email-sent');
    }
    public function testInvite()
    {
        Mail::to($this->textEmail)->send(new InviteMail($this->url, $this->name));

        session()->flash('success', 'Invitation email sent successfully!');
        $this->dispatch('email-sent');
    }
    public function showOrHide($id)
    {
        $campaign = Campaign::find($id);

        if ($campaign->enabled) {
            $campaign->enabled = false;
        } else {
            $campaign->enabled = true;
        }

        $campaign->update();
    }
    public function render()
    {
        $campaigns = Campaign::query();

        if ($this->search) {
            $campaigns->where("name", 'like', '%' . $this->search . '%');
        }

        if ($this->sortOrder === 'latest') {
            $campaigns->latest();
        } elseif ($this->sortOrder === 'oldest') {
            $campaigns->oldest();
        }

        $campaigns = $campaigns->paginate(7);

        return view('livewire.campaign-index', compact('campaigns'));
    }
}
