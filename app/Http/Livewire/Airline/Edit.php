<?php

namespace App\Http\Livewire\Airline;

use App\Models\Airline;
use Livewire\Component;
use Livewire\WithFileUploads;


class Edit extends Component
{
    use WithFileUploads;
    public $nombre;
    public $descripcion;
    public $valoracion;
    public $logo;
    public $slug;
    public $identificador;
    public $imagenactual;

    public function mount(){
        $this->identificador = rand();
    }

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'valoracion' => 'required',
        // 'logo' => 'image|max:2048',
    ];

    public function render()
    {
        $airline = Airline::find($this->slug);
        $this->nombre=$airline->name;
        $this->descripcion=$airline->description;
        $this->valoracion=$airline->ranking;
        $this->imagenactual=$airline->logo;
        return view('livewire.airline.edit',);
    }

    public function update(){

        // Primero debes de validar.
        $this->validate();

        //NOTA: Se tiene que validar que se haya cargado una imagen, para que solo borre la imagen si se cargo una imagen.
        // Aq debe ir la logica para borrar la imagen antigua, para que la sustituya la nueva que estas por cargar.

        // Te falto guardar la imagen.
        $imageName = $this->logo->store("airlines");

        $airline = Airline::find($this->slug);
        $airline->name=$this->nombre;
        $airline->description=$this->descripcion;
        $airline->ranking=$this->valoracion;
        $airline->logo=$imageName;

        $airline->update();
        return redirect()->route('airlines.index');
    }


}
