<div>
    @section('title', 'Tambah Daerah')
    <div class="p-3">
        <div class="card">
            <div class="card-header align-content-center">
                <a href="{{ route('daerah.list') }}"
                    class="btn btn-sm btn-outline-primary btn-flat float-right">Kembali</a>
                <h3 class="card-title">Tambah Daerah</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form wire:submit.prevent="store">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama Daerah</label>
                        <input type="text" wire:model="name" class="form-control" id="name"
                            placeholder="Masukkan nama daerah">
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control" style="width: 100%;"
                            wire:change="selectChange($event.target.value)">
                            <option>--Pilih Kecamatan--</option>
                            @foreach ($districts as $item)
                                <option value="{{ $item->slug }}" wire:key="{{ $item->slug }}">{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
