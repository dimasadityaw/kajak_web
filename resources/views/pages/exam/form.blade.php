@extends('layouts.app')

@section('title', 'Ujian')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Ujian</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ isset($exam) ? 'Edit Data Ujian' : 'Buat Data Ujian Baru' }}</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST"
                                    action="{{ !isset($exam) ? route('exam.store') : route('exam.update', $exam) }}">
                                    @csrf
                                    @if (isset($exam))
                                        {{ method_field('PUT') }}
                                    @endif
                                    {{-- input name --}}
                                    <div class="form-group">
                                        <label for="name">Nama Ujian</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror" required
                                            @if (isset($exam)) value="{{ $exam->name }}" @endif>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-icon btn-primary float-right">
                                        <i class="fas fa-save mr-2"></i> Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
