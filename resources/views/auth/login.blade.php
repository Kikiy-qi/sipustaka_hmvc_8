@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <h5 class="fw-bold mb-1">Masuk ke Akun</h5>
    <p class="text-muted small mb-4">Masukkan email dan password terdaftar.</p>

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="nama@sipustaka.com" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group has-validation">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                <button type="button" class="btn btn-outline-secondary" data-toggle-password="password">
                    <i class="bi bi-eye"></i>
                </button>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label small" for="remember">Ingat saya</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Masuk</button>
    </form>

    <p class="small text-muted mt-4 mb-0">
        Belum punya akun anggota? <a href="{{ route('register') }}" class="fw-semibold">Daftar di sini</a>
    </p>
@endsection