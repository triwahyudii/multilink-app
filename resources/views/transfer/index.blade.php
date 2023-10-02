@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Riwayat Transfer</h5>
    <div class="row">
        <div class="bg-light">
            <table class="table">
                <thead>
                    <tr>
                        <th>Pengirim</th>
                        <th>Total</th>
                        <th>Penerima</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['total']}}</td>
                        <td>{{$item['name_penerima']}}</td>
                        <td>
                            <a href="#" class="btn btn-warning">Lihat</a>
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