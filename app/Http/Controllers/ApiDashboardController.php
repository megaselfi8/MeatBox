<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiDashboardController extends Controller
{
    //
    public function __construct(){}

    public function index()
    {
        return view('admin.grafik');
    }

    public function getLaporanPendapatan(Request $request)
    {
        $result = DB::select("SELECT DATE_FORMAT(periode, '%Y-%m') AS tgl, SUM(pendapatan) AS total
        FROM t_laporan_pendapatan GROUP BY DATE_FORMAT(periode, '%Y-%m') ORDER BY periode ASC", []);
        return response($result);
    }

}
