@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Riwayat Pulsa</h5>
    <div class="row">
        <div class="bg-light">
            <table class="table">
                <thead>
                    <tr>
                        <th>Provider</th>
                        <th>Handphone</th>
                        <th>Nominal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{$item['provider']}}</td>
                        <td>{{$item['phone']}}</td>
                        <td>Rp {{number_format($item['nominal'], 0, ',', '.')}}</td>
                        <td>
                            <a href="{{ url('pulsa/'.$item['id']) }}" class="btn btn-warning">Lihat</a>
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