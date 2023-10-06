@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="badge text-bg-warning">Top Up</h1>
    <div class="card rounded-4">
        <div class="bg-body-secondary rounded-4">
            <form action="{{ url('topup/store') }}" method="post">
                @csrf
                <div class="p-2">
                    <select name="game" id="game" class="form-select">
                        <option selected disabled>Pilih Game</option>
                        <option value="Domino Higgs">Domino Higgs</option>
                        <option value="Mobile Legends">Mobile Legends</option>
                        <option value="PUBG">PUBG</option>
                        <option value="Free Fire">Free Fire</option>
                        <option value="Call Of Duty">Call Of Duty</option>
                    </select>
                </div>
                <div class="p-2">
                    <label for="user_id">ID</label>
                    <input type="text" name="user_id" id="user_id" class="form-control">
                </div>
                <div class="p-2">
                    <select name="nominal" id="nominal" class="form-select">
                        <option selected disabled>Pilih Nominal</option>
                        <option value="500"> 500 item</option>
                        <option value="1000"> 1.000 item</option>
                        <option value="2000"> 2.000 item</option>
                        <option value="3000"> 3.000 item</option>
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