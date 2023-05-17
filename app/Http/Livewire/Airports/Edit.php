<?php

namespace App\Http\Livewire\Airports;

use App\Models\Airport;
use Livewire\Component;

class Edit extends Component
{
    public $nombre;
    public $direccion;
    public $cant;
    public $slug;

    public function mount(){
        
    }

    public function render()
    {
        $airport = Airport::find($this->slug);
        $this->nombre=$airport->name;
        $this->direccion=$airport->address;
        $this->cant=$airport->cant;
        return view('livewire.airports.edit');

    }
    public function update(){
        $airport = Airport::find($this->slug);
        $airport->name=$this->nombre;
        $airport->address=$this->direccion;
        $airport->cant=$this->cant;
        $airport->update();
        return redirect()->route('airports.index');
    }
}
