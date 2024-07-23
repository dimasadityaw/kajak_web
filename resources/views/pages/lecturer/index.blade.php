@extends('layouts.app')

@section('title', 'Guru')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar {{ request()->query('type') == 'teacher' ? 'Guru' : 'Murid' }}</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Data {{ request()->query('type') == 'teacher' ? 'Guru' : 'Murid' }}</h4>
                        @if (request()->query('type') == 'teacher')
                            <div class="card-header-action">
                                <a href="{{ route('user.create') }}" class="btn btn-primary btn-icon">
                                    <i class="fas fa-plus mr-2"></i>Tambah Guru
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>{{request()->query('type') == 'teacher' ? 'Email' : 'NISN'}}</th>
                                        <th>Jumlah Ujian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lecturer as $e)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $e->name }}</td>
                                            <td>{{ request()->query('type') == 'teacher' ? $e->email : $e->nisn }}</td>
                                            <td>{{ $e->exam->count() }}</td>
                                            <td>
                                                <a href="{{ route('user.edit', $e) }}" class="btn btn-icon btn-warning">
                                                    <i class="fas fa-pencil-alt mr-2"></i> Edit
                                                </a>
                                                <form action="{{ route('user.destroy', $e) }}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button class="btn btn-icon btn-danger"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"
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
    <!-- JS Libraies -->
    <script>
        $('table').DataTable({})
    </script>
    <!-- Page Specific JS File -->
@endpush
