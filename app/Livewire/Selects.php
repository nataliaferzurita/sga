<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Selects extends Component
{
    public $countries,$states,$cities,$token,$selectedState,$selectedCountry;
    public function mount(){
        $this->token=Http::withHeaders([
            "Accept"=> "application/json",
            "api-token"=> "CfNNPNDSr4RK6Y-dyfhlBadJ7FVjGK-_nG3kDxOTbOM8Uq7V3UNybw-HuC9hNvwIQ-g",
            "user-email"=> "nataliazurita95@gmail.com"
        ])->get("https://www.universal-tutorial.com/api/getaccesstoken")->json('auth_token');

        $this->countries=Http::withHeaders([
            "Authorization"=>"Bearer ". $this->token,
            "Accept"=>"application/json"
          ])->get("https://www.universal-tutorial.com/api/countries/")->json();
          $this->states=collect();
          $this->cities=collect();
         
    }
    public function render()
    {
        return view('livewire.selects');
    }
    public function updatedSelectedcountry(){
        $this->states=Http::withHeaders([
            "Authorization"=>"Bearer ". $this->token,
            "Accept"=>"application/json"
          ])->get("https://www.universal-tutorial.com/api/states/".$this->selectedCountry)->json();
          
    }

    public function updatedSelectedstate(){
        $this->cities=Http::withHeaders([
            "Authorization"=>"Bearer ". $this->token,
            "Accept"=>"application/json"
          ])->get("https://www.universal-tutorial.com/api/cities/".$this->selectedState)->json();

          
    }
    
}
