<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller
{
    //fungsi index digunakan untuk menampilkan semua data Bank
    public function index()
    {
        $data = Bank::all();

        //cek data tid_bankak kosong
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

    //fungsi untuk menampilkan data dari sebuah id_bank
    public function getid_bank($id_bank)
    {
        $data = Bank::where('id_bank', $id_bank)->get();

        //cek jika data ditemukan
        if (count($data) > 0) {
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        //jika data tid_bankak ditemukan
        else {
            $res['message'] = "Gagal!";
            return response($res);
        }
    }

    //fungsi tambah data
    public function create(Request $request)
    {
        $bnk = new Bank();
        $bnk->nama_bank = $request->nama_bank;
        $bnk->nomer_rekening = $request->nomer_rekening;

        //jika data berhasil tersimpan
        if ($bnk->save()) {
            $res['message'] = "data berhasil ditambah!";
            $res['value'] = "$bnk";
            return response($res);
        }
    }

    //fungsi untuk mengubah data
    public function update(Request $request, $id_bank)
    {
        $nama_bank = $request->nama_bank;
        $nomer_rekening = $request->nomer_rekening;

        $bnk = Bank::find($id_bank);
        $bnk->nama_bank = $nama_bank;
        $bnk->nomer_rekening = $nomer_rekening;

        if ($bnk->save()) {
            $res['message'] = "Data berhasil diubah!";
            $res['value'] = "$bnk";
            return response($res);
        } else {
            $res['message'] = "Gagal!";
            return response($res);
        }
    }

    //fungsi untuk menghapus data
    public function delete($id_bank)
    {
        $bnk = Bank::where('id_bank', $id_bank);

        if ($bnk->delete()) {
            $res['message'] = "Data berhasil dihapus";
            return response($res);
        } else {
            $res['message'] = "Gagal";
            return response($res);
        }
    }
}
