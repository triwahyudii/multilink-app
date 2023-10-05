@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="badge text-bg-warning">Asuransi</h1>
    <div class="card rounded-4">
        <div class="bg-body-secondary rounded-4">
            <form action="{{ url('asuransi/store') }}" method="post">
                @csrf
                <div class="p-2">
                    <label for="ktp">Nomor KTP</label>
                    <input type="text" name="ktp" id="ktp" class="form-control">
                </div>
                <div class="p-2">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="p-2">
                    <label for="kk">Nomor Kartu Keluarga</label>
                    <input type="text" name="kk" id="kk" class="form-control">
                </div>
                <div class="p-2">
                    <label for="phone">Handphone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="p-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="p-2">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                </div>
                <div class="p-2">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                </div>
                <div class="p-2">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="p-2">
                    <label for="status_pernikahan">Status Pernikahan</label>
                    <select name="status_pernikahan" id="status_pernikahan" class="form-select">
                        <option selected disabled>Pilih Status Pernikahan</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Lajang">Lajang</option>
                        <option value="Cerai">Cerai</option>
                    </select>
                </div>
                <div class="p-2">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="p-2">
                    <label for="kode_pos">Kode POS</label>
                    <input type="number" name="kode_pos" id="kode_pos" class="form-control">
                </div>
                <div class="p-2">
                    <label for="negara">Negara</label>
                    <input type="text" name="negara" id="negara" class="form-control">
                </div>
                <div class="p-2">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" id="kelas" class="form-select">
                        <option selected disabled>Pilih Kelas Asuransi</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="p-2">
                    <label for="status_keluarga">Status Keluarga</label>
                    <select name="status_keluarga" id="status_keluarga" class="form-select">
                        <option selected disabled>Pilih Status Keluarga</option>
                        <option value="Kepala">Kepala Keluarga</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                    </select>
                </div>
                <div class="p-2">
                    <label for="jumlah_anak">Jumlah Anak</label>
                    <input type="number" name="jumlah_anak" id="jumlah_anak" class="form-control">
                </div>
                <div class="p-2">
                    <label for="nomor_rekening">Nomor Rekening</label>
                    <input type="text" name="nomor_rekening" id="nomor_rekening" class="form-control">
                </div>
                <div class="p-2">
                    <label for="pemilik_rekening">Pemilik Rekening</label>
                    <input type="text" name="pemilik_rekening" id="pemilik_rekening" class="form-control">
                </div>
                <div class="d-flex justify-content-center pt-4 pb-2">
                    <div class="row">
                        <div class="col">
                            <a href="{{ url('home') }}" class="btn btn-dark">Kembali</a>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Selesai</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection