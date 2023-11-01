@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Pulsa</h4>
                </div>
                <form action="{{ url('/admin/pulsa/' . $data['id']) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label for="provider">Provider</label>
                            <div class="input-group">
                                <select name="provider" id="provider" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option value="Indosat" @if ($data['provider']=='Indosat' ) selected @endif>Indosat</option>
                                    <option value="Im3" @if ($data['provider']=='Im3' ) selected @endif>Im3</option>
                                    <option value="XL" @if ($data['provider']=='XL' ) selected @endif>XL</option>
                                    <option value="Telkomsel" @if ($data['provider']=='Telkomsel' ) selected @endif>Telkomsel</option>
                                    <option value="3" @if ($data['provider']=='3' ) selected @endif>3</option>
                                </select>
                            </div>
                            <label class="pt-1" for="phone">Handphone</label>
                            <div class="input-group">
                                <input type="text" name="phone" id="phone" value="{{ $data['phone'] }}" class="form-control input m-2 rounded-3" placeholder="Handphone">
                            </div>
                            <label for="nominal">Nominal</label>
                            <div class="input-group">
                                <select name="nominal" id="nominal" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option value="5000" @if ($data['nominal']=='5000' ) selected @endif>Rp 5.000</option>
                                    <option value="10000" @if ($data['nominal']=='10000' ) selected @endif>Rp 10.000</option>
                                    <option value="20000" @if ($data['nominal']=='20000' ) selected @endif>Rp 20.000</option>
                                    <option value="50000" @if ($data['nominal']=='50000' ) selected @endif>Rp 50.000</option>
                                    <option value="100000" @if ($data['nominal']=='100000' ) selected @endif>Rp 100.000</option>
                                </select>
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/pulsa/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
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