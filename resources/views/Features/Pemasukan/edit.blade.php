@extends('layouts.main')
@section('content')
<form action="/pemasukan/{{ $editpemasukan->id }}" method="post">
    @method('PUT')
    @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama',$editpemasukan->nama) }}">
        @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select name="kategori_id" class="form-select">
            <option value="">Pilih kategori</option>
            @foreach ($kategoris as $item)
            @if (old('kategori_id',$editpemasukan->kategori_id) == $item->id)
            <option value="{{ $item->id }}" selected>{{ $item->kategori_pemasukan }}</option>

            @else

            <option value="{{ $item->id }}">{{ $item->kategori_pemasukan }}</option>
            @endif

            @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" value="{{ old('tanggal',$editpemasukan->tanggal) }}">
        @error('tanggal')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>



      <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" class="form-control  @error('jumlah') is-invalid @enderror" name="jumlah" id="jumlah" value="{{ old('jumlah',$editpemasukan->jumlah) }}">
        @error('jumlah')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
      </div>

      <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="submit">
      </div>
</form>
@endsection
