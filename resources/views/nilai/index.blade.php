@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai Mahasiswa
                      <a href="{{ route('nilai-create') }}" class="btn btn-md btn-primary float-right">Tambah Nilai</a> 
                </div>

                <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered">
                           <tr>
                              <th>NO</th>
                              <th>NPM</th>
                              <th>NAMA MAHASISWA</th>
                              <th>SKS</th>
                              <th>NILAI/th>
                              <th>AKSI</th>
                          </tr>
                           @foreach ($nilai as $nl)
                            <tr>
                                <td> {{ $nl->id }} </td>
                                <td> {{ $mhs->npm->$mahasiwswa }} </td>
                                <td> {{ $mhs->Nama Mahasiswa->$mahasiwswa }} </td>
                                <td> {{ $mk->sks->$makul }} </td>
                                <td> {{ $nl->nilai->$nilai}} </td>
                                <td>
                                    <a href="{{ route('edit.nilai', $nl->id) }}" class="btn btn-sn btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.nilai', $mk->id) }}" class="btn btn-sn btn-danger">HAPUS</a>
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