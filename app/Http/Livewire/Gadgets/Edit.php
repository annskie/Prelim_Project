<?php

namespace App\Http\Livewire\Gadgets;

use Livewire\Component;
use App\Models\Gadget;
class Edit extends Component
{
    public $gadId;
    public $name, $brand, $model, $price, $types;

    public function mount(){
        $this->name = $this->gadget->name;
        $this->brand = $this->gadget->brand;
        $this->model = $this->gadget->model;
        $this->price = $this->gadget->price;
        $this->types = $this->gadget->types;

    }

    public function editGadget(){
        $this->validate([
            'name'              =>            ['required' ,'string', 'max:255'],
            'brand'             =>            ['required' ,'string', 'max:255'],
            'model'             =>            ['required' ,'string', 'max:255'],
            'price'             =>            ['required' ,'string', 'max:255'],
            'types'             =>            ['required' ,'string', 'max:255'],
        ]);
        $this->gadget->update([
            'name'          =>        $this->name,
            'brand'         =>        $this->brand,
            'model'         =>        $this->model,
            'price'         =>        $this->price,
            'types'         =>        $this->types,
        ]);
        return redirect('/index')->with('message' , 'Updated Sucessfully!');
    }


    public function getGadgetProperty(){
        return Gadget::find($this->gadId);
    }


    public function render()
    {
        return view('livewire.gadgets.edit');
    }

    public function back(){
        return redirect('/index');
    }
}
