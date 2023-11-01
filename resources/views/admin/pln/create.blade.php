@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add PLN</h4>
                </div>
                <form action="{{ url('/admin/pln/store') }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label class="" for="user_id">ID Pelanggan</label>
                            <div class="input-group">
                                <input type="text" name="user_id" id="user_id" class="form-control input m-2 rounded-3" placeholder="ID Pelanggan">
                            </div>
                            <label class="" for="name">Nama</label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" class="form-control input m-2 rounded-3" placeholder="Nama">
                            </div>
                            <label for="nominal">Nominal</label>
                            <div class="input-group">
                                <select name="nominal" id="nominal" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option selected disabled>Pilih Nominal</option>
                                    <option value="20000">Rp 20.000</option>
                                    <option value="50000">Rp 50.000</option>
                                    <option value="100000">Rp 100.000</option>
                                    <option value="200000">Rp 200.000</option>
                                    <option value="500000">Rp 500.000</option>
                                </select>
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/pln/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
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