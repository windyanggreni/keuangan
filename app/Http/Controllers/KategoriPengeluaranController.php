<?php

namespace App\Http\Controllers;

use App\Models\KategoriPengeluaran;
use Illuminate\Http\Request;

class KategoriPengeluaranController extends Controller
{
    public function index(){
        $kpengeluaran = KategoriPengeluaran::latest()->paginate(10);
        return view('Features.KategoriPengeluaran.KategoriPengeluaran',['kategoris'=>$kpengeluaran]);
    }

    public function create(){
        $addkategori = KategoriPengeluaran::all();
        return view('Features.kategoriPengeluaran.create',['addkategori' => $addkategori]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'kategori_pengeluaran' => 'required'
        ]);
        KategoriPengeluaran::create($validated);
        return redirect('/kpengeluaran')-> with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id){
        $editkategori = KategoriPengeluaran::find($id);
        return view('Features.kategoriPengeluaran.edit',compact('editkategori'));
    }

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'kategori_pengeluaran' => 'required'
        ]);
        KategoriPengeluaran::where('id',$id)->update($validated);
        return redirect('/kpengeluaran')-> with('pesan', 'Data berhasil diubah');
    }

    public function destroy(string $id){
        KategoriPengeluaran::destroy($id);
        return redirect('kpengeluaran')->with('pesan','Data berhasil dihapus');
    }
}
