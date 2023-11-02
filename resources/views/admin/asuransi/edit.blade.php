@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Asuransi</h4>
                </div>
                <form action="{{ url('/admin/asuransi/' . $data['id']) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="d-flex justify-content-center">
                        <div class="input-form container pb-2 m-3">
                            <div class="p-2">
                                <label for="ktp">Nomor KTP</label>
                                <input type="text" name="ktp" id="ktp" value="{{ $data['ktp'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" id="name" value="{{ $data['name'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="kk">Nomor Kartu Keluarga</label>
                                <input type="text" name="kk" id="kk" value="{{ $data['kk'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="phone">Handphone</label>
                                <input type="text" name="phone" id="phone" value="{{ $data['phone'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="{{ $data['email'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $data['tempat_lahir'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $data['tanggal_lahir'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" @if ($data['jenis_kelamin']=='Laki-laki' ) selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if ($data['jenis_kelamin']=='Perempuan' ) selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="p-2">
                                <label for="status_pernikahan">Status Pernikahan</label>
                                <select name="status_pernikahan" id="status_pernikahan" class="form-select">
                                    <option selected disabled>Pilih Status Pernikahan</option>
                                    <option value="Menikah" @if ($data['status_pernikahan']=='Menikah' ) selected @endif>Menikah</option>
                                    <option value="Lajang" @if ($data['status_pernikahan']=='Lajang' ) selected @endif>Lajang</option>
                                    <option value="Cerai"@if ($data['status_pernikahan']=='Cerai' ) selected @endif>Cerai</option>
                                </select>
                            </div>
                            <div class="p-2">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10">{{ $data['alamat'] }}</textarea>
                            </div>
                            <div class="p-2">
                                <label for="kode_pos">Kode POS</label>
                                <input type="number" name="kode_pos" id="kode_pos" value="{{ $data['kode_pos'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="negara">Negara</label>
                                <input type="text" name="negara" id="negara" value="{{ $data['negara'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="kelas">Kelas</label>
                                <select name="kelas" id="kelas" class="form-select">
                                    <option selected disabled>Pilih Kelas Asuransi</option>
                                    <option value="1" @if ($data['kelas']=='1' ) selected @endif>1</option>
                                    <option value="2" @if ($data['kelas']=='2' ) selected @endif>2</option>
                                    <option value="3" @if ($data['kelas']=='3' ) selected @endif>3</option>
                                </select>
                            </div>
                            <div class="p-2">
                                <label for="status_keluarga">Status Keluarga</label>
                                <select name="status_keluarga" id="status_keluarga" class="form-select">
                                    <option selected disabled>Pilih Status Keluarga</option>
                                    <option value="Kepala" @if ($data['status_keluarga']=='Kepala' ) selected @endif>Kepala Keluarga</option>
                                    <option value="Istri" @if ($data['status_keluarga']=='Istri' ) selected @endif>Istri</option>
                                    <option value="Anak" @if ($data['status_keluarga']=='Anak' ) selected @endif>Anak</option>
                                </select>
                            </div>
                            <div class="p-2">
                                <label for="jumlah_anak">Jumlah Anak</label>
                                <input type="number" name="jumlah_anak" id="jumlah_anak" value="{{ $data['jumlah_anak'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="nomor_rekening">Nomor Rekening</label>
                                <input type="text" name="nomor_rekening" id="nomor_rekening" value="{{ $data['nomor_rekening'] }}" class="form-control">
                            </div>
                            <div class="p-2">
                                <label for="pemilik_rekening">Pemilik Rekening</label>
                                <input type="text" name="pemilik_rekening" id="pemilik_rekening" value="{{ $data['pemilik_rekening'] }}" class="form-control">
                            </div>
                            <div class="d-flex pt-3">
                                <a href="{{ url('/admin/asuransi/') }}" class="btn btn-secondary btn-sm justify-content-start me-2"><i class="fa-solid fa-arrow-left"></i> Back</a>
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