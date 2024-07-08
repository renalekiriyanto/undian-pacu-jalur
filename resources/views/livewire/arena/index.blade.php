<div>
    <div class="p-3">
        <div class="card">
            <div class="card-header align-content-center">
                @if (session()->has('success'))
                    <div id="alertSuccess" class="" role="alert">
                    </div>
                @endif
                <h3 class="card-title">List Arena</h3>
                {{-- <button class="btn btn-sm btn-primary btn-flat float-right toastsDefaultSuccess">Tambah
                    Daerah</button> --}}
                <a href="{{ route('arena.create') }}" class="btn btn-sm btn-primary btn-flat float-right">Tambah
                    Daerah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Daerah</th>
                            <th style="width: 40px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $item)
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
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {{-- @if ($data->onFirstPage())
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
                    @endif --}}
                </ul>
            </div>
        </div>
    </div>
</div>
