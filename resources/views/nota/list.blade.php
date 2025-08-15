@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Daftar Nota</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ url('/nota/tambah') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Nota
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr class="text-center">
                    <th>No</th>
                    <th>Pembeli</th>
                    <th>Tanggal</th>
                    <th>Print</th>
                    <th>Checking</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($notas as $index => $nota)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $nota['pembeli'] }}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($nota['tanggal'])->format('d F Y') }}</td>
                    <td class="text-center">
                        @if($nota['print'] === 1)
                            <span class="text-success"><i class="bi bi-check-lg fs-5"></i></span>
                        @else
                            <span class="text-danger"><i class="bi bi-x-lg fs-5"></i></span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if($nota['cek'] === 1)
                            <button class="btn btn-success btn-sm"><i class="bi bi-check-square"></i></button>
                        @else
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-square"></i></button>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ url('/nota/'.$nota['id'].'/detail') }}" class="btn btn-info btn-sm text-white">
                            <i class="bi bi-eye"></i> Lihat
                        </a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data tersedia.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
