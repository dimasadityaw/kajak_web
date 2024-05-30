@extends('layouts.app')

@section('title', 'Ujian')

@push('style')
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Aranan Bahasa Jawa</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4>Aranan</h4>
                        <div class="card-header-action">
                            <a href="{{ route('exam.create') }}" class="btn btn-primary btn-icon">
                                <i class="fas fa-plus mr-2"></i>Tambah Data
                            </a>
                        </div>
                    </div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <h5 class="text-primary">Upload File Aranan</h5>
                                <form action="{{ route('aranan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Upload File Aranan</label>
                                                <input type="file"
                                                    class="form-control-file @error('file') is-invalid @enderror"
                                                    name="file"
                                                    accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                                    required>
                                                @error('file')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <button class="btn btn-icon btn-primary mt-4" type="submit">
                                                <i class="fas fa-upload mr-2"></i> Upload
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Aranan</th>
                                    <th>Bahasa Jawa</th>
                                    <th>Bahasa Indonesia</th>
                                    <th>Jenis aranan</th>
                                    <th>Gambar</th>
                                    <th></th>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        $('table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: `{{ url('api/aranan') }}` + `?datatable=true`,
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'aranan',
                    name: 'aranan'
                },
                {
                    data: 'javanese',
                    name: 'javanese'
                },
                {
                    data: 'indonesian',
                    name: 'indonesian'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'img',
                    name: 'img'
                },
                {
                    data: 'id',
                    render: function(data, type) {
                        console.log(data);
                        return '';
                    }
                }

            ]
        });
    </script>
@endpush
