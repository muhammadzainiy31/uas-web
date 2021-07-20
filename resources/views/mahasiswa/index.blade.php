@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                      <a href="{{ route('mahasiswa-create') }}" class="btn btn-md btn-primary float-right">Tambah Data</a> 
                </div>

                <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered">
                           <tr>
                              <th>NO</th>
                              <th>NPM</th>
                              <th>NAMA LENGKAP</th>
                              <th>TEMPAT LAHIR</th>
                              <th>TANGGAL LAHIR</th>
                              <th>JENIS KELAMIN</th>
                              <th>TELEPON</th>
                              <th>ALAMAT</th>
                              <th>AKSI</th>
                          </tr>
                           @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td> {{ $mhs->id }} </td>
                                <td> {{ $mhs->npm }} </td>
                                <td> {{ $mhs->nama_mahasiswa }} </td>
                                <td> {{ $mhs->tempat_lahir}}</td>
                                <td> {{ $mhs->tgl_lahir }} </td>
                                <td> {{ $mhs->jenis_kelamin =='L'? 'Laki-laki' : 'Perempuan' }} </td>
                                <td> {{ $mhs->telepon }} </td>
                                <td> {{ $mhs->alamat }} </td>
                                <td>
                                    <a href="{{ route('edit.mahasiswa', $mhs->id) }}" class="btn btn-sn btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.mahasiswa', $mhs->id) }}" class="btn btn-sn btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
