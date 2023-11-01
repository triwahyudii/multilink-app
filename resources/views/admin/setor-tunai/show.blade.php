@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row justify-content-center" id="table-hover-row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Setor Tunai</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Bank</th>
                                <td>: {{ $data['bank'] }}</td>
                            </tr>
                            <tr>
                                <th>Nama Penyetor</th>
                                <td>: {{ $data['name'] }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Rekening</th>
                                <td>: {{ $data['rekening'] }}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>: Rp {{ number_format($data['total'], 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>: {{ \Carbon\Carbon::parse($data['created_at'])->format('d-m-Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ url('/admin/setor-tunai/') }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-arrow-left"></i> Back</a>
        </div>
    </div>
</section>

@endsection