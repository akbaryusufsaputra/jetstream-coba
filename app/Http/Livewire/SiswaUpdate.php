<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class SiswaUpdate extends Component
{
    public $nama,$kelas,$umur,$alamat,$siswaId;
    public $statusUpdate;


    protected $listeners = [
        'getSiswa' => 'showSiswa'
    ];

    public function render()
    {
        return view('livewire.siswa-update');
    }



    public function showSiswa($siswa)
    {
        $this->siswaId = $siswa['id'];
        $this->nama = $siswa['name'];
        $this->kelas = $siswa['kelas'];
        $this->umur = $siswa['umur'];
        $this->alamat = $siswa['alamat'];

    }

    public function update(){
        if ($this->siswaId){
            $siswa = Siswa::find($this->siswaId);
            $siswa->update([
                'name' => $this->nama,
                'kelas' => $this->kelas,
                'umur' => $this->umur,
                'alamat' => $this->alamat
            ]);
        }
        $this->emit('SiswaUpdated', $siswa);
        session()->flash('message', 'Siswa ' . $siswa['name'] . ' sukses diupdate');
        return redirect()->to('/dashboard');
    }

    public function resets(){
        $this->nama = null;
        $this->kelas = null;
        $this->umur = null;
        $this->alamat = null;
    }


}
