@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <a href="{{ route('buku.index') }}" class="text-decoration-none small">
                <i class="bi bi-arrow-left"></i> Kembali ke katalog buku
            </a>
            <h4 class="fw-bold mt-2 mb-4">Tambah Koleksi Buku</h4>

            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('buku.store') }}" method="POST">
                        @csrf
                        @include('buku::partials.form', ['buku' => null])

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('buku.index') }}" class="btn btn-light border">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Buku</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
