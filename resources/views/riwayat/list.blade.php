@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="text-center fw-bold pt-1">
            <h4>Riwayat Pesanan</h4>
        </div>

        <div class="d-grid gap-2 text-center bg-white">
            <div class="container">
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/transfer" class="btn btn-outline-primary text-black">
                        Transfer
                    </a>
                </div>
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/tarik-tunai" class="btn btn-outline-primary text-black">
                        Tarik Tunai
                    </a>
                </div>
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/setor-tunai" class="btn btn-outline-primary text-black">
                        Setor Tunai
                    </a>
                </div>
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/bayar-cicilan" class="btn btn-outline-primary text-black">
                        Bayar Cicilan
                    </a>
                </div>
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/pulsa" class="btn btn-outline-primary text-black">
                        Pulsa
                    </a>
                </div>
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/pln" class="btn btn-outline-primary text-black">
                        PLN
                    </a>
                </div>
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/topup" class="btn btn-outline-primary text-black">
                        Top Up
                    </a>
                </div>
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/asuransi" class="btn btn-outline-primary text-black">
                        Asuransi
                    </a>
                </div>
                <div class="row p-1">
                    <a href="http://127.0.0.1:8000/riwayat/" class="btn btn-outline-primary text-black">
                        Pengajuan Pinjaman
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center pt-4">
            <a href="{{ url('home') }}" class="btn btn-dark">Kembali</a>
        </div>
    </div>
</div>
@endsection