@extends('layouts.main')
@section('content')
<form action="/kpemasukan/{{ $editkategori->id }}" method="post">
    @method('PUT')
    @csrf
      <div class="mb-3">
        <label for="kategori_pemasukan" class="form-label">Kategori</label>
        <input type="text" class="form-control  @error('kategori_pemasukan') is-invalid @enderror" name="kategori_pemasukan" id="kategori_pemasukan" value="{{ old('kategori_pemasukan',$editkategori->kategori_pemasukan) }}">
        @error('kategori_pemasukan')
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
