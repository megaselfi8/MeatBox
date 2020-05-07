<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
	public function index()
	{		
		$data['produk'] = DB::select("SELECT * FROM t_produk");
		return view('admin.produk', $data);
	}

	public function detail($id)
	{
		$data['produk'] = DB::selectOne("SELECT * FROM t_produk WHERE id=?", [$id]);
		return view('admin.detail_produk', $data);
	}

	public function tambah()
	{
		$data['kategori'] = DB::select("SELECT * FROM t_kategori");
		return view('admin.new_produk', $data);
	}

	public function uploadAction(Request $request)
	{
		$method = $request->method();
		if($method == "POST"){
			$directory = 'assets/produk';
			$file = $request->file('file');
			$file->move($directory, $file->getClientOriginalName());

			DB::insert("INSERT INTO t_produk (foto, nama_produk, harga, stock, deskripsi, t_kategori_id) VALUES (?, ?, ?, ?, ?, ?)", [
				$directory."/".$file->getClientOriginalName(),
				$request->input('nama_produk'),
				$request->input('harga'),
				$request->input('stock'),
				$request->input('deskripsi'),
				$request->input('t_kategori_id')
			]);
			return redirect('/produk');

		}else {
			return redirect('/produk');
		}
	}

	public function edit($id)
	{
		$data['produk'] = DB::selectOne("SELECT * FROM t_produk WHERE id=?", [$id]);
		$data['kategori'] = DB::select("SELECT * FROM t_kategori");
		return view('admin.edit_produk', $data);
	}

	public function update(Request $request)
	{
		$method = $request->method();
		if ($method == "POST") {
			if ($request->file('file') == null) {
				DB::update("UPDATE t_produk SET nama_produk=?, harga=?, stock=?, deskripsi=?, t_kategori_id=? WHERE id=?", [
					$request->input('nama_produk'),
					$request->input('harga'),
					$request->input('stock'),
					$request->input('deskripsi'),
					$request->input('t_kategori_id'),
					$request->input('id')
				]);
			}else {
				$directory = 'assets/produk';
				$file = $request->file('file');
				$file->move($directory, $file->getClientOriginalName());

				DB::update("UPDATE t_produk SET foto=?, nama_produk=?, harga=?, stock=?, deskripsi=?, t_kategori_id=? WHERE id=?", [
					$directory."/".$file->getClientOriginalName(),
					$request->input('nama_produk'),
					$request->input('harga'),
					$request->input('stock'),
					$request->input('deskripsi'),
					$request->input('t_kategori_id'),
					$request->input('id')
				]);
			}
			return redirect('/produk');

		}else {
			return redirect('/produk');
		}
	}

	public function delete($id)
	{
		DB::delete("DELETE FROM t_produk WHERE id=?", [$id]);
		return redirect('/produk');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;

		$data['produk'] = DB::table('t_produk')
		->where('nama_produk','like',"%".$cari."%")
		->paginate();

		return view('admin.produk', $data);
	}

}
