<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;
use Livewire\WithPagination;


class DataSiswaIndex extends Component
{
    use WithPagination;

    public $data,$siswaId;

    public $statusUpdate = false;

    protected $listeners = [
        'SiswaStored' => 'handleStored',
        'SiswaUpdated' => 'handleUpdate'
    ];

    public function render()
    {
        $this->data = Siswa::latest()->get();
        return view('livewire.data-siswa-index',[
            'siswa' => Siswa::paginate(5),
        ]);
    }

    public function handleStored($siswa){
        session()->flash('message', 'Siswa ' . $siswa['name'] . ' sukses ditambahkan');
    }

    public function handleUpdate($siswa){
        session()->flash('message', 'Siswa ' . $siswa['name'] . ' sukses diupdate');
    }

    public function getSiswa($id){
        $this->statusUpdate = true;
        $siswa = Siswa::find($id);
        $this->emit('getSiswa', $siswa);
    }

    public function destroy($id){
        if ($id){
            $siswa = Siswa::find($id);
            $siswa->delete();
            session()->flash('message', 'Sukses dihapus');
        }
    }
}
