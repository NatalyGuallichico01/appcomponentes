<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
  
    public $subtitulo; //declaracion variable
    public $etiquetas;
    public $color;

    public function __construct($subtitulo="Demo", $tags=[   ], $color="yellow") //inicializacion variable con el valor de demo
    {
        $this->subtitulo=$subtitulo;
        $this->etiquetas=$tags;
        $this->color=$color;
    }

    
    public function render()
    {
        return view('components.card');
    }

    public function existeEtiquetas()
    {
        return count($this->etiquetas);
    }    
}



