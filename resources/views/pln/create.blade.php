@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="badge text-bg-warning">PLN</h1>
    <div class="card rounded-4">
        <div class="bg-body-secondary rounded-4">
            <form action="{{ url('pln/store') }}" method="post">
                @csrf
                <div class="p-2">
                    <label for="user_id">ID Pelanggan</label>
                    <input type="text" name="user_id" id="user_id" class="form-control">
                </div>
                <div class="p-2">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="p-2">
                    <label for="nominal">Nominal</label>
                    <select name="nominal" id="nominal" class="form-select">
                        <option selected disabled>Pilih Nominal Token</option>
                        <option value="20000">Rp 20.000</option>
                        <option value="50000">Rp 50.000</option>
                        <option value="100000">Rp 100.000</option>
                        <option value="200000">Rp 200.000</option>
                        <option value="500000">Rp 500.000</option>
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