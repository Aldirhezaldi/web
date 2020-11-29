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
                            <h3 class="panel-title">Invoice</h3>
                            <br>
                            <br>
                            <a href="/invoice" class="btn btn-danger">Kembali</a>
                            <br />
                            <br />
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <th>ID Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Harga Satuan</th>
                                    <th>Subtotal</th>
                                </tr>

                                @php
                                $total = 0;
                                foreach ($pesanan as $psn) :
                                $subtotal = $psn->jumlah_pesanan * $psn->harga;
                                $total += $subtotal;
                                @endphp
                                <tr>
                                    <td>@php echo $psn->id_produk @endphp</td>
                                    <td>@php echo $psn->nama_produk @endphp</td>
                                    <td>@php echo $psn->jumlah_pesanan @endphp</td>
                                    <td>@php echo number_format($psn->harga, 0,',','.') @endphp</td>
                                    <td>@php echo number_format($subtotal, 0,',','.') @endphp</td>
                                </tr>
                                @php endforeach; @endphp

                                <tr>
                                    <td colspan="4" align="right">Total</td>
                                    <td align="right">Rp. @php echo number_format($total,0,',','.') @endphp</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('konten1')
    <a href="/invoice" class="btn btn-danger">Kembali</a>
    <br />
    <br />
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
        </tr>

        @php
        $total = 0;
        foreach ($pesanan as $psn) :
        $subtotal = $psn->jumlah_pesanan * $psn->harga;
        $total += $subtotal;
        @endphp
        <tr>
            <td>@php echo $psn->id_produk @endphp</td>
            <td>@php echo $psn->nama_produk @endphp</td>
            <td>@php echo $psn->jumlah_pesanan @endphp</td>
            <td>@php echo number_format($psn->harga, 0,',','.') @endphp</td>
            <td>@php echo number_format($subtotal, 0,',','.') @endphp</td>
        </tr>
        @php endforeach; @endphp

        <tr>
            <td colspan="4" align="right">Total</td>
            <td align="right">Rp. @php echo number_format($total,0,',','.') @endphp</td>
        </tr>
    </table>
    @endsection