<div>
    <div class="p-3">
        <div class="card">
            <div class="card-header align-content-center">
                @if (session()->has('success'))
                    <div id="alertSuccess" class="" role="alert">
                    </div>
                @endif
                <h3 class="card-title">List Daerah</h3>
                {{-- <button class="btn btn-sm btn-primary btn-flat float-right toastsDefaultSuccess">Tambah
                    Daerah</button> --}}
                <a href="{{ route('daerah.create') }}" class="btn btn-sm btn-primary btn-flat float-right">Tambah
                    Daerah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Kecamatan</th>
                            <th style="width: 40px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->district->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-flat btn-danger btn-sm mr-2"
                                            wire:click="deleteConfirm({{ $item->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button class="btn btn-flat btn-warning btn-sm"
                                            wire:click="editModal({{ $item->id }})">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    @if ($data->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}">&laquo;</a>
                        </li>
                    @endif

                    @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                        @if ($page == $data->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    @if ($data->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() }}">&raquo;</a></li>
                    @else
                        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Daerah</label>
                        <input type="text" wire:model="name_region" class="form-control" id="name"
                            placeholder="Masukkan nama daerah">
                    </div>
                    <div class="form-group">
                        <label>Kecamatan</label>
                        <select class="form-control" style="width: 100%;" wire:model="district_selected">
                            <option>--Pilih Kecamatan--</option>
                            @foreach ($districts as $item)
                                <option value="{{ $item->id }}" wire:key="{{ $item->slug }}"
                                    @if ($item->id == $district_selected) selected @endif>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary"
                        wire:click="updateData({{ $data_selected }})">Simpan</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    @script
        <script>
            const _0x1cab60 = _0x183a;

            function _0x4b97() {
                const _0x538ba9 = ['modalEdit', '259812tcFHPH', 'Data\x20daerah\x20berhasil\x20dibuat.', 'isConfirmed', 'modal',
                    '#d33', 'then', '1155250JpSWZJ', '4YaHPok', 'addEventListener', 'closeModal', '10KYRkaB', 'modalDelete',
                    'success', 'dispatch', '3418962eLBlAf', '171213wxVrLJ', '#modalEdit', '9uYBIrv', 'deleteData',
                    'message', 'Tidak', 'editData', '11971267LwYJkP', '1039976VcSHol', 'getElementById', 'warning', 'title',
                    '7LrzglM', '2479368BnQyDS'
                ];
                _0x4b97 = function() {
                    return _0x538ba9;
                };
                return _0x4b97();
            }(function(_0x29e684, _0x413bba) {
                const _0x4fe2ce = _0x183a,
                    _0x196b20 = _0x29e684();
                while (!![]) {
                    try {
                        const _0x343139 = -parseInt(_0x4fe2ce(0xfa)) / 0x1 + parseInt(_0x4fe2ce(0xeb)) / 0x2 + -parseInt(
                                _0x4fe2ce(0xe9)) / 0x3 * (-parseInt(_0x4fe2ce(0xf2)) / 0x4) + -parseInt(_0x4fe2ce(0xf5)) /
                            0x5 * (-parseInt(_0x4fe2ce(0xf9)) / 0x6) + parseInt(_0x4fe2ce(0xe8)) / 0x7 * (-parseInt(
                                _0x4fe2ce(0xe4)) / 0x8) + parseInt(_0x4fe2ce(0xde)) / 0x9 * (-parseInt(_0x4fe2ce(0xf1)) /
                                0xa) + -parseInt(_0x4fe2ce(0xe3)) / 0xb;
                        if (_0x343139 === _0x413bba) break;
                        else _0x196b20['push'](_0x196b20['shift']());
                    } catch (_0x409c09) {
                        _0x196b20['push'](_0x196b20['shift']());
                    }
                }
            }(_0x4b97, 0x90488));
            let alertSuccess = document[_0x1cab60(0xe5)]('alertSuccess'),
                modalEdit = document[_0x1cab60(0xe5)](_0x1cab60(0xea));

            function _0x183a(_0x4cce87, _0x3fbfbb) {
                const _0x4b9787 = _0x4b97();
                return _0x183a = function(_0x183a64, _0x503271) {
                    _0x183a64 = _0x183a64 - 0xde;
                    let _0x231086 = _0x4b9787[_0x183a64];
                    return _0x231086;
                }, _0x183a(_0x4cce87, _0x3fbfbb);
            }
            window[_0x1cab60(0xf3)]('DOMContentLoaded', () => {
                const _0x185201 = _0x1cab60;
                alertSuccess && toastr[_0x185201(0xf7)](_0x185201(0xec)), Livewire['on'](_0x185201(0xf7), _0x141749 => {
                    const _0x488d83 = _0x185201;
                    Swal['fire']({
                        'title': _0x141749[_0x488d83(0xe7)],
                        'text': _0x141749[_0x488d83(0xe0)],
                        'icon': _0x488d83(0xf7)
                    });
                }), Livewire['on'](_0x185201(0xe2), _0x2f5e49 => {
                    const _0x4868c2 = _0x185201;
                    $(_0x4868c2(0xfb))['modal']();
                }), Livewire['on'](_0x185201(0xf4), _0x5252c4 => {
                    const _0x2bb0d8 = _0x185201;
                    $('#modalEdit')[_0x2bb0d8(0xee)]('hide');
                }), Livewire['on'](_0x185201(0xf6), _0x19b9fc => {
                    const _0x3c3e15 = _0x185201;
                    Swal['fire']({
                        'title': 'Yakin\x20hapus\x20data?',
                        'icon': _0x3c3e15(0xe6),
                        'showCancelButton': !![],
                        'confirmButtonColor': '#3085d6',
                        'cancelButtonColor': _0x3c3e15(0xef),
                        'confirmButtonText': 'Iya',
                        'cancelButtonText': _0x3c3e15(0xe1)
                    })[_0x3c3e15(0xf0)](_0x3d32cf => {
                        const _0x31e229 = _0x3c3e15;
                        _0x3d32cf[_0x31e229(0xed)] && $wire[_0x31e229(0xf8)](_0x31e229(0xdf), {
                            'id': _0x19b9fc['id']
                        });
                    });
                });
            });
        </script>
    @endscript
</div>
