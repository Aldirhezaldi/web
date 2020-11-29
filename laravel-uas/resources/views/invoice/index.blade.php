@extends('master')

<!-- isi title -->
@section('title', 'Data Invoice')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Data Invoice')

<!-- isi bagian konten -->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Invoice</h3>
                            <br>
                            <br>
                            <a href="/home" class="btn btn-danger">Kembali</a>
                            <br />
                            <br />
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Invoice</th>
                                        <th>Email Pemesan</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Batas Bayar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invoice as $b)
                                    <tr>
                                        <td>{{$b['id_invoice']}}</td>
                                        <td>{{$b['email']}}</td>
                                        <td>{{$b['tanggal_pemesanan']}}</td>
                                        <td>{{$b['batas_bayar']}}</td>
                                        <td>
                                            <a href="/invoice/detail/{{$b['id_invoice']}}" class="btn btn-primary">Detail</a>
                                            <a href="/invoice/hapus/{{$b['id_invoice']}}" class="btn btn-success">Selesai</a>
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
    @endsection