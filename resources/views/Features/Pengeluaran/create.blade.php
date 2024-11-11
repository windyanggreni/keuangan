@extends('layouts.main')
@section('content')
<form action="/pengeluaran" method="post">
    @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}">
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
            <option value="{{ $item->id }}">{{ $item->kategori_pengeluaran }}</option>

            @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" value="{{ old('tanggal') }}">
        @error('tanggal')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>



      <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" class="form-control  @error('jumlah') is-invalid @enderror" name="jumlah" id="jumlah" value="{{ old('jumlah') }}">
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('tanggal').value = today;
    });
</script>
@endsection
