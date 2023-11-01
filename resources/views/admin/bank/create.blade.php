@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Cicilan Bank</h4>
                </div>
                <form action="{{ url('/admin/bank/store') }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label for="bank">Bank</label>
                            <div class="input-group">
                                <select name="bank" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option selected disabled>Nama Bank</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="MANDIRI">MANDIRI</option>
                                </select>
                            </div>
                            <label class="pt-1" for="name">Nama</label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" class="form-control input m-2 rounded-3" placeholder="Nama">
                            </div>
                            <label class="pt-1" for="nomor_tagihan">Nomor Tagihan</label>
                            <div class="input-group">
                                <input type="text" name="nomor_tagihan" id="nomor_tagihan" class="form-control input m-2 rounded-3" placeholder="Nomor Tagihan">
                            </div>
                            <label class="pt-1" for="total">Total</label>
                            <div class="input-group">
                                <input type="text" name="total" id="total" class="form-control input m-2 rounded-3" placeholder="Total">
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/bank/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
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