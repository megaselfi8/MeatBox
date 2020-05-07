<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\ModelUser;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
  public function __construct() {}

  public function login()
	{
		return view('login');
	}

  public function loginAction(Request $request){
    $method =$request->method();
    if($method == "POST"){
      $result =DB::selectOne("SELECT u.id, u.username, u.status, r.nama AS roole FROM t_user AS u RIGHT JOIN t_role AS r
      ON u.t_role_id = r.id WHERE u.email=? AND u.password=?",[
        $request->input('email'),
        $request->input('password')
      ]);

      if($result != null){
        $request->session()->put('s_id', $result->id);
        $request->session()->put('s_username', $result->username);
        $request->session()->put('s_status', $result->status);
        $request->session()->put('s_roole', $result->roole);

        return redirect('/dashboard');
      }else{
        return redirect('/login');
      }

    }else{
      return redirect('/login');
    }
  }

}