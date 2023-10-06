@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="badge text-bg-warning">Pulsa</h1>
    <div class="card rounded-4">
        <div class="bg-body-secondary rounded-4">
            <form action="{{ url('pulsa/store') }}" method="post">
                @csrf
                <div class="p-2">
                    <select name="provider" id="provider" class="form-select">
                        <option selected disabled>Pilih Provider</option>
                        <option value="Indosat">Indosat</option>
                        <option value="Im3">IM3</option>
                        <option value="XL">XL</option>
                        <option value="Telkomsel">Telkomsel</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="p-2">
                    <label for="phone">Handphone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="p-2">
                    <select name="nominal" id="nominal" class="form-select">
                        <option selected disabled>Pilih Nominal</option>
                        <option value="5000">Rp 5.000</option>
                        <option value="10000">Rp 10.000</option>
                        <option value="20000">Rp 20.000</option>
                        <option value="50000">Rp 50.000</option>
                        <option value="100000">Rp 100.000</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center pt-4 pb-2">
                    <div class="row">
                        <div class="col">
                            <a href="{{ url('home') }}" class="btn btn-dark">Kembali</a>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Selesai</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection