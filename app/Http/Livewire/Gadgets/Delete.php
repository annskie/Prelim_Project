<?php

namespace App\Http\Livewire\Gadgets;

use Livewire\Component;
use App\Models\Gadget;
class Delete extends Component
{
    public $gadId;

    public function getGadgetProperty(){
        return Gadget::select('id','name', 'model', 'types')
        ->find($this->gadId);

    }
    public function deleteGadget(){
        $this->gadget->delete();

        return redirect('/index')->with('message', 'Deleted Successfully!');


    }
    public function render()
    {
        return view('livewire.gadgets.delete');
    }

    public function back(){
        return redirect('/index');
    }
}

