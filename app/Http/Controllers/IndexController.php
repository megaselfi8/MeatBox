<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
  public function index(Request $request)
	{
    $data['title']  = "MeatBox";
    $data['cart'] = DB::selectOne("SELECT COUNT(*) AS jumlah_keranjang FROM t_nota WHERE id_customer=? AND status_transaksi='pending'", [$request->session()->get('s_id')]);
    return view('index', $data);
  }
  
}
