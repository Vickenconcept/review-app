<?php

namespace App\Livewire;

use Cloudinary\Cloudinary;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShareReview extends Component
{
    use WithFileUploads;

    public $review,
        $thumbnail,
        $backgroundImage,
        $logo,
        $campaignType,
        $addOrRemoveImage = 'addImage',
        $star;

    public function mount($review)
    {
        $this->review = $review;
        $this->thumbnail = $review->show_Thumbnail;
        $this->star = $review->show_star_review;
        // dd($review->show_Thumbnail);
    }
    public function toggleThumbnail()
    {
        if ($this->thumbnail == '1') {
            $this->review->show_Thumbnail = '0';
            $this->review->update();
        } elseif ($this->thumbnail == '0') {
            $this->review->show_Thumbnail = '1';
            $this->review->update();
        }
    }
    public function toggleStar()
    {
        if ($this->star == '1') {
            $this->review->show_star_review = '0';
            $this->review->update();
        } elseif ($this->star == '0') {
            $this->review->show_star_review = '1';

            $this->review->update();
        }

       
    }

    public function selectDimention($size){
        $this->campaignType = $size;
        
    }
    public function setBackgroundImage(){
        $this->validate([
            'backgroundImage' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);

        if ($this->backgroundImage) {
            # code...
            $cloudinary = new Cloudinary();
            $cloudinaryResponse = $cloudinary->uploadApi()->upload($this->backgroundImage->getRealPath());

            $imageUrl = $cloudinaryResponse['secure_url'];
        }

        $this->review->background = $imageUrl;
        $this->review->save();
        
        $this->dispatch('background-image-updated');

    }
    public function setLogo(){

        $this->validate([
            'logo' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);

        // dd('here');

        if ($this->logo) {
            # code...
            $cloudinary = new Cloudinary();
            $cloudinaryResponse = $cloudinary->uploadApi()->upload($this->logo->getRealPath());

            $imageUrl = $cloudinaryResponse['secure_url'];
        }

        $this->review->logo = $imageUrl;
        $this->review->save();

        $this->dispatch('background-image-updated');

    }
    public function useImage($param)
    {
        // dd($param);

        $this->addOrRemoveImage = $param;
    }


    public function render()
    {
        return view('livewire.share-review');
    }
}
