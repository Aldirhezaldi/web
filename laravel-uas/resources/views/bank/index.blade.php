@extends('master')

<!-- isi title -->
@section('title', 'Data Bank')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Data Bank')

<!-- isi bagian konten -->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Bank</h3>
                            <br>
                            <br>
                            <a href="/bank/tambah" class="btn btn-primary">Tambah Data Bank</a>
                            <a href="/home" class="btn btn-danger">Kembali</a>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID Bank</th>
                                        <th>Nama Bank</th>
                                        <th>Nomor Rekening</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bank as $b)
                                    <tr>
                                        <td>{{$b['id_bank']}}</td>
                                        <td>{{$b['nama_bank']}}</td>
                                        <td>{{$b['nomer_rekening']}}</td>
                                        <td>
                                            <a href="/bank/detail/{{$b['id_bank']}}" class="btn btn-primary">Detail</a>
                                            <a href="/bank/edit/{{$b['id_bank']}}" class="btn btn-warning">Edit</a>
                                            <a href="/bank/hapus/{{$b['id_bank']}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop