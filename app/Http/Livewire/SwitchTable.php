<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwitchTable extends Component
{
    public $switch = false;

    protected $listeners = [
        'switchTable',
    ];

    public function switchTable()
    {
        $this->switch = !$this->switch;
    }

    public function render()
    {
        return view('livewire.switch-table');
    }
}
