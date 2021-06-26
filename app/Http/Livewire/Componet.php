<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Componet extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
               <h1>Hello World </h1>
            </div>
        blade;
    }
}
