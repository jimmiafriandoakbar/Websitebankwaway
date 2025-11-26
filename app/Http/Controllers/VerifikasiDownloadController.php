<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerifikasiDownload;

class VerifikasiDownloadController extends Controller
{
   public function store(Request $request)
{
    VerifikasiDownload::create([
        'nama'      => $request->nama,
        'email'     => $request->email,
        'no_telp'   => $request->no_telp,
        'instansi'  => $request->instansi,
        'keperluan' => $request->keperluan,
        'agree'     => $request->agree ? 1 : 0,
        'file'      => $request->file,
        'ip_address'=> $request->ip(),
    ]);

    return response()->json(['success' => true]);
}



}
