<?php

namespace App\Http\Livewire\Airline;

use App\Models\Airline;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $nombre;
    public $descripcion;
    public $valoracion;
    public $logo;

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'valoracion' => 'required',
        'logo' => 'image|required',
        
    ];

    public function render()
    {
        return view('livewire.airline.create');
    }

    public function store()
    {
        $this->validate();

        try {

            $imageName = $this->logo->store("airlines",'public');
            $airline = new Airline();
            $airline->name = $this->nombre;
            $airline->description = $this->descripcion;
            $airline->ranking = $this->valoracion;
            $airline->logo = $imageName;
            $airline->save();

            $this->reset();
            $this->emit('saved');
        } catch (\Throwable $th) {
            $this->emit('error');
        }
    }
}
