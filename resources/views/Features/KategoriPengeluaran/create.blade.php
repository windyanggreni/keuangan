@extends('layouts.main')
@section('content')
<form action="/kpengeluaran" method="post">
    @csrf
      <div class="mb-3">
        <label for="kategori_pengeluaran" class="form-label">Kategori</label>
        <input type="text" class="form-control  @error('kategori_pengeluaran') is-invalid @enderror" name="kategori_pengeluaran" id="kategori_pengeluaran" value="{{ old('kategori_pengeluaran') }}">
        @error('kategori_pengeluaran')
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
