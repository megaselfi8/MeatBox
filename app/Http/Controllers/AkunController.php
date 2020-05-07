<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
	public function index() {
		$data['akun'] = DB::select("SELECT * FROM t_user");
		return view('admin.akun', $data);
	}

	// public function detail($id)
	// {
	// 	$data['akun'] = DB::selectOne("SELECT * FROM t_user WHERE id=?", [$id]);
	// 	return view('admin.detail_produk', $data);
	// }

	public function register()
	{
		return view('register');
	}

	public function uploadAction(Request $request)
	{
		$method = $request->method();
		if($method == "POST"){
			// $directory = 'assets/akun';
			// $file = $request->file('file');
			// $file->move($directory, $file->getClientOriginalName());

			DB::insert("INSERT INTO t_user (username, password, email, no_hp, alamat, status, t_role_id) VALUES (?, ?, ?, ?, ?, ?, ?)", [
				// $directory."/".$file->getClientOriginalName(),
				$request->input('username'),
				$request->input('password'),
				$request->input('email'),
				$request->input('no_hp'),
				$request->input('alamat'),
				$request->input('status'),
				$request->input('role_id')
			]);
			return redirect('/login');

		}else {
			return redirect('/login');
		}
	}

	public function edit($id)
	{
		$data['akun'] = DB::selectOne("SELECT * FROM t_user WHERE id=?", [$id]);
		// return view('admin.edit_produk', $data);
		return view('editakun', $data);
	}

	public function update(Request $request)
	{
		$method = $request->method();
		if ($method == "POST") {
			if ($request->file('file') == null) {
				DB::update("UPDATE t_user SET username=?, pass=?, email=?, no_hp=?, alamat=?, stats=? WHERE id=?", [
					$request->input('username'),
					$request->input('password'),
					$request->input('email'),
					$request->input('no_hp'),
					$request->input('alamat'),
					$request->input('status'),
					$request->input('id')
				]);

			}else {
				$directory = 'assets/akun';
				$file = $request->file('file');
				$file->move($directory, $file->getClientOriginalName());

				DB::update("UPDATE t_user SET foto=?, username=?, pass=?, email=?, no_hp=?, alamat=?, stats=? WHERE id=?", [
					$directory."/".$file->getClientOriginalName(),
					$request->input('username'),
					$request->input('password'),
					$request->input('email'),
					$request->input('no_hp'),
					$request->input('alamat'),
					$request->input('status'),
					$request->input('id')
				]);
			}
			return redirect('/akun');
		}else {
			return redirect('/akun');
		}
	}


	// public function update(Request $request)
	// {
	// 	DB::table('t_akun')->where('id',$request->id)->update([
	// 		'id' => $request->id,
	// 		'username' => $request->username,
	// 		'password' => $request->password,
	// 		'email' => $request->email,
	// 		'no_hp' => $request->no_hp,
	// 		'alamat' => $request->alamat,
	// 		'status' => $request->status,
	// 		'akses' => $request->akses
	// 	]);
	// 	return redirect('/akun');
	// }

	// public function hapus($id)
	// {
	// 	DB::table('t_user')->where('id',$id)->delete();
	// 	return redirect('/akun');
	// }

	public function delete($id)
	{
		DB::delete("DELETE FROM t_user WHERE id=?", [$id]);
		return redirect('/akun');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;

		$data['akun'] = DB::table('t_user')
		->where('username','like',"%".$cari."%")
		->paginate();

		return view('admin.akun', $data);
	}

}



