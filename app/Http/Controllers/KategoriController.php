<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
	public function index()
	{
		$kategori = DB::table('t_kategori')->paginate(10);
		return view('admin.kategori',['t_kategori' => $kategori]);
	}

	public function tambah()
	{
		return view('admin.new_kategori');
	}

	public function store(Request $request)
	{
		DB::table('t_kategori')->insert([
		'nama_kategori' => $request->nama_kategori,
		]);
		
		return redirect('/kategori');
	}

	public function edit($id)
	{
		$kategori = DB::table('t_kategori')->where('id',$id)->get();
		
		return view('admin.edit_kategori',['kategori' => $kategori]);
	}

	public function update(Request $request)
	{
		DB::table('t_kategori')->where('id',$request->id)->update([
			'nama_kategori' => $request->nama_kategori
		]);
		
		return redirect('/kategori');
	}

	public function hapus($id)
	{
		DB::table('t_kategori')->where('id',$id)->delete();
		return redirect('/kategori');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;

		$kategori = DB::table('t_kategori')
		->where('nama_kategori','like',"%".$cari."%")
		->paginate();

		return view('admin.kategori',['t_kategori' => $kategori]);
	}

}
