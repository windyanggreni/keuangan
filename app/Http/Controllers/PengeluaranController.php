<?php

namespace App\Http\Controllers;

use App\Models\KategoriPengeluaran;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index(Request $request){
        $query = Pengeluaran::query();

        if ($request->filled('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        if ($request->filled('tanggal')) {
            $query->whereDate('tanggal', $request->tanggal);
        }
        // $pemasukan = Pemasukan::latest()->paginate(10);
        $pengeluarans = $query->with('kategori')->paginate(10);
        $kategori = KategoriPengeluaran::latest()->paginate(10);
        $total = $query->sum('jumlah');
        return view('Features.pengeluaran.pengeluaran',['pengeluarans'=>$pengeluarans,'kpengeluaran'=>$kategori,'total'=>$total]);
    }

    public function create(){
        $addpengeluaran = Pengeluaran::all();
        $kategoris = KategoriPengeluaran::all();
        return view('Features.pengeluaran.create',['addpengeluaran' => $addpengeluaran, 'kategoris' => $kategoris]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ]);
        Pengeluaran::create($validated);
        return redirect('/pengeluaran')-> with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id){
        $editpengeluaran = Pengeluaran::find($id);
        $kategoris = KategoriPengeluaran::all();
        return view('Features.pengeluaran.edit',compact('editpengeluaran','kategoris'));
    }

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ]);
        Pengeluaran::where('id',$id)->update($validated);
        return redirect('/pengeluaran')-> with('pesan', 'Data berhasil diubah');
    }

    public function destroy(string $id){
        Pengeluaran::destroy($id);
        return redirect('pengeluaran')->with('pesan','Data berhasil dihapus');
    }
}
