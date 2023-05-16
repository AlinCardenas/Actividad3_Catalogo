<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputTxt extends Component
{
    /**
     * Create a new component instance.
     */
    public $nombre;
    public $tipo;
    
    public $etiqueta;

    public function __construct($nombre, $tipo, $etiqueta)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->etiqueta = $etiqueta;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-txt');
    }
}
