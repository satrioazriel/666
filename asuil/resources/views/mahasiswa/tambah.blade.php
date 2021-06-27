@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Data</div>

                <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}" method="POST" class="form-item">
                @csrf
<div class="form-group">
        <label for="npm">NPM</label>
        <input type="text" name="npm" class="form-control colt-mb-9" placeholder="Masukkan NPM">
    </div>
    <div class="form-group">
        <label for="nama_mahasiswa">Nama Lengkap</label>
        <input type="text" name="nama_mahasiswa" class="form-control colt-mb-9" placeholder="Masukkan Nama">
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control colt-mb-9" placeholder="Masukkan Tempat Lahir">
    </div>

    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control colt-mb-9" > 
    </div>

    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select type="text" name="jenis_kelamin"  class="form-control colt-mb-9" id="">
            <option value="">Masukkan Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" name="telepon" class="form-control colt-mb-9" placeholder="Masukkan Telepon">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control colt-mb-9" placeholder="Masukkan Alamat">
    </div>

    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <button type="reset" class="btn btn-danger">BATAL</button> 
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
