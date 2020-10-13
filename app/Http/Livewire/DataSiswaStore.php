<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class DataSiswaStore extends Component
{

    public $nama,$kelas,$umur,$alamat;

    public function render()
    {
        return view('livewire.data-siswa-store');
    }

    public function store()
    {
        $siswa = Siswa::create([
            'name' => $this->nama,
            'kelas' => $this->kelas,
            'umur' => $this->umur,
            'alamat' => $this->alamat
        ]);

        $this->resets();

        $this->emit('SiswaStored',  $siswa);
    }

    public function resets(){
        $this->nama = null;
        $this->kelas = null;
        $this->umur = null;
        $this->alamat = null;
    }
}
