@extends('master')

<!-- isi title -->
@section('title', 'Data Produk')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Data Produk')

<!-- isi bagian konten -->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Produk</h3>
                            <br>
                            <br>
                            <a href="/produk/tambah" class="btn btn-primary">Tambah Data Produk</a>
                            <a href="/home" class="btn btn-danger">Kembali</a>
                            <br>
                            <br>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori Produk</th>
                                        <th>Harga Produk</th>
                                        <th>Stok</th>
                                        <th>Foto Produk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produk as $b)
                                    <tr>
                                        <td>{{$b['id_produk']}}</td>
                                        <td>{{$b['nama_produk']}}</td>
                                        <td>{{$b['kategori_produk']}}</td>
                                        <td>{{$b['harga_produk']}}</td>
                                        <td>{{$b['stok']}}</td>
                                        <td><img width="150px" src="{{ url('/uploads/'.$b['foto_produk']) }}"></td>
                                        <td>
                                            <a href="/produk/detail/{{$b['id_produk']}}" class="btn btn-primary">Detail</a>
                                            <a href="/produk/edit/{{$b['id_produk']}}" class="btn btn-warning">Edit</a>
                                            <a href="/produk/hapus/{{$b['id_produk']}}" class="btn btn-danger">Delete</a>
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
@section('konten')
<a href="/produk/tambah" class="btn btn-primary">Tambah Data Produk</a>
<a href="/home" class="btn btn-danger">Kembali</a>
<br />
<br />
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Kategori Produk</th>
            <th>Harga Produk</th>
            <th>Stok</th>
            <th>Foto Produk</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $b)
        <tr>
            <td>{{$b['id_produk']}}</td>
            <td>{{$b['nama_produk']}}</td>
            <td>{{$b['kategori_produk']}}</td>
            <td>{{$b['harga_produk']}}</td>
            <td>{{$b['stok']}}</td>
            <td>{{$b['foto_produk']}}</td>
            <td>
                <a href="/produk/detail/{{$b['id_produk']}}" class="badge badge-info">Detail</a>
                <a href="/produk/edit/{{$b['id_produk']}}" class="badge badge-warning">Edit</a>
                <a href="/produk/hapus/{{$b['id_produk']}}" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection