<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wbs;

class WbsAdminController extends Controller
{
    public function index(Request $request)
{
    $query = Wbs::query();

    // 🔍 SEARCH
    if ($request->search) {
        $query->where('nama_pelapor', 'like', '%' . $request->search . '%')
              ->orWhere('email', 'like', '%' . $request->search . '%')
              ->orWhere('kriteria', 'like', '%' . $request->search . '%');
    }

    $data = $query->latest()->paginate(10);

    return view('admin-wbs.index-wbs', compact('data'));
}

public function show($id)
{
    $data = Wbs::findOrFail($id);

    return view('admin-wbs.detail-wbs', compact('data'));
}
}