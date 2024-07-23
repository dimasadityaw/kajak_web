@extends('layouts.app')



@push('style')
    <!-- CSS Libraries -->
@endpush

@php
    $role = 'Murid';
@endphp

@section('title', isset($user) ? 'Edit Data ' . $role : 'Buat Data ' . $role . ' Baru')

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data {{ $role }}</h1>
            </div>

            <div class="section-body">
                @if (isset($exam) && $exam != null)
                    <a href="{{ route('exam.user', $exam) }}" class="btn btn-primary text-white btn-icon mb-3">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                @else
                    <a href="{{ route('user.index') }}?type={{ $user->role }}"
                        class="btn btn-primary text-white btn-icon mb-3">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ isset($user) ? 'Edit Data ' . $role : 'Buat Data ' . $role . ' Baru' }}</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST"
                                    @if (isset($exam) && $exam != null)
                                    action="{{ !isset($user) ? route('user.store', ['exam' => $exam->id]) : route('user.update', [$user, 'exam' => $exam->id]) }}">
                                    @else
                                    action="{{ !isset($user) ? route('user.store') : route('user.update', $user) }}">
                                    @endif
                                    @csrf
                                    @if (isset($user))
                                        {{ method_field('PUT') }}
                                    @endif
                                    {{-- input name --}}
                                    <div class="form-group">
                                        <label for="name">Nama {{ $role }}</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror" required
                                            @if (isset($user)) value="{{ $user->name }}" @endif
                                            @if (auth()->user()->role != 'admin') readonly="readonly" @endif>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- input email --}}
                                    <div class="form-group">
                                        <label
                                            for="name">{{ isset($user) && $user->role == 'student' ? 'NISN' : 'Email' }}</label>
                                        <input type="{{ isset($user) && $user->role == 'student' ? 'text' : 'email' }}"
                                            name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror" required
                                            @if (auth()->user()->role != 'admin') readonly="readonly" @endif
                                            @if (isset($user)) value="{{ $user->role == 'student' ? $user->nisn : $user->email }}" @endif>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- input password --}}
                                    <div class="form-group">
                                        <label for="name">Password</label>
                                        <div class="input-group">
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror" required>
                                            <div class="input-group-append" style="cursor: pointer"
                                                onclick="togglePasswordVisibility()">
                                                <div class="input-group-text">
                                                    <i class="fas fa-eye"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @error('password')
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
    <script>
        @if ($user->role == 'student')
            $('#email').attr('maxlength', 11)
            $('#email').on('keypress', (evt) => {
                if (evt.which < 48 || evt.which > 57) evt.preventDefault();
            })
        @endif
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
    <!-- Page Specific JS File -->
@endpush
