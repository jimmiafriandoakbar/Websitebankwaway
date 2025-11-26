<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VerifikasiDownload;

class VerifikasiDownloadController extends Controller
{
    public function logDownloadLaporan()
    {
        $log = VerifikasiDownload::latest()->get();
        return view('admin.content.logDownload.logDownloadLaporan', compact('log'));
    }
}
