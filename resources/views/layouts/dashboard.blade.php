@extends('layouts.main')
@section('content')
<style>
    a{
        text-decoration: none;
    }
</style>

<div class="keuangan d-flex mt-3 ms-3" >
    <div class="col-xl-3 col-md-6 mb-4 ">
        <a href="{{ url('/pemasukan') }}">
            <div class="card border-left-primary shadow h-100 py-2 me-3" >
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Saldo anda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp {{ number_format($pemasukan, 0, ',', '.') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <a  href="{{ url('/pengeluaran') }}">
            <div class="card border-left-primary shadow h-100 py-2 me-3">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        Pengeluaran anda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp {{ number_format($pengeluaran, 0, ',', '.') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Sisa saldo anda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp {{ number_format($keuangan, 0, ',', '.') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    @endsection
