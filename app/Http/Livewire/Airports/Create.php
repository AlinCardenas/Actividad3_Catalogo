<?php

namespace App\Http\Livewire\Airports;

use App\Models\Airport;
use Livewire\Component;

class Create extends Component
{
    public $nombre;
    public $direccion;
    public $cant;

    protected $rules = [
        'nombre' => 'required',
        'direccion' => 'required',
        'cant' => 'required',
        
    ];

    public function render()
    {
        return view('livewire.airports.create');
    }
    public function store()
    {
        $this->validate();

        try {

            $airport = new Airport();
            $airport->name = $this->nombre;
            $airport->address = $this->direccion;
            $airport->cant = $this->cant;
            $airport->save();

            $this->reset();
            $this->emit('saved');
        } catch (\Throwable $th) {
            $this->emit('error');
        }
    }
}
