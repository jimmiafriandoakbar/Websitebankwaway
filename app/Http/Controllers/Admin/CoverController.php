<?php

namespace App\Http\Controllers\Admin;

use App\Cover;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoverController extends Controller
{
    public function __construct()
    {
        $this->modelCover = new Cover();
    }

    public function index()
    {
        $stmtCover = DB::table('cover')->orderBy('id', 'desc')->get();
        
        return view('admin.content.cover.index', compact('stmtCover'));
    }

    public function edit($data)
    {
        // make sure delete function
        $stmtCoverEdit = $this->modelCover->coverEdit($data);

        return view('admin.content.cover.edit', compact('stmtCoverEdit'));
    }

    public function update(Request $request, $data)
    {
        $stmtCoverUpdate = $this->modelCover->coverUpdate($request, $data);
        return $stmtCoverUpdate;

        if ($stmtCoverUpdate) {
            return redirect()->to('/admin/cover')->with('message', '<script>alert("Berhasil tersimpan");</script>');
        } else {
            return redirect()->to('/admin/cover')->with('message', '<script>alert("Gagal tersimpan");</script>');
        }
    }
}
