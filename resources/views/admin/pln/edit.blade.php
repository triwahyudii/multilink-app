@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit PLN</h4>
                </div>
                <form action="{{ url('/admin/pln/' . $data['id']) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label class="" for="user_id">ID Pelanggan</label>
                            <div class="input-group">
                                <input type="text" name="user_id" id="user_id" value="{{ $data['user_id'] }}" class="form-control input m-2 rounded-3" placeholder="ID Pelanggan">
                            </div>
                            <label class="" for="name">Nama</label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" value="{{ $data['name'] }}" class="form-control input m-2 rounded-3" placeholder="Nama">
                            </div>
                            <label for="nominal">Nominal</label>
                            <div class="input-group">
                                <select name="nominal" id="nominal" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option value="20000" @if ($data['nominal']=='20000' ) selected @endif>Rp 20.000</option>
                                    <option value="50000" @if ($data['nominal']=='50000' ) selected @endif>Rp 50.000</option>
                                    <option value="100000" @if ($data['nominal']=='100000' ) selected @endif>Rp 100.000</option>
                                    <option value="200000" @if ($data['nominal']=='200000' ) selected @endif>Rp 200.000</option>
                                    <option value="500000" @if ($data['nominal']=='500000' ) selected @endif>Rp 500.000</option>
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