<?php

namespace App\Http\Livewire\Gadgets;

use Livewire\Component;
use App\Models\Gadget;


class Create extends Component
{
    public $name, $brand, $model, $price, $types, $email;

    public function addGadget(){
        $this->validate([
            'name'            =>            ['required' ,'string', 'max:255'],
            'brand'           =>            ['required' ,'string', 'max:255'],
            'model'           =>            ['required' ,'string', 'max:255'],
            'price'           =>            ['required' ,'string', 'max:255'],
            'types'           =>            ['required' ,'string', 'max:255'],
        ]);

        Gadget::create([
            'name'              =>        $this->name,
            'brand'             =>        $this->brand,
            'model'             =>        $this->model,
            'price'             =>        $this->price,
            'types'             =>        $this->types,
        ]);

        return redirect('/index')->with('message', 'Added Successfully!');
    }

    public function render()
    {
        return view('livewire.gadgets.create');
    }
}
