@extends('layouts.app')

@section('title', 'Ujian')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ujian Bahasa Jawa</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Ujian</h4>
                        <div class="card-header-action">
                            <a href="{{ route('exam.create') }}" class="btn btn-primary btn-icon">
                                <i class="fas fa-plus mr-2"></i>Tambah Soal
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kode Ujian</th>
                                        <th>Peserta</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exam as $e)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $e->name }}</td>
                                            <td>
                                                <div class="badge badge-primary">{{ $e->code }}</div>
                                            </td>
                                            <td>{{ $e->attempt->count() }}</td>
                                            <td>
                                                <a href="{{ route('exam.show', $e) }}" class="btn btn-icon btn-primary">
                                                    <i class="fas fa-info mr-2"></i> Detail
                                                </a>
                                                <a href="{{ route('exam.edit', $e) }}" class="btn btn-icon btn-warning">
                                                    <i class="fas fa-pencil-alt mr-2"></i> Edit
                                                </a>
                                                <form action="{{ route('exam.destroy', $e) }}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button class="btn btn-icon btn-danger" type="submit">
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
