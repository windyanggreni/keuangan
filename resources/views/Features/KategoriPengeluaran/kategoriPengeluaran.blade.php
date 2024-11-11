@extends('layouts.main')
@section('content')
<h1>Daftar Kategori Pengeluaran</h1>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif
<a href="/kpengeluaran/create" class="btn btn-primary mb-2">Add category</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Keterangan</th>

    </tr>
@foreach ($kategoris as $kategori)
<tr>
       <td>{{ $kategoris->firstItem()+$loop->index }} </td>
        <td>{{ $kategori-> kategori_pengeluaran }}</td>
        <td class="text-nowrap">
            <a href="/kpengeluaran/{{ $kategori->id }}/edit" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

        <form action="/kpengeluaran/{{ $kategori->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda ingin menghapus kategori ini?')">
                <i class="bi bi-trash"></i>
            </button>
        </form>
        </td>
</tr>
@endforeach
</table>
{{ $kategoris->links() }}
@endsection
