@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card rounded-2 border-3">
        <div class="rounded-2">
            <table class="table table-light table-borderless">
                <tbody>
                    <tr>
                        <th>Nomor KTP</th>
                        <td>: {{$data['ktp']}}</td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>: {{$data['name']}}</td>
                    </tr>
                    <tr>
                        <th>Nomor Kartu Keluarga</th>
                        <td>: {{$data['kk']}}</td>
                    </tr>
                    <tr>
                        <th>Handphone</th>
                        <td>: {{$data['phone']}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: {{$data['email']}}</td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td>: {{$data['tempat_lahir']}}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>: {{\Carbon\Carbon::parse($data['tanggal_lahir'])->format('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>: {{$data['jenis_kelamin']}}</td>
                    </tr>
                    <tr>
                        <th>Status Pernikahan</th>
                        <td>: {{$data['status_pernikahan']}}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>: {{$data['alamat']}}</td>
                    </tr>
                    <tr>
                        <th>Kode POS</th>
                        <td>: {{$data['kode_pos']}}</td>
                    </tr>
                    <tr>
                        <th>Negara</th>
                        <td>: {{$data['negara']}}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>: {{$data['kelas']}}</td>
                    </tr>
                    <tr>
                        <th>Status Keluarga</th>
                        <td>: {{$data['status_keluarga']}}</td>
                    </tr>
                    <tr>
                        <th>Jumlah Anak</th>
                        <td>: {{$data['jumlah_anak']}}</td>
                    </tr>
                    <tr>
                        <th>Nomor Rekening</th>
                        <td>: {{$data['nomor_rekening']}}</td>
                    </tr>
                    <tr>
                        <th>Pemilik Rekening</th>
                        <td>: {{$data['pemilik_rekening']}}</td>
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
        <a href="{{ url('riwayat/asuransi') }}" class="btn btn-dark">Kembali</a>
    </div>
</div>
@endsection