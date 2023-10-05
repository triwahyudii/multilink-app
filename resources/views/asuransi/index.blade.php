@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Riwayat Asuransi</h5>
    <div class="row">
        <div class="bg-light">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Handphone</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['phone']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>
                            <a href="{{ url('riwayat/asuransi/'.$item['id']) }}" class="btn btn-warning">Lihat</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center pt-4">
            <a href="{{ url('riwayat') }}" class="btn btn-dark">Kembali</a>
        </div>
    </div>
</div>
@endsection