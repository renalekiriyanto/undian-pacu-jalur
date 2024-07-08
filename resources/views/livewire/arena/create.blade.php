<div>
    @section('title', 'Tambah Daerah')
    <div class="p-3">
        <div class="card">
            <div class="card-header align-content-center">
                <a href="{{ route('arena.list') }}"
                    class="btn btn-sm btn-outline-primary btn-flat float-right">Kembali</a>
                <h3 class="card-title">Tambah Arena</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form wire:submit.prevent="store">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama Arena</label>
                        <input type="text" wire:model="name" class="form-control" id="name"
                            placeholder="Masukkan nama daerah">
                    </div>
                    <div class="form-group">
                        <label>Daerah</label>
                        <select class="form-control select2bs4" style="width: 100%;"
                            wire:change="selectChange($event.target.value)">
                            <option selected="selected">Pilih Daerah</option>
                            @foreach ($regions as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}/{{ $item->district->slug }}
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
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script>
        $(function() {
            $('.select2bs4').select2();

            $('.select2bs4').on('change', function(e) {
                console.log('change')
                this.Livewire.emit('selectChange', $(this).val());
            });
        })
    </script>
</div>
