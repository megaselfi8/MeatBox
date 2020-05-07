<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminDashboardController extends Controller
{
  public function __construct()
  {
      
  }

  public function index(Request $request)
  {
    if($request->session()->get('s_status') == "active"){
      $data['session'] = array (
        'id'        => $request->session()->get('s_id'),
        'username'  => $request->session()->get('s_username'),
        // 'email'     => $request->session()->get('s_email'),
        // 'password'  => $request->session()->get('s_password'),
        'roole'     => $request->session()->get('s_roole'),
        'status'    => $request->session()->get('s_status')

      );

    //   $data['title'] = "Dashboard - laracms";
    //   $data['nav_menu'] = $this->displayMenu($request);
      return view('admin.dashboard_admin');

    }else {
      return redirect('/login');
    }
  }

  public function signOut(Request $request)
  {
    $request->session()->flush();
    return redirect('/login');
  }
  
}
