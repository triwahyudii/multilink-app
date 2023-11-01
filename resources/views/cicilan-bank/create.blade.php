@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="badge text-bg-warning">Cicilan Bank</h1>
    <div class="card rounded-4">
        <div class="bg-body-secondary rounded-4">
            <form action="{{ url('cicilan-bank/store') }}" method="post">
                @csrf
                <div class="p-2">
                    <label for="bank">Bank </label>
                    <select name="bank" id="bank" class="form-select">
                        <option selected disabled>Pilih Bank</option>
                        <option value="BRI">BRI</option>
                        <option value="BCA">BCA</option>
                        <option value="BNI">BNI</option>
                        <option value="MANDIRI">MANDIRI</option>
                    </select>
                </div>
                <div class="p-2">
                    <label for="nomor_tagihan">Nomor Tagihan</label>
                    <input type="text" name="nomor_tagihan" id="nomor_tagihan" class="form-control">
                </div>
                <div class="p-2">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="p-2">
                    <label for="total">Total</label>
                    <input type="number" name="total" id="total" class="form-control">
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