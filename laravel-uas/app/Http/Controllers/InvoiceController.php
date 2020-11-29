<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Support\Facades\DB;
use Vinelab\Http\Client as HttpClient;

class InvoiceController extends Controller
{
    public function home()
    {
        $client = new HttpClient;
        $response = $client->get('http://localhost/utsci/api/DataInvoice');
        $invoice = collect(json_decode($response->content(), true))->collapse()->all();
        return view('invoice.index', ['invoice' => $invoice]);
    }

    public function detail($id)
    {
        $invoice = DB::table('invoice')->where('id_invoice', $id)->get();
        $pesanan = DB::table('pesanan')->where('id_invoice', $id)->get();
        return view('invoice.detail', ['pesanan' => $pesanan]);
    }

    public function hapus($id)
    {
        $invoice = DB::table('invoice')->where('id_invoice', $id)->delete();

        return redirect('/invoice');
    }
}
