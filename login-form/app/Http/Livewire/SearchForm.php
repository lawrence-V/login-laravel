<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;



class SearchForm extends Component
{
    public $search = '';
    public function render()
    {

        $searchResult = [];

        if(strlen($this->search) > 2) {

        
        $response = Http::get('https://api.themoviedb.org/3/search/movie?query='.$this->search.'&api_key=42ee37e7cc29340133839d96681d2217');
                if ($response->successful()) { 
            $searchResult = $response->json()['results'];

        } else {
            dd($response->json());
        }
        
    }
        

        return view('livewire.search-form', [ 
           'searchResult' => collect($searchResult)->take(5),
        ]);
    }
}

// class SearchForm extends Component
// {
//     public $search = '';
//     public function render()
//     {

//         $searchResult = [];

//         $response = Http::get('https://api.themoviedb.org/3/search/movie&query='.$this->search.'&api_key=42ee37e7cc29340133839d96681d2217');
         
//         if ($response->successful()) { 
//             $searchResult = $response->json()['results'];
//             dump($searchResult);
//         } else {
//             dd($response->json());
//         }

//         dump($searchResult);
//         return view('livewire.search-form', [ 
//             'searchResult' => $searchResult,
//       ]);
//     }
// }
