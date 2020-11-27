<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $max = 100;

    public function increment()
    {
        $this->count == $this->max ? $this->count = 0 : $this->count++;
    }
    
    public function decrement()
    {
        $this->count == 0 ? $this->count = 100 : $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
