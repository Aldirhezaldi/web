@extends('master')

<!-- isi title -->
@section('title', 'Tambah Data')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Tambah Data Produk')

<!-- isi bagian konten -->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tambah Data Produk</h3>
                            <br>
                            <br>
                            <a href="/produk" class="btn btn-danger">Kembali</a>
                            <br />
                            <br />
                            <!-- Menampilkan error validasi -->
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <!-- Form Validasi -->
                            <form action="/produk/simpan" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control" value="{{old('nama_produk')}}">
                                </div>
                                <div class="form-group">
                                    <label for="kategori_produk">Kategori Produk</label>
                                    <select class="form-control" id="kategori_produk" name="kategori_produk" value="{{old('kategori_produk')}}">
                                        <option selected>Pilih Kategori</option>
                                        @foreach($kategori as $b)
                                        <option>{{$b['nama_kategori']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga_produk">Harga Produk</label>
                                    <input type="text" name="harga_produk" class="form-control" value="{{old('harga_produk')}}">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="text" name="stok" class="form-control" value="{{old('stok')}}">
                                </div>
                                <div class="form-group">
                                    <b>File Gambar</b><br />
                                    <input type="file" name="foto_produk">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Tambah">
                                </div>
                                <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop
    @section('konten1')
    <a href="/produk" class="btn btn-danger">Kembali</a>
    <br />
    <br />
    <!-- Menampilkan error validasi -->
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form Validasi -->
    <form action="/produk/simpan" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control" value="{{old('nama_produk')}}">
        </div>
        <div class="form-group">
            <label for="kategori_produk">Kategori Produk</label>
            <select class="form-control" id="kategori_produk" name="kategori_produk" value="{{old('kategori_produk')}}">
                <option selected>Pilih Kategori</option>
                @foreach($kategori as $b)
                <option>{{$b['nama_kategori']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="harga_produk">Harga Produk</label>
            <input type="text" name="harga_produk" class="form-control" value="{{old('harga_produk')}}">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" class="form-control" value="{{old('stok')}}">
        </div>
        <div class="form-group">
            <label for="foto_produk">Foto Produk</label>
            <input type="text" name="foto_produk" class="form-control" value="{{old('foto_produk')}}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
        <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
    </form>
    @endsection