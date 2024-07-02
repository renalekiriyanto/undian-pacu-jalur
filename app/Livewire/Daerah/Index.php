<?php

namespace App\Livewire\Daerah;

use App\Models\District;
use App\Models\Region;
use Exception;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;

class Index extends Component
{

    use WithPagination, WithoutUrlPagination;
    public $districts;
    // Modal Edit
    public $name_region;
    public $district_selected;
    public $data_selected;

    public function mount(){
        $this->districts = District::all();
    }

    public function render()
    {
        return view('livewire.daerah.index',[
            'data' => Region::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function deleteConfirm($id){
        $this->dispatch('modalDelete', id: $id);
    }

    #[On('deleteData')]
    public function deleteData($id)
    {
        $region = Region::find($id);
        try{
            $region->delete();
            $this->dispatch('success', title: 'Dihapus!', message: 'Data sudah dihapus');

        }catch(Exception $err){
            $this->dispatch('error', title: 'Gagal!', message: $err->getMessage());
        }
    }

    public function editModal($id){
        $data = Region::find($id);
        $this->name_region = $data->name;
        $this->district_selected = $data->district_id;
        $this->data_selected = $id;

        $this->dispatch('editData', title: 'Edit Data');
    }

    public function updateData($id){
        $data = Region::find($id);

        $data->update([
            'name' => $this->name_region,
            'slug' => Str::slug($this->name_region),
            'district_id' => $this->district_selected
        ]);

        $this->dispatch('success', title: 'Diupdate!', message: 'Data sudah di update');
        $this->dispatch('closeModal');
    }
}