<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;

class MapelController extends Controller
{
    //fungsi index digunakan untuk menampilkan semua data mapel
    public function index()
    {
        $data = Mapel::all();

        //cek data tidak kosong
        if (count($data) > 0) {
            $res['message'] = "Sucess!";
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
    public function getId($id_mapel)
    {
        $data = Mapel::where('id_mapel', $id_mapel)->get();

        //cek jika data ditemukan
        if (count($data) > 0) {
            $res['message'] = "Sucess!";
            $res['values'] = $data;
            return response($res);
        }
        //jika data kosong
        else {
            $res['message'] = "Gagal!";
            return response($res);
        }
    }

    //fungsi tambah data
    public function create(Request $request)
    {
        $mpl = new Mapel();
        $mpl->kode_mapel = $request->kode_mapel;
        $mpl->nama_mapel = $request->nama_mapel;
        $mpl->deskripsi = $request->deskripsi;
        $mpl->image = $request->image;

        //jika data berhasil tersimpan
        if ($mpl->save()) {
            $res['message'] = "Data Berhasil ditambah!";
            $res['values'] = $mpl;
            return response($res);
        }
    }

    //fungsi untuk mengubah data
    public function update(Request $request, $id_mapel)
    {
        $kode_mapel = $request->kode_mapel;
        $nama_mapel = $request->nama_mapel;
        $deskripsi = $request->deskripsi;
        $image = $request->image;

        $mpl = Mapel::find($id_mapel);
        $mpl->kode_mapel = $kode_mapel;
        $mpl->nama_mapel = $nama_mapel;
        $mpl->deskripsi = $deskripsi;
        $mpl->image = $image;

        if ($mpl->save()) {
            $res['message'] = "Data berhasil diubah!";
            $res['value'] = "$mpl";
            return response($res);
        } else {
            $res['message'] = "Gagal!";
            return response($res);
        }
    }

    //fungsi untuk menghapus data
    public function delete($id_mapel)
    {
        $mpl = Mapel::where('id_mapel', $id_mapel);

        if ($mpl->delete()) {
            $res['message'] = "Data berhasil dihapus!";
            return response($res);
        } else {
            $res['message'] = "Gagal!";
            return response($res);
        }
    }
}
