<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TataKelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TataKelolaController extends Controller
{
    public function __construct()
    {
        // api TataKelola model
        $this->modelTataKelola = new TataKelola();
    }

    public function index()
    {
        $stmtTataKelola = $this->modelTataKelola->dataTataKelola();

        return view('admin.content.tataKelola.index', compact('stmtTataKelola'));
    }

    public function uploadTataKelola(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'file' => 'required|max:3000|mimes:pdf'
        ], [
            'judul.required' => 'Kolom judul harus diisi',
            'file.required' => 'file tidak boleh kosong',
            'file.mimes' => 'file harus bertipe pdf',
            'file.max' => 'Ukuran files maksimum adalah 3000 bytes'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('filePdf/tataKelola');
        }

        $stmtTataKelolaPost = [
            'judul' => $request->input('judul'),
            'file' => $file,
            'created_at' => DB::raw('NOW()')
        ];
        
        $stmtTataKelolaCreate = $this->modelTataKelola->insertTataKelola($stmtTataKelolaPost);

        if ($stmtTataKelolaCreate) {
            return redirect()->to('/admin/tataKelola')->with('message', '<script>alert("Berhasil tersimpan, Lihat Review Dibawah...!!");</script>');
        } else {
            return redirect()->to('/admin/tataKelola')->with('message', '<script>alert("Gagal");</script>');
        }
    }

    public function tataKelolaDelete($item)
    {
        // decrypt id
        $id = decrypt($item);

        $stmtTataKelolaDelete = $this->modelTataKelola->deleteTataKelola($id);

        if ($stmtTataKelolaDelete) {
            return redirect()->to('/admin/tataKelola')->with('message', '<script>alert("Berhasil dihapus");</script>');
        } else {
            return redirect()->to('/admin/tataKelola')->with('message', '<script>alert("Gagal");</script>');
        }
    }
}

