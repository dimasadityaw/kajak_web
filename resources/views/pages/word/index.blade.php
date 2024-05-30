@extends('layouts.app')

@section('title', 'Word')

@push('style')
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kata Bahasa Jawa</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Kata</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <h5 class="text-primary">Upload File Kata</h5>
                                <form action="{{ route('word.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Upload File Kata</label>
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
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
