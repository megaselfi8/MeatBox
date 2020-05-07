<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListProdukController extends Controller
{
  public function index(Request $request)
	{		
    $data['cart'] = DB::selectOne("SELECT COUNT(*) AS jumlah_keranjang FROM t_nota WHERE id_customer=? AND status_transaksi='pending'", [$request->session()->get('s_id')]);
    $data['produk'] = DB::select("SELECT p.id, p.nama_produk, p.harga, p.foto, p.stock, k.nama_kategori AS kategori
     FROM t_produk AS p INNER JOIN t_kategori AS k ON p.t_kategori_id=k.id", []);
    return view('list-produk', $data);
  }
  
}
