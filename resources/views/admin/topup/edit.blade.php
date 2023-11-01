@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Top Up</h4>
                </div>
                <form action="{{ url('/admin/topup/' . $data['id']) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <label for="game">Game</label>
                            <div class="input-group">
                                <select name="game" id="game" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option value="Domino Higgs" @if ($data['game']=='Domino Higgs' ) selected @endif>Domino Higgs</option>
                                    <option value="PUBG" @if ($data['game']=='PUBG' ) selected @endif>PUBG</option>
                                    <option value="Mobile Legends" @if ($data['game']=='Mobile Legends' ) selected @endif>Mobile Legends</option>
                                    <option value="Call Of Duty" @if ($data['game']=='Call Of Duty' ) selected @endif>Call Of Duty</option>
                                    <option value="Free Fire" @if ($data['game']=='Free Fire' ) selected @endif>Free Fire</option>
                                </select>
                            </div>
                            <label class="pt-1" for="user_id">ID</label>
                            <div class="input-group">
                                <input type="text" name="user_id" id="user_id" value="{{ $data['user_id'] }}" class="form-control input m-2 rounded-3" placeholder="ID">
                            </div>
                            <label for="nominal">Nominal</label>
                            <div class="input-group">
                                <select name="nominal" id="nominal" class="form-select ml-3 mt-2 border-primary rounded-3">
                                    <option value="500" @if ($data['nominal']=='500' ) selected @endif> 500</option>
                                    <option value="1000" @if ($data['nominal']=='1000' ) selected @endif> 1.000</option>
                                    <option value="2000" @if ($data['nominal']=='2000' ) selected @endif> 2.000</option>
                                    <option value="3000" @if ($data['nominal']=='3000' ) selected @endif> 3.000</option>
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