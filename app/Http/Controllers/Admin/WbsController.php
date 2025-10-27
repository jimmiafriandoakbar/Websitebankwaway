<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WbsController extends Controller
{
    public function index()
    {
        $data = DB::table('wbs')->orderBy('id', 'asc')->get();
        // Jika ingin mengirim data ke view, bisa ditambahkan di sini
        return view('admin.content.wbs.index', compact('data'));
    }
    
    public function wbsDetail($e)
    {
        $id = decrypt($e);
        $data = DB::table('wbs')
            ->where('id', $id)
            ->first();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('admin.content.wbs.pdf', compact('data')));
        $mpdf->Output();
    }
}
