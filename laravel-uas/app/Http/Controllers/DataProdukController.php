<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataProduk;
use Illuminate\Support\Facades\DB;
use Vinelab\Http\Client as HttpClient;

class DataProdukController extends Controller
{
    public function home()
    {
        $client = new HttpClient;
        $response = $client->get('http://localhost/utsci/api/DataProduk');
        $produk = collect(json_decode($response->content(), true))->collapse()->all();
        return view('produk.index', ['produk' => $produk]);
    }

    public function tambah()
    {
        $client = new HttpClient;
        $response = $client->get('http://localhost/utsci/api/DataKategori');
        $kategori = collect(json_decode($response->content(), true))->collapse()->all();
        return view('produk.tambah', ['kategori' => $kategori]);
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'stok' => 'required',
        ]);

        $file = $request->file('foto_produk');

        $produk = new DataProduk;
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori_produk = $request->kategori_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->stok = $request->stok;
        $produk->foto_produk = $file->getClientOriginalName();

        $tujuan_upload = 'uploads';
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $produk->save();
        return redirect('/produk');
    }

    public function detail($id)
    {
        $produk = DB::table('produk')->where('id_produk', $id)->get();
        return view('produk.detail', ['produk' => $produk]);
    }

    public function index()
    {
        $data = DataProduk::all();

        //cek data tidak kosong
        if (count($data) > 0) {
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        //jika data kosong
        else {
            $res['message'] = "Kosong!";
            return response($res);
        }
    }

    //fungsi untuk menampilkan data dari sebuah ID
    public function getId($id)
    {
        $data = DataProduk::where('id_produk', $id)->get();

        //cek jika data ditemukan
        if (count($data) > 0) {
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        //jika data tidak ditemukan
        else {
            $res['message'] = "Gagal!";
            return response($res);
        }
    }

    //fungsi tambah data
    public function create(Request $request)
    {
        $mhs = new DataProduk();
        $mhs->nama_produk = $request->nama_produk;
        $mhs->kategori_produk = $request->kategori_produk;
        $mhs->harga_produk = $request->harga_produk;
        $mhs->stok = $request->stok;

        //jika data berhasil tersimpan
        if ($mhs->save()) {
            $res['message'] = "data berhasil ditambah!";
            $res['value'] = "$mhs";
            return response($res);
        }
    }

    //fungsi untuk mengubah data
    public function update(Request $request, $id)
    {
        $nama_produk = $request->nama_produk;
        $kategori_produk = $request->kategori_produk;
        $harga_produk = $request->harga_produk;
        $stok = $request->stok;

        $mhs = DataProduk::find($id);
        $mhs->nama_produk = $nama_produk;
        $mhs->kategori_produk = $kategori_produk;
        $mhs->harga_produk = $harga_produk;
        $mhs->stok = $stok;

        if ($mhs->save()) {
            $res['message'] = "Data berhasil diubah!";
            $res['value'] = "$mhs";
            return response($res);
        } else {
            $res['message'] = "Gagal!";
            return response($res);
        }
    }

    //fungsi untuk menghapus data
    public function delete($id)
    {
        $mhs = DataProduk::where('id_produk', $id);

        if ($mhs->delete()) {
            $res['message'] = "Data berhasil dihapus";
            return response($res);
        } else {
            $res['message'] = "Gagal";
            return response($res);
        }
    }
}
