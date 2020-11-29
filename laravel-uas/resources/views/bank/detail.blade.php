@extends('master')
<!-------isi title--->
@section('title', 'Detail Bank')

<!------isi bagian judul halaman---->
@section('judul_halaman', 'Detail Data Bank')

<!------isi bagian konten------->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Detail Data Bank</h3>
                            <br>
                            <br>
                            <a href="/bank" class="btn btn-danger">Kembali</a>
                            <br>
                            <br>
                        </div>
                        <div class="panel-body">
                            @foreach($bank as $b)
                            <h5 class="card-title"> {{$b->nama_bank}} </h5>
                            <p class="card-text">
                                <label for=""><b> Nomor Rekening : </b></label>
                                {{$b->nomer_rekening}}</>
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
<a href="/bank" class="btn btn-danger">Kembali</a>
<br />
<br />
@foreach($bank as $b)
<h5 class="card-title"> {{$b->nama_bank}} </h5>
<p class="card-text">
    <label for=""><b> Nomor Rekening : </b></label>
    {{$b->nomer_rekening}}</>
    @endforeach
    @endsection