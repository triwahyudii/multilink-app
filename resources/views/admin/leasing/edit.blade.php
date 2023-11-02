@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Cicilan Leasing</h4>
                </div>
                <form action="{{ url('/admin/leasing/' . $data['id']) }}" method="post">
                    @csrf
                    @method('put')
                    
                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label for="leasing">Leasing</label>
                            <div class="input-group">
                                <select name="leasing" id="leasing" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option value="FIF" @if ($data['leasing']=='FIF' ) selected @endif>FIF</option>
                                    <option value="WOM" @if ($data['leasing']=='WOM' ) selected @endif>WOM</option>
                                    <option value="BAF" @if ($data['leasing']=='BAF' ) selected @endif>BAF</option>
                                    <option value="ADIRA" @if ($data['leasing']=='ADIRA' ) selected @endif>ADIRA</option>
                                </select>
                            </div>
                            <label class="pt-1" for="name">Nama</label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" value="{{ $data['name'] }}" class="form-control input m-2 rounded-3" placeholder="Nama">
                            </div>
                            <label class="pt-1" for="nomor_tagihan">Nomor Tagihan</label>
                            <div class="input-group">
                                <input type="text" name="nomor_tagihan" id="nomor_tagihan" value="{{ $data['nomor_tagihan'] }}" class="form-control input m-2 rounded-3" placeholder="Nomor Tagihan">
                            </div>
                            <label class="pt-1" for="total">Total</label>
                            <div class="input-group">
                                <input type="text" name="total" id="total" value="{{ $data['total'] }}" class="form-control input m-2 rounded-3" placeholder="Total">
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/leasing/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
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