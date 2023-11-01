@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row justify-content-center" id="table-hover-row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Top Up</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>: {{ $data['user_id'] }}</td>
                            </tr>
                            <tr>
                                <th>Game</th>
                                <td>: {{ $data['game'] }}</td>
                            </tr>
                            <tr>
                                <th>Nominal</th>
                                <td>: {{ number_format($data['nominal'], 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>: {{ \Carbon\Carbon::parse($data['created_at'])->format('d-m-Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ url('/admin/topup/') }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-arrow-left"></i> Back</a>
        </div>
    </div>
</section>

@endsection