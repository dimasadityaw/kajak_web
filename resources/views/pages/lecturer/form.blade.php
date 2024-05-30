@extends('layouts.app')

@section('title', 'Guru Baru')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Guru</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ isset($user) ? 'Edit Data Guru' : 'Buat Data Guru Baru' }}</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST"
                                    action="{{ !isset($user) ? route('user.store') : route('user.update', $user) }}">
                                    @csrf
                                    @if (isset($user))
                                        {{ method_field('PUT') }}
                                    @endif
                                    {{-- input name --}}
                                    <div class="form-group">
                                        <label for="name">Nama Guru</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror" required
                                            @if (isset($user)) value="{{ $user->name }}" @endif>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- input email --}}
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror" required
                                            @if (isset($user)) value="{{ $user->email }}" @endif>
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
