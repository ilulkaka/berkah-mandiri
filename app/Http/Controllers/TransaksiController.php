<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function frm_transaksi()
    {
        return view('transaksi/frm_transaksi');
    }
}
