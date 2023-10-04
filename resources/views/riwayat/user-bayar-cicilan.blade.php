@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="text-center fw-bold pt-1">
            <h4>Bayar Cicilan</h4>
        </div>

        <div class="d-grid gap-2 text-center bg-white">
            <div class="container">
                <div class="row p-1">
                    <a href="{{url('cicilan-bank')}}" class="btn btn-outline-primary text-black">
                        Cicilan Bank
                    </a>
                </div>
                <div class="row p-1">
                    <a href="{{url('cicilan-leasing')}}" class="btn btn-outline-primary text-black">
                        Cicilan Leasing
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