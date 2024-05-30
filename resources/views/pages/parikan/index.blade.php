@extends('layouts.app')

@section('title', 'Ujian')

@push('style')
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Parikan Bahasa Jawa</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Parikan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <h5 class="text-primary">Upload File Parikan</h5>
                                <form action="{{ route('parikan.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Upload File Parikan</label>
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
                                    <th>Parikan</th>
                                    <th>Bahasa Jawa</th>
                                    <th>Bahasa Indonesia</th>
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
                url: `{{ url('api/parikan') }}` + `?datatable=true`,
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'parikan',
                    name: 'parikan'
                },
                {
                    data: 'meaning_in_java',
                    name: 'meaning_in_java'
                },
                {
                    data: 'meaning_in_indo',
                    name: 'meaning_in_indo'
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
