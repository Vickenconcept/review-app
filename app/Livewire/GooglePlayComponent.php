<?php

namespace App\Livewire;

use App\Models\Platform;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class GooglePlayComponent extends Component
{

    public $result = [],
    $platforms, 
    $search_term,
    $search_response = [],
    $limit,
    $product_id,
    $product_name;

    public $platformCount = 7;

    public function mount(){

        $this->platforms = Platform::all();

        if (session()->has('product_name')) {
                $this->product_name = session()->get('product_name');
               $this->product_id = session()->get('product_id');
        }
    }
    public function searchData(){

         
        $this->validate([
            'search_term' => 'required|string',
        ]);

        $api_key =  env('SERP_API_KEY');
        $response = Http::get('https://serpapi.com/search.json?q='.$this->search_term.'&engine=google_play&api_key=' . $api_key );
        $this->search_response = $response->json()['organic_results'][0]['items'];
    }

    public function setProduct($product_name,$product_id){
        session()->put('product_name', $product_name);
        session()->put('product_id', $product_id);

        $this->product_name = session()->get('product_name');
        $this->product_id = session()->get('product_id');
        sleep(2);
        $this->search_response = [];

        // dd($this->product_id,  $this->product_name );
    }


    public function render()
    {

        // $response = Http::get('https://serpapi.com/search.json?engine=google_play_product&store=apps&product_id=com.duolingo&all_reviews=true&platform=phone&sort_by=1&num=40&api_key=' . env('SERP_API_KEY'));
    // $response = Http::get('https://serpapi.com/search.json?q=games&engine=google_play&api_key=' . env('SERP_API_KEY'));

    // return $response->json();
        return view('livewire.google-play-component');
    }
}
