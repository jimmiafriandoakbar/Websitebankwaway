<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekeningBaruController extends Controller
{
    public function dataRekeningBaru()
    {
        $stmtDataRekenignBaru = DB::table('pendaftaranrekening')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.content.dataRekeningBaru', compact('stmtDataRekenignBaru'));
    }

    public function detailDataRekeningBaru($data)
    {
        $id = decrypt($data);

        $stmtDetailDataRekeningBaru = DB::table('pendaftaranrekening')->where('id', $id)->get();
        // dd($data);

        return view('admin.content.detailDataRekeningBaru', compact('stmtDetailDataRekeningBaru'));
    }
}
