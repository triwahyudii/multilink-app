@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Transfer</h4>
                </div>
                <form action="{{ url('/admin/transfer/store') }}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label>Bank</label>
                            <div class="input-group">
                                <select name="bank" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option selected disabled>Nama Bank</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="MANDIRI">MANDIRI</option>
                                </select>
                            </div>
                            <label class="pt-1">Nama Pengirim</label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" class="form-control input m-2 rounded-3" placeholder="Nama Pengirim">
                            </div>
                            <label class="pt-1">Nomor Rekening</label>
                            <div class="input-group">
                                <input type="text" name="rekening" id="rekening" class="form-control input m-2 rounded-3" placeholder="Nomor Rekening">
                            </div>
                            <label class="pt-1">Total</label>
                            <div class="input-group">
                                <input type="text" name="total" id="total" class="form-control input m-2 rounded-3" placeholder="Total">
                            </div>
                            <label class="pt-1">Nama Penerima</label>
                            <div class="input-group">
                                <input type="text" name="name_penerima" id="name_penerima" class="form-control input m-2 rounded-3" placeholder="Nama Penerima">
                            </div>
                            <label class="pt-1">Nomor Rekening Penerima</label>
                            <div class="input-group">
                                <input type="text" name="rekening_penerima" id="rekening_penerima" class="form-control input m-2 rounded-3" placeholder="Nomor Rekening Penerima">
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/transfer/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
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