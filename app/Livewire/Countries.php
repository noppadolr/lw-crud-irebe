<?php

namespace App\Livewire;

use Livewire\Component;

class Countries extends Component
{
    public function render()
    {
        return view('livewire.countries');
    }//end method

    public function OpenAddCountryModal(){
        $this->dispatch('OpenAddCountryModal');
    }
}
