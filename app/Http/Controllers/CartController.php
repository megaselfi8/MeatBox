<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
  public function cart(Request $request)
  {
    $nota = DB::selectOne("SELECT * FROM t_nota WHERE status_transaksi='pending' AND jenis_faktur='penjualan' AND id_customer=?", [
      $request->session()->get('s_id')
    ]);
    
    if ($nota != null) {
      // echo "Nota Exist";
      // echo "Produk ID: " . $request->get('t_produk_id');
      if ($request->get('t_produk_id') == null) {
        $cartExist['cart'] = DB::select("SELECT * FROM t_keranjang WHERE t_nota_id=?", [$nota->id]);
        $nota = (object)array_merge((array)$nota, (array)$cartExist);
      }else {
        $cart = DB::selectOne("SELECT COUNT(*) AS jumlah_produk_dibeli FROM t_keranjang WHERE t_nota_id=? AND t_produk_id=?", [
          $nota->id,
          $request->get('t_produk_id')
        ]);

        if ($cart->jumlah_produk_dibeli == 0) {
          $produk = DB::selectOne("SELECT id, nama_produk, harga FROM t_produk WHERE id=?", [
            $request->get('t_produk_id')
          ]);

          DB::insert("INSERT INTO t_keranjang (nama_produk, harga, kuantitas, subtotal, t_nota_id, t_produk_id) VALUES (?, ?, ?, ?, ?, ?)", [
            $produk->nama_produk, $produk->harga, 1, $produk->harga * 1,
            $nota->id, $request->get('t_produk_id')
          ]);

          $cartExist['cart'] = DB::select("SELECT * FROM t_keranjang WHERE t_nota_id=?", [$nota->id]);
          $nota = (object)array_merge((array)$nota, (array)$cartExist);
        }else {
          $cartExist['cart'] = DB::select("SELECT * FROM t_keranjang WHERE t_nota_id=?", [$nota->id]);
          $nota = (object)array_merge((array)$nota, (array)$cartExist);
        }
      }

    }else {
      // echo "Nota Not Exist";
      DB::insert("INSERT INTO t_nota (id_customer, nama_customer, total_pembelian, ppn, jumlah_tagihan, jenis_faktur, status_transaksi) VALUES (?, ?, 0.00, 10.00, 0.00, 'penjualan', 'pending')", [
        $request->session()->get('s_id'),
        $request->session()->get('s_username')
      ]);
      return redirect('/cart?produkId='. $request->get('t_produk_id'));
    }

    $data['title']  = "MeatBox | Cart";
    $data['cart'] = DB::selectOne("SELECT COUNT(*) AS jumlah_keranjang FROM t_nota WHERE id_customer=? AND status_transaksi='pending'", [$request->session()->get('s_id')]);
    $data['nota'] = $nota;
    $data['nota_tag'] = $this->hitung($request);
    $data['tanggal'] = date('d-m-Y H:i:s');
    return view('cart', $data);
  }

  public function checkout($t_nota_id)
  {
    $tgl = date('Y-m-d H:i:s');
    DB::update("UPDATE t_nota SET tgl_pembelian=?, status_transaksi='success' WHERE id=?", [$tgl, $t_nota_id]);
    return redirect('/invoice/'. $t_nota_id);
  }

  public function plusQty(Request $request)
  {
    $cart = DB::selectOne("SELECT kuantitas FROM t_keranjang WHERE t_produk_id=?", [$request->get('t_produk_id')]);
    $qty = $cart->kuantitas + 1;
    $produk = DB::selectOne("SELECT id, nama_produk, harga FROM t_produk WHERE id=?", [
        $request->get('t_produk_id')
    ]);
    
    $kuantitas = DB::update("UPDATE t_keranjang SET kuantitas=?, subtotal=? WHERE t_produk_id=?", [
        $qty, $qty * $produk->harga,
        $request->get('t_produk_id')
    ]);
    
    return redirect('/cart');
  }

  public function minQty(Request $request)
  {
    $cart = DB::selectOne("SELECT kuantitas FROM t_keranjang WHERE t_produk_id=?", [$request->get('t_produk_id')]);
    $qty = $cart->kuantitas - 1;
    $produk = DB::selectOne("SELECT id, nama_produk, harga FROM t_produk WHERE id=?", [
        $request->get('t_produk_id')
    ]);
    
    $kuantitas = DB::update("UPDATE t_keranjang SET kuantitas=?, subtotal=? WHERE t_produk_id=?", [
        $qty, $qty * $produk->harga,
        $request->get('t_produk_id')
    ]);
    
    return redirect('/cart');
  }

  public function hitung(Request $request){
    $notax = DB::selectOne("SELECT * FROM t_nota WHERE status_transaksi='pending' AND jenis_faktur='penjualan' AND id_customer=?", [
        $request->session()->get('s_id')
    ]);
    $ker = DB::selectOne("SELECT SUM(subtotal) AS total FROM t_keranjang WHERE t_nota_id=?", [$notax->id]);
    $subtotal = $ker->total;
    $pajak = $subtotal * 0.1;
    $tagihan = $subtotal + $pajak;
    $total = DB::update("UPDATE t_nota SET total_pembelian=?, jumlah_tagihan=? WHERE id=?", [
        $subtotal, $tagihan,
        $notax->id
    ]);
    $notaTag = DB::selectOne("SELECT total_pembelian, ppn, jumlah_tagihan FROM t_nota WHERE status_transaksi='pending' AND jenis_faktur='penjualan' 
    AND id_customer=?", [
        $request->session()->get('s_id')
    ]);

    return $notaTag;
}

}
