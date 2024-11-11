@extends('layouts.main')
@section('content')
<style>
    a {
        text-decoration: none;
    }
</style>

<div class="keuangan d-flex mt-3 ms-3">
    <!-- Card Saldo Anda -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ url('/pemasukan') }}">
            <div class="card border-left-primary shadow h-100 py-2 me-3">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Saldo anda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><strong>Rp {{ number_format($pemasukan, 0, ',', '.') }}</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Card Pengeluaran Anda -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{ url('/pengeluaran') }}">
            <div class="card border-left-primary shadow h-100 py-2 me-3">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Pengeluaran anda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><strong>Rp {{ number_format($pengeluaran, 0, ',', '.') }}</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Card Sisa Saldo Anda -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Sisa saldo anda</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><strong>Rp {{ number_format($keuangan, 0, ',', '.') }}</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- alert for expense --}}
@if($expenseAlert == 'limit reached')
    <div class="alert alert-warning" style="margin-left: 18px; padding: 10px 10px; font-size: 18px;">Peringatan: Pengeluaran hari ini sudah mendekati batas!</div>
@else
    <div class="alert alert-success" style="margin-left: 18px; padding: 10px 10px; font-size: 18px;">Nice, Pengeluaran hari ini masih aman!</div>
@endif


@endsection
