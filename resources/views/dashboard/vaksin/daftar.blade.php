@extends('templates.main')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-5">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="text-center">Pendaftaran Vaksin</h3>
                <hr>
                <form action="/vaksin/register" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <strong>Nama Lengkap</strong>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="form-group mb-2">
                        <strong>NIK</strong>
                        <input type="number" name="nik" class="form-control" placeholder="Masukan NIK">
                    </div>
                    <div class="form-group mb-2">
                        <strong>Tanggal Lahir</strong>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <strong>Jenis Kelamin</strong>
                        <label><input type="checkbox" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
                        <label><input type="checkbox" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                    </div>
                    <div class="form-group mb-2">
                        <strong>No HP (AKTIF)</strong>
                        <input type="text" name="no_hp" placeholder="08XXX" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <strong>Alamat Lengkap</strong>
                        <textarea name="alamat" class="form-control" placeholder="Masukan Alamat Lengkap"></textarea>
                    </div>
                    <hr>
                    <div class="form-group mb-2">
                        <button class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()