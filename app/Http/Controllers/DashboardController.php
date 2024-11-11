<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $Pemasukan = Pemasukan::sum('jumlah');
        $Pengeluaran = Pengeluaran::sum('jumlah');
        $datapengeluaran = Pengeluaran::all();

        $keuangan = $Pemasukan - $Pengeluaran;

        $today = Carbon::today();

        $todayExpenses = Pengeluaran::whereDate('tanggal', $today)->get();

        $expenseLimit = $Pemasukan * 0.8;
        $todayTotalExpense = $todayExpenses->sum('jumlah');

        $expenseAlert = $todayTotalExpense >= $expenseLimit ? 'limit reached' : 'safe';

        return view('layouts.dashboard', [
            'pemasukan' => $Pemasukan,
            'pengeluaran' => $Pengeluaran,
            'keuangan' => $keuangan,
            'hPengeluaran' => $todayExpenses,
            'pengeluarans' => $datapengeluaran,
            'expenseAlert' => $expenseAlert
        ]);
    }
}
