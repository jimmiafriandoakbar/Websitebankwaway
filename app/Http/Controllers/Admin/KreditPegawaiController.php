<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class KreditPegawaiController extends Controller
{
    public function index()
    {
        $datas = DB::table('kredit_pegawai')->orderBy('id', 'desc')->get();

        return view('admin/content/kreditPegawai.index', compact('datas'));
    }

    public function findId($data)
    {
        $idKaryawan = Crypt::decryptString($data);

        $data = DB::table('kredit_pegawai')->where('id', $idKaryawan)->first();
    }

    public function exportPdf($data)
    {
        $idKaryawan = Crypt::decryptString($data);
        $data = DB::table('kredit_pegawai')->where('id', $idKaryawan)->first();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('admin.content.kreditPegawai.pdf', compact('data')));
        $mpdf->Output();
    }
}
