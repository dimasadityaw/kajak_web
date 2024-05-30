@extends('layouts.app')

@section('title', $exam->name)

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $exam->name }} - #{{ $exam->code }}</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Ujian</h4>
                        <div class="card-header-action">

                            <form action="{{ route('exam.deleteall', [$exam]) }}" method="POST">
                                {{ method_field('DELETE') }}
                                @csrf
                                <a href="{{ asset('docs/template_soal_ujian.xlsx') }}" class="btn btn-icon btn-primary">
                                    <i class="fas fa-download mr-2"></i> Download Template Soal
                                </a>
                                <button class="btn btn-icon btn-danger"
                                    onclick="confirm('Apakah anda yakin ingin menghapus data ini ?')" type="submit">
                                    <i class="fas fa-trash mr-2"></i> Hapus Semua Soal
                                </button>

                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <h5 class="text-primary">Upload File Soal</h5>
                                <form action="{{ route('exam.upload', $exam) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Upload File Soal</label>
                                                <input type="file"
                                                    class="form-control-file @error('file') is-invalid @enderror"
                                                    name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" 
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
                            <div class="col-md-6 mb-2">
                                <h5 class="text-primary">Download Hasil Ujian</h5>
                                <p class="mb-0 font-weight-bold">Download Hasil ujian</p>
                                <a href="{{ route('exam.download', $exam) }}" class="btn btn-primary btn-icon">
                                    <i class="fas fa-download"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Peserta Ujian</h4>
                        <div class="card-header-action">
                            <a href="{{ asset('docs/template_peserta_ujian.xlsx') }}" class="btn btn-icon btn-primary">
                                <i class="fas fa-download"></i> Download Template Peserta
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>{{ $exam->attempt->count() }} Peserta Terdaftar</h5>
                                <br>
                                <a href="{{ route('exam.user', $exam) }}" class="btn btn-icon btn-info">
                                    <i class="fas fa-users"></i> Daftar Peserta
                                </a>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-primary">Upload Data Peserta</h5>
                                <form action="{{ route('user.upload', $exam) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Upload File Data Peserta</label>
                                                <input type="file"
                                                    class="form-control-file @error('file') is-invalid @enderror"
                                                    name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
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
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Soal</h4>
                        <div class="card-header-action">
                            <a href="{{ route('exam.question.create', $exam) }}" class="btn btn-icon btn-primary">
                                <i class="fas fa-plus mr-1"></i> Tambah soal satuan
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <th>#</th>
                                    <th>Soal</th>
                                    <th>jawaban benar</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($exam->question as $question)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $question->question }}</td>
                                            <td>{{ $question->correctAnswer->answer }}</td>
                                            <td style="width: 200px">

                                                <form action="{{ route('exam.question.destroy', [$exam, $question]) }}"
                                                    method="POST">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <a href="{{ route('exam.question.edit', [$exam, $question]) }}"
                                                        class="btn btn-sm btn-icon btn-warning">
                                                        <i class="fas fa-pencil-alt mr-2"></i> Edit
                                                    </a>
                                                    <button class="btn btn-sm btn-icon btn-danger"
                                                        onclick="confirm('Apakah anda yakin ingin menghapus data ini ?')"
                                                        type="submit">
                                                        <i class="fas fa-trash mr-2"></i> Hapus
                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
        $('table').DataTable({})
    </script>
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
