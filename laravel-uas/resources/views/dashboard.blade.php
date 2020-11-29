@extends('master')

<!-- isi title -->
@section('title', 'Dashboard')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Dashboard')

<!-- isi bagian konten -->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dashboard</h3>
                            <br>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card text-white bg-dark" style="max-width: 18rem; text-align:center; height:150px;">
                                        <div class="card-body">
                                            <p>Selamat Datang</p>
                                            <h4>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('konten1')
<div class="container-fluid">
    <a href="/home" class="btn btn-danger">Kembali</a><br><br>
    <div class="alert alert-info" role="alert">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-dark" style="max-width: 18rem; text-align:center; height:150px;">
                <div class="card-body">
                    <p>Selamat Datang</p>
                    <h4>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection