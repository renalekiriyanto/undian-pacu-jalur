<?php

namespace App\Livewire\Arena;

use App\Models\Region;
use Livewire\Component;

class Create extends Component
{
    public $regions;
    public $name;
    public $region_selected;

    public function mount()
    {
        $this->regions = Region::all();
    }

    public function render()
    {
        return view('livewire.arena.create');
    }

    public function selectChange($value)
    {
        dd($value);
    }

    public function store()
    {
        dd($this->region_selected);
    }
}
