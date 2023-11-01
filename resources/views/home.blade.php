@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-bg-light">
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            Saldo
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-bell text-primary"></i>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-cart-shopping text-primary"></i>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <div class="row bg-white border-4 p-3 m-0 rounded-4">
                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('transfer')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Transfer.png') }}" alt="Transfer" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Transfer</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('tarik-tunai')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Tarik-tunai.png') }}" alt="Tarik-tunai" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Tarik Tunai</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('setor-tunai')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Setor-tunai.png') }}" alt="Setor-tunai" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Setor Tunai</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('bayar-cicilan')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Bayar.png') }}" alt="Bayar" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Bayar Cicilan</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('asuransi')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Asuransi.png') }}" alt="Asuransi" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Asuransi</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="#" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Bank.png') }}" alt="Bank" class="img-fluid" style="filter:blur(3px);">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Pinjaman</h5>
                                        </div>
                                    </div>
                                </a>
                            </div> -->

                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('pulsa/create')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Pulsa.png') }}" alt="Pulsa" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Pulsa</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('pln/create')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Pln.png') }}" alt="Pln" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">PLN</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('topup/create')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Topup.png') }}" alt="Topup" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Top Up</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4 col-sm-6 col-md-4 col-lg-3 p-2">
                                <a href="{{url('/')}}" class="text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('assets/images/Sayur.png') }}" alt="Sayur" class="img-fluid">
                                            <h5 class="card-title pt-2 mb-0" style="font-size: 14px;">Belanja</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card h-100 border-0">
                    <div class="card-body text-center">
                        <div class="d-grid gap-2 pt-1">
                            <a href="{{ url('riwayat') }}" class="btn btn-primary btn-lg">Riwayat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection