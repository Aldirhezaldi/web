@extends('master')

<!-- isi title -->
@section('title', 'Tambah Data')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Tambah Data Bank')

<!-- isi bagian konten -->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tambah Data Bank</h3>
                            <br>
                            <br>
                            <a href="/bank" class="btn btn-danger">Kembali</a>
                            <br>
                            <br>
                        </div>
                        <div class="panel-body">
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
                            <form action="/bank/simpan" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="nama_bank">Nama Bank</label>
                                    <input type="text" name="nama_bank" class="form-control" value="{{old('nama_bank')}}">
                                </div>
                                <div class="form-group">
                                    <label for="nomer_rekening">Nomor Rekening</label>
                                    <input type="text" name="nomer_rekening" class="form-control" value="{{old('nomer_rekening')}}">
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
</div>

@stop
@section('konten')
<a href="/bank" class="btn btn-danger">Kembali</a>
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
<form action="/bank/simpan" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nama_bank">Nama Bank</label>
        <input type="text" name="nama_bank" class="form-control" value="{{old('nama_bank')}}">
    </div>
    <div class="form-group">
        <label for="nomer_rekening">Nomor Rekening</label>
        <input type="text" name="nomer_rekening" class="form-control" value="{{old('nomer_rekening')}}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Tambah">
    </div>
    <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button> -->
</form>
@endsection