<?php

namespace App\Livewire\Daerah;

use App\Models\District;
use App\Models\Region;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Str;


class Create extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $district_selected;

    public $districts;

    public function mount(){
        $this->districts  = District::all();
    }

    public function render()
    {
        $districts = District::all();
        return view('livewire.daerah.create');
    }

    public function store(){
        $this->validate();

        // Check slug data region
        $slug_tmp = Str::slug($this->name);

        $region = Region::where('slug', $slug_tmp)->first();

        if($region){
            return session()->flash('error', 'Data daerah sudah ada');
        }

        $district = District::where('slug', $this->district_selected)->first();

        $region = Region::create([
            'name' => $this->name,
            'slug' => $slug_tmp,
            'district_id' => $district->id
        ]);

        return redirect()->route('daerah.list')->with('success', 'Berhasil tambah daerah');
    }

    public function selectChange($value){
        $this->district_selected = $value;
    }
}
