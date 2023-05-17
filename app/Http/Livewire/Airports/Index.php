<?php

namespace App\Http\Livewire\Airports;

use App\Models\Airport;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.airports.index', [
            'airports'=> Airport::paginate(10)
        ]);
    }

    public function borrar($id){
        $airport = Airport::find($id);
        $airport ->delete();
    }
}
