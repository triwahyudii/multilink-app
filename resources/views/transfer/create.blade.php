@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="bg-info">
            <form action="">
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
                <div class="p-2">
                    <label for="rekening_penerima">Nomor Rekening Penerima</label>
                    <input type="text" name="rekening_penerima" id="rekening_penerima" class="form-control">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection