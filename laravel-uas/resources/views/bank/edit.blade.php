@extends('master')
<!-------isi title--->
@section('title', 'Edit Bank')

<!------isi bagian judul halaman---->
@section('judul_halaman', 'Edit Data Bank')

<!------isi bagian konten------->
@section('konten')
<div class="main">
    <div class="main-content">
        <div class="containet-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Bank</h3>
                            <br>
                            <br>
                            <a href="/bank" class="btn btn-danger">Kembali</a>
                            <br>
                            <br>
                        </div>
                        <div class="panel-body">
                            @foreach($bank as $b)
                            <form action="/bank/update" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$b->id_bank}}"><br />
                                <div class="form-group">
                                    <label for="nama_bank">Nama Bank</label>
                                    <input type="text" class="form-control" required="required" name="nama_bank" value="{{$b->nama_bank}}"><br />
                                </div>
                                <div class="form-group">
                                    <label for="nomer_rekening">Nomor Rekening</label>
                                    <input type="number" class="form-control" required="required" name="nomer_rekening" value="{{$b->nomer_rekening}}"><br />
                                </div>
                                <button type="submit" name="edit" class="btn btn-primary float-right">Simpan Data</button>
                            </form>
                            @endforeach
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop