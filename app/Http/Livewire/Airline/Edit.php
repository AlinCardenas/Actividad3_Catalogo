<?php

namespace App\Http\Livewire\Airline;

use App\Models\Airline;
use Livewire\Component;


class Edit extends Component
{
    public $nombre;
    public $descripcion;
    public $valoracion;
    public $slug;

    public function mount(){
        
    }

    public function render()
    {
        $airline = Airline::find($this->slug);
        $this->nombre=$airline->name;
        $this->descripcion=$airline->description;
        $this->valoracion=$airline->ranking;
        return view('livewire.airline.edit',);
    }

    public function update(){
        $airline = Airline::find($this->slug);
        $airline->name=$this->nombre;
        $airline->description=$this->descripcion;
        $airline->ranking=$this->valoracion;
        $airline->update();
        return redirect()->route('airlines.index');
    }


}
