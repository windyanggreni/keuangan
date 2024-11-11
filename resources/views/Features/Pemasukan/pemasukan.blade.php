@extends('layouts.main')
@section('content')
<h1>Daftar Pemasukan</h1>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<a href="/pemasukan/create" class="btn btn-primary mb-2">Add Pemasukan</a>

<form method="GET" action="{{ url('/pemasukan') }}" class="mb-3">
    <div class="row">
        <div class="col-md-4">
            <select name="kategori_id" class="form-select">
                <option value="">Pilih Kategori</option>
                @foreach ($kpemasukan as $kategori)
                    <option value="{{ $kategori->id }}" {{ request('kategori_id') == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->kategori_pemasukan }}
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
        <th>Pemasukan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($pemasukans as $pemasukan)
        <tr>
            <td>{{ $pemasukans->firstItem() + $loop->index }}</td>
            <td>{{ $pemasukan->nama }}</td>
            <td>{{ $pemasukan->kategori->kategori_pemasukan }}</td>
            <td>{{ $pemasukan->tanggal }}</td>
            <td>Rp {{ number_format($pemasukan->jumlah, 0, ',', '.') }}</td>
            <td class="text-nowrap">
                <a href="/pemasukan/{{ $pemasukan->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

                <form action="/pemasukan/{{ $pemasukan->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus pemasukan ini?')">
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

<div class="alert alert-info">
    <strong>Rata-rata Pemasukan Harian (30 Hari Terakhir):</strong> Rp {{ number_format($averageDailyIncome, 0, ',', '.') }}
</div>

{{ $pemasukans->links() }}
@endsection
