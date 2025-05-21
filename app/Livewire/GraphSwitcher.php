<?php

namespace App\Livewire;
use Livewire\Component;

class GraphSwitcher extends Component
{
    public $graphType = 'bar'; // Default graph type

    public function changeGraphType($type)
    {
        $this->graphType = $type;
    }

    public function render()
    {
        return view('livewire.graph-switcher');
    }
}