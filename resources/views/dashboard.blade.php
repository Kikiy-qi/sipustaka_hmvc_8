@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-4">
        <h3 class="fw-bold mb-1">Halo, {{ auth()->user()->name }}</h3>
        <p class="text-muted mb-0">Status akses aktif: <strong>{{ auth()->user()->role->label() }}</strong></p>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card h-100 p-3">
                <div class="card-body">
                    <div class="stat-label mb-2">Total Koleksi Buku</div>
                    <div class="stat-value mb-3">{{ $totalBuku }}</div>
                    <a href="{{ route('buku.index') }}" class="small fw-semibold text-decoration-none">
                        Lihat katalog buku <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 p-3">
                <div class="card-body">
                    <div class="stat-label mb-2">Data Peminjaman</div>
                    <div class="stat-value mb-3">{{ $totalPeminjaman }}</div>
                    <a href="{{ route('peminjaman.index') }}" class="small fw-semibold text-decoration-none">
                        Kelola peminjaman <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        @if (auth()->user()->isAdmin())
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <div class="stat-label mb-2">Total Pengguna</div>
                        <div class="stat-value mb-3">{{ $totalUsers }}</div>
                        <a href="{{ route('admin.users.index') }}" class="small fw-semibold text-decoration-none">
                            Kelola akun pengguna <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection