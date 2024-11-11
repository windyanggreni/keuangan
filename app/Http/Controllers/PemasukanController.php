<?php

namespace App\Http\Controllers;

use App\Models\KategoriPemasukan;
use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PemasukanController extends Controller
{
    public function index(Request $request){
        $query = Pemasukan::query();

        if ($request->filled('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        if ($request->filled('tanggal')) {
            $query->whereDate('tanggal', $request->tanggal);
        }

        $pemasukans = $query->with('kategori')->paginate(10);
        $kategori = KategoriPemasukan::latest()->paginate(10);
        $total = $query->sum('jumlah');

        $totalPemasukan = Pemasukan::where('tanggal', '>=', Carbon::now()->subDays(30))->sum('jumlah');
        $averageDailyIncome = $totalPemasukan / 30;

        return view('Features.pemasukan.pemasukan', [
            'pemasukans' => $pemasukans,
            'kpemasukan' => $kategori,
            'total' => $total,
            'averageDailyIncome' => $averageDailyIncome // Pass this to the view
        ]);
    }

    public function create(){
        $addpemasukan = Pemasukan::all();
        $kategoris = KategoriPemasukan::all();
        return view('Features.pemasukan.create',['addpemasukans' => $addpemasukan, 'kategoris' => $kategoris]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ]);
        Pemasukan::create($validated);
        return redirect('/pemasukan')-> with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id){
        $editpemasukan = Pemasukan::find($id);
        $kategoris = KategoriPemasukan::all();
        return view('Features.pemasukan.edit',compact('editpemasukan','kategoris'));
    }

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required'
        ]);
        Pemasukan::where('id',$id)->update($validated);
        return redirect('/pemasukan')-> with('pesan', 'Data berhasil diubah');
    }

    public function destroy(string $id){
        Pemasukan::destroy($id);
        return redirect('pemasukan')->with('pesan','Data berhasil dihapus');
    }

    public function averageDailyIncome()
    {
        // Mengambil total pemasukan selama 30 hari terakhir
        $totalPemasukan = Pemasukan::where('tanggal', '>=', Carbon::now()->subDays(30))
            ->sum('jumlah');

        // Menghitung rata-rata pemasukan harian
        $averageDailyIncome = $totalPemasukan / 30;

        // Menyertakan nilai rata-rata ke dalam view
        return view('Features.pemasukan.pemasukan', compact('averageDailyIncome'));
    }
}
