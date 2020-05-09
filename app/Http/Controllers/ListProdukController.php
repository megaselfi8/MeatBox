<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListProdukController extends Controller
{
  public function index(Request $request)
	{
    $data['title']  = "MeatBox | Produk";
    $data['cart'] = DB::selectOne("SELECT COUNT(*) AS jumlah_keranjang FROM t_nota WHERE id_customer=? AND status_transaksi='pending'", [$request->session()->get('s_id')]);
    $data['produk'] = DB::select("SELECT p.id, p.nama_produk, p.harga, p.foto, p.stock, k.nama_kategori AS kategori
     FROM t_produk AS p INNER JOIN t_kategori AS k ON p.t_kategori_id=k.id", []);
    return view('list-produk', $data);
  }

  public function searchProduk(Request $request)
  {
    $result = DB::table('t_produk')
    ->select('t_produk.id', 't_produk.nama_produk', 't_produk.harga', 't_produk.foto', 't_produk.stock', 't_kategori.nama_kategori AS kategori')
    ->join('t_kategori', 't_produk.t_kategori_id', '=', 't_kategori.id')
    ->where('t_produk.nama_produk', 'like', "%". $request->input('keyword') ."%")
    ->get();
    return response($result);
  }
  
  // public function cari(Request $request)
	// {
	// 	$cari = $request->cari;

	// 	$data['produk'] = DB::table('t_produk')
	// 	->where('nama_produk','like',"%".$cari."%")
	// 	->paginate();

	// 	return view('list-produk', $data);
  // }
  
}
