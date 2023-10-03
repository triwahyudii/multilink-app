@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Transfer</h5>
    <div class="card rounded-4">
        <div class="bg-body-secondary rounded-4">
            <form action="{{ url('transfer/store') }}" method="post">
                @csrf
                <div class="p-2">
                    <select name="bank" id="bank" class="form-select">
                        <option selected disabled>Pilih Bank</option>
                        <option value="BRI">BRI</option>
                        <option value="BCA">BCA</option>
                        <option value="BNI">BNI</option>
                        <option value="MANDIRI">MANDIRI</option>
                    </select>
                </div>
                <div class="p-2">
                    <label for="name">Nama Pengirim</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="p-2">
                    <label for="rekening">Nomor Rekening</label>
                    <input type="text" name="rekening" id="rekening" class="form-control">
                </div>
                <div class="p-2">
                    <label for="total">Total</label>
                    <input type="text" name="total" id="total" class="form-control">
                </div>
                <div class="p-2">
                    <label for="name_penerima">Nama Penerima</label>
                    <input type="text" name="name_penerima" id="name_penerima" class="form-control">
                </div>
                <div class="p-2 mb-2">
                    <label for="rekening_penerima">Nomor Rekening Penerima</label>
                    <input type="text" name="rekening_penerima" id="rekening_penerima" class="form-control">
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