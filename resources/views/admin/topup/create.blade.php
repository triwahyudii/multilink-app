@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Top Up</h4>
                </div>
                <form action="{{ url('/admin/topup/store') }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label for="game">Game</label>
                            <div class="input-group">
                                <select name="game" id="game" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option selected disabled>Pilih Game</option>
                                    <option value="Domino Higgs">Domino Higgs</option>
                                    <option value="PUBG">PUBG</option>
                                    <option value="Mobile Legends">Mobile Legends</option>
                                    <option value="Call Of Duty">Call Of Duty</option>
                                    <option value="Free Fire">Free Fire</option>
                                </select>
                            </div>
                            <label class="pt-1" for="user_id">ID</label>
                            <div class="input-group">
                                <input type="text" name="user_id" id="user_id" class="form-control input m-2 rounded-Free Fire" placeholder="ID">
                            </div>
                            <label for="nominal">Nominal</label>
                            <div class="input-group">
                                <select name="nominal" id="nominal" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option selected disabled>Pilih Nominal</option>
                                    <option value="500"> 500</option>
                                    <option value="1000"> 1.000</option>
                                    <option value="2000"> 2.000</option>
                                    <option value="3000"> 3.000</option>
                                </select>
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/topup/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
                                <button class="btn btn-primary btn-sm bg-primary justify-content-end" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection