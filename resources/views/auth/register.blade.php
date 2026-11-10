@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <h5 class="fw-bold mb-1">Pendaftaran Anggota</h5>
    <p class="text-muted small mb-4">Akun baru otomatis terdaftar sebagai Anggota (User).</p>

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required>
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
            <div class="form-text">Minimal 8 karakter.</div>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Ulangi Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Daftar Sekarang</button>
    </form>

    <p class="small text-muted mt-4 mb-0">
        Sudah memiliki akun? <a href="{{ route('login') }}" class="fw-semibold">Masuk di sini</a>
    </p>
@endsection