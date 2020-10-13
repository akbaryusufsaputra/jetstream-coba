
<div class="container">
    <form wire:submit.prevent="update">
            <div class="row mt-3">
                <input type="hidden" name="" wire:model="siswaId">
                <div class="form-group col">
                    <input wire:model="nama" type="" class="form-control" id="nama" placeholder="Nama" required>
                </div>

                <div class="form-group col">
                    <input wire:model="kelas" type="" class="form-control" id="kelas" placeholder="Kelas" required>
                </div>
            </div>

           <div class="row">
                <div class="form-group col">
                    <input wire:model="umur" type="" class="form-control" id="umur" placeholder="Umur" required>
                </div>

                <div class="form-group col">
                    <input wire:model="alamat" type="" class="form-control" id="alamat" placeholder="Alamat" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2" >submit</button>
    </form>
</div>
