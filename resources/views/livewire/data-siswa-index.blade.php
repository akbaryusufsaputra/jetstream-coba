<div>
    @if ($statusUpdate)
    <livewire:siswa-update></livewire:siswa-update>
    @else
    <livewire:data-siswa-store></livewire:data-siswa-store>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success">
        {{session('message')}}
        </div>
    @endif


    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Umur</th>
              <th scope="col">Alamat</th>
              <th  colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody>

            @php
             $no = 0;
            @endphp

            @foreach ($data as $a)
            @php
            $no++;
            @endphp
            <tr>
            <th scope="row">{{$no}}</th>
            <td>{{$a->name}}</td>
              <td>{{$a->kelas}}</td>
              <td>{{$a->umur}}</td>
              <td>{{$a->alamat}}</td>
              <td>
              <button wire:click="getSiswa({{ $a->id }})" class="bg-blue hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Edit
                  </button>

                  <button wire:click="destroy({{ $a->id }})" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    Delete
                  </button>
              </td>
            </tr>
            @endforeach
            {{ $siswa->links() }}
          </tbody>
    </table>

</div>
