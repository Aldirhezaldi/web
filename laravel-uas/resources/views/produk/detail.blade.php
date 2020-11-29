@extends('master')
<!-------isi title--->
@section('title', 'Detail Bank')

<!------isi bagian judul halaman---->
@section('judul_halaman', 'Detail Data Produk')

<!------isi bagian konten------->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Detail Data Produk</h3>
                            <br>
                            <br>
                            <a href="/produk" class="btn btn-danger">Kembali</a>
                            <br>
                            <br>
                        </div>
                        <div class="panel-body">
                            @foreach($produk as $b)
                            <h5 class="card-title"> {{$b->nama_produk}} </h5>
                            <p class="card-text">
                                <label for=""><b> Kategori Produk : </b></label>
                                {{$b->kategori_produk}}</p>
                            <p class="card-text">
                                <label for=""><b> Harga Produk : </b></label>
                                {{$b->harga_produk}}</p>
                            <p class="card-text">
                                <label for=""><b> Stok : </b></label>
                                {{$b->stok}}</p>
                            <p class="card-text">
                                <label for=""><b> Foto Produk : </b></label>
                                {{$b->foto_produk}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('konten')
<a href="/produk" class="btn btn-danger">Kembali</a>
<br />
<br />
@foreach($produk as $b)
<h5 class="card-title"> {{$b->nama_produk}} </h5>
<p class="card-text">
    <label for=""><b> Kategori Produk : </b></label>
    {{$b->kategori_produk}}</p>
<p class="card-text">
    <label for=""><b> Harga Produk : </b></label>
    {{$b->harga_produk}}</p>
<p class="card-text">
    <label for=""><b> Stok : </b></label>
    {{$b->stok}}</p>
<p class="card-text">
    <label for=""><b> Foto Produk : </b></label>
    {{$b->foto_produk}}</p>
@endforeach
@endsection