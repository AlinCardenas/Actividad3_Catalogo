<?php

namespace App\Http\Livewire\Airline;

use App\Models\Airline;
use GuzzleHttp\RedirectMiddleware;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.airline.index',  [
            'airlines' => Airline::paginate(10)
        ]);
    }

    public function borrar($id)
    {
        $airline = Airline::find($id);
        $airline->delete();
    }

    
}
