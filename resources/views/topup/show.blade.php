@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card rounded-2 border-3">
        <div class="rounded-2">
            <table class="table table-light table-borderless">
                <tbody>
                    <tr>
                        <th>Game</th>
                        <td>: {{$data['game']}}</td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <td>: {{$data['user_id']}}</td>
                    </tr>
                    <tr>
                        <th>Nominal</th>
                        <td>: {{number_format($data['nominal'], 0, ',', '.')}} item</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>: {{\Carbon\Carbon::parse($data['created_at'])->format('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>: {{$data['status']}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center pt-4">
        <a href="{{ url('topup') }}" class="btn btn-dark">Kembali</a>
    </div>
</div>
@endsection