<?php

namespace App\Http\Controllers;

use App\Models\KategoriPemasukan;
use Illuminate\Http\Request;

class KategoriPemasukanController extends Controller
{
    public function index(){
        $Kpemasukan = KategoriPemasukan::latest()->paginate(10);
        return view('Features.KategoriPemasukan.kategoriPemasukan',['kategoris'=>$Kpemasukan]);
    }

    public function create(){
        $addkategori = KategoriPemasukan::all();
        return view('Features.kategoriPemasukan.create',['addkategori' => $addkategori]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'kategori_pemasukan' => 'required'
        ]);
        KategoriPemasukan::create($validated);
        return redirect('/kpemasukan')-> with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id){
        $editkategori = KategoriPemasukan::find($id);
        return view('Features.kategoriPemasukan.edit',compact('editkategori'));
    }

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'kategori_pemasukan' => 'required'
        ]);
        KategoriPemasukan::where('id',$id)->update($validated);
        return redirect('/kpemasukan')-> with('pesan', 'Data berhasil diubah');
    }

    public function destroy(string $id){
        KategoriPemasukan::destroy($id);
        return redirect('kpemasukan')->with('pesan','Data berhasil dihapus');
    }
}
