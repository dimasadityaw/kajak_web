@extends('layouts.app')

@section('title', 'Peserta Ujian ' . $exam->name)

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Peserta Ujian {{ $exam->name }}</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Peserta Ujian</h4>
                        <div class="card-header-action">
                            <a href="{{ route('exam.user.export', $exam) }}" class="btn btn-primary">
                                <i class="fas fa-download mr-2"></i>
                                Download Hasil Ujian
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Nilai</th>
                                        <th style="max-width: 10vw">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exam->attempt as $e)
                                        <tr>
                                            <td>{{ $e->user->nisn }}</td>
                                            <td>{{ $e->user->name }}</td>
                                            <td>
                                                <div class="badge badge-primary">{{ $e->user->kelas }}</div>
                                            </td>
                                            <td>
                                                {{ $e->score ?? 0 }} / 100
                                            </td>
                                            <td>
                                                <a class="btn btn-icon btn-danger" href="{{ route('attempt.delete', $e) }}">
                                                    <i class="fas fa-ban mr-2"></i> Hapus Akses
                                                </a>
                                                <a class="btn btn-icon btn-warning"
                                                    href="{{ route('user.edit', $e->user) }}">
                                                    <i class="fas fa-pencil-alt mr-2"></i> Edit Password
                                                </a>
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
        $('table').DataTable()
    </script>
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
