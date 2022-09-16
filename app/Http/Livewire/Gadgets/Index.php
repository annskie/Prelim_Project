<?php

namespace App\Http\Livewire\Gadgets;

use Livewire\Component;
use App\Models\Gadget;

class Index extends Component
{
    public function loadGadget(){
        $gadgets = Gadget::orderBy('name')->get();

        return compact('gadgets');
    }
    public function render()
    {
        return view('livewire.gadgets.index', $this->loadGadget());
    }
}
