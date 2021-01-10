<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Attrs extends Component
{

    public $attr = [];
    public $attr_type = [];

    public function render()
    {

        return view('livewire.attrs');
    }

    public function mount()
    {

    }

    public function addRow()
    {

    }
}
