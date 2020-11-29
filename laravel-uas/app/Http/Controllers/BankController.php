<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use Illuminate\Support\Facades\DB;
use Vinelab\Http\Client as HttpClient;

class BankController extends Controller
{
    public function home()
    {
        $client = new HttpClient;
        $response = $client->get('http://localhost/utsci/api/DataBank');
        $bank = collect(json_decode($response->content(), true))->collapse()->all();
        return view('bank.index', ['bank' => $bank]);
    }

    public function tambah()
    {
        return view('bank.tambah');
    }

    public function simpan(Request $request)
    {
        DB::table('bank')->insert([
            'nama_bank' => $request->nama_bank,
            'nomer_rekening' => $request->nomer_rekening
        ]);
        return redirect('/bank');
    }

    public function detail($id)
    {
        $bank = DB::table('bank')->where('id_bank', $id)->get();
        return view('bank.detail', ['bank' => $bank]);
    }

    public function edit($id)
    {
        $bank = DB::table('bank')->where('id_bank', $id)->get();
        return view('bank.edit', ['bank' => $bank]);
    }

    public function update(Request $request)
    {
        DB::table('bank')->where('id_bank', $request->id)->update([
            'nama_bank' => $request->nama_bank,
            'nomer_rekening' => $request->nomer_rekening
        ]);
        return redirect('/bank');
    }

    public function hapus($id)
    {
        $bank = DB::table('bank')->where('id_bank', $id)->delete();

        return redirect('/bank');
    }

    public function index()
    {
        $data = Bank::all();

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
        $data = Bank::where('id_bank', $id)->get();

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
        $mhs = new Bank();
        $mhs->nama_bank = $request->nama_bank;
        $mhs->nomer_rekening = $request->nomer_rekening;

        //jika data berhasil tersimpan
        if ($mhs->save()) {
            $res['message'] = "data berhasil ditambah!";
            $res['value'] = "$mhs";
            return response($res);
        }
    }

    //fungsi untuk mengubah data
    public function update1(Request $request, $id)
    {
        $nama_bank = $request->nama_bank;
        $nomer_rekening = $request->nomer_rekening;

        $mhs = Bank::find($id);
        $mhs->nama_bank = $nama_bank;
        $mhs->nomer_rekening = $nomer_rekening;

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
        $mhs = Bank::where('id_bank', $id);

        if ($mhs->delete()) {
            $res['message'] = "Data berhasil dihapus";
            return response($res);
        } else {
            $res['message'] = "Gagal";
            return response($res);
        }
    }
}
