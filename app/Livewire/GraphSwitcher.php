<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GraphSwitcher extends Component
{
    public string $chartType = 'bar';

    public function setChartType(string $type)
    {
        $this->chartType = $type;
        $this->dispatchBrowserEvent('update-chart', ['type' => $type]);
    }

    public function render()
    {
        return view('livewire.graph-switcher');
    }
}