@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data mahasiswa
                <a href="#" class="btn btn-md btn-primary float-right">tambah data</a>
                </div>

                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-Bordered">
                <tr>
                <th>NO</th>
                <th>NPM</th>
                <th>NAMA LENGKAP</th>
                <th>TTL</th>
                <th>JENIS KELAMIN</th>
                <th>TELEPONE</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
                </tr>
                @foreach ($mahasiswa as $mhs)
                <tr>
                <td>{{ $mhs->id}}</td>
                <td>{{ $mhs->npm}}</td>
                <td>{{ $mhs->nama_mahasiswa}}</td>
                <td>{{ $mhs->tempat_lahir.', '.$mhs->tanggal_lahir}}</td>
                <td>{{ $mhs->jenis_kelamin}}</td>
                <td>{{ $mhs->telepon}}</td>
                <td>{{ $mhs->alamat}}</td>
                <td>{{ $mhs->aksi}}</td>
                <td>
                <a href="#" class="btn btn-sn btn-warning">edit</a>
                <a href="#" class="btn btn-sn btn-danger">hapus</a>

                </td>
                </tr>
                @endforeach


                   
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
