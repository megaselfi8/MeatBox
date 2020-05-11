<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\URL;

class InvoiceController extends Controller
{
    public function index($t_nota_id){
        $data['title']  = "MeatBox | Invoice";
        $data['nota'] = DB::selectOne("SELECT * FROM t_nota WHERE id=?", [$t_nota_id]);
        $data['cart'] = DB::select("SELECT * FROM t_keranjang WHERE t_nota_id=?", [$t_nota_id]);
        return view('invoice', $data);
    }

    public function previewPdf($t_nota_id){
        $data['title'] = "MeatBox | Invoice";
        $data['baseurl'] = URL::to("/");
        $data['nota'] = DB::selectOne("SELECT * FROM t_nota WHERE id=?", [$t_nota_id]);
        $data['cart'] = DB::select("SELECT * FROM t_keranjang WHERE t_nota_id=?", [$t_nota_id]);
        $pdf = PDF::loadview('invoice_print', $data);
        return $pdf->stream();
    }

    public function printPdf($t_nota_id){
        $data['title'] = "MeatBox | Invoice";
        $data['nota'] = DB::selectOne("SELECT * FROM t_nota WHERE id=?", [$t_nota_id]);
        $data['cart'] = DB::select("SELECT * FROM t_keranjang WHERE t_nota_id=?", [$t_nota_id]);
        $pdf = PDF::loadview('invoice_print', $data);
        return $pdf->download('struk-nota.pdf');
    }
}