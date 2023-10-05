@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Riwayat Cicilan Leasing</h5>
    <div class="row">
        <div class="bg-light">
            <table class="table">
                <thead>
                    <tr>
                        <th>Leasing</th>
                        <th>Nama</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{$item['leasing']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>Rp {{number_format($item['total'], 0, ',', '.')}}</td>
                        <td>
                            <a href="{{ url('riwayat/cicilan-leasing/'.$item['id']) }}" class="btn btn-warning">Lihat</a>
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