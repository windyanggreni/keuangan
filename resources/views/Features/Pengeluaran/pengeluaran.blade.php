@extends('layouts.main')
@section('content')
<h1>Daftar Pengeluaran</h1>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<a href="/pengeluaran/create" class="btn btn-primary mb-2">Add Pengeluaran</a>

<form method="GET" action="{{ url('/pengeluaran') }}" class="mb-3">
    <div class="row">
        <div class="col-md-4">
            <select name="kategori_id" class="form-select">
                <option value="">Pilih Kategori</option>
                @foreach ($kpengeluaran as $kategori)
                    <option value="{{ $kategori->id }}" {{ request('kategori_id') == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->kategori_pengeluaran }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <input type="date" name="tanggal" class="form-control" value="{{ request('tanggal') }}">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </div>
</form>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Tanggal</th>
        <th>pengeluaran</th>
        <th>Aksi</th>
    </tr>
    @foreach ($pengeluarans as $pengeluaran)
        <tr>
            <td>{{ $pengeluarans->firstItem() + $loop->index }}</td>
            <td>{{ $pengeluaran->nama }}</td>
            <td>{{ $pengeluaran->kategori->kategori_pengeluaran }}</td>
            <td>{{ $pengeluaran->tanggal }}</td>
            <td>Rp {{ number_format($pengeluaran->jumlah, 0, ',', '.') }}</td>
            <td class="text-nowrap">
                <a href="/pengeluaran/{{ $pengeluaran->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

                <form action="/pengeluaran/{{ $pengeluaran->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus pengeluaran ini?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="4" class="text-start"><strong>TOTAL</strong></td>
        <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
        <td></td>
    </tr>
</table>
{{ $pengeluarans->links() }}
@endsection
