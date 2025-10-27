<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Publikasi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PublikasiController extends Controller
{
    public function __construct()
    {
        $this->modelPublikasi = new Publikasi();
    }

    public function index()
    {
        $stsmGetDataPublikasi = $this->modelPublikasi->dataPublikasi();
        // dd($stsmGetDataPublikasi);

        return view('admin.content.publikasi.index', compact('stsmGetDataPublikasi'));
    }

    // upload publikasi
    public function uploadPublikasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'file' => 'required|max:12000|mimes:pdf'
        ], [
            'judul.required' => 'Kolom judul harus diisi',
            'file.required' => 'file tidak boleh kosong',
            'file.mimes' => 'file harus bertipe pdf',
            'file.max' => 'Ukuran files maksimum adalah 12000 bytes'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('filePdf/publikasi');
        }

        $stmtPublikasiPost = [
            'judul' => $request->input('judul'),
            'file' => $file,
            'created_at' => DB::raw('NOW()')
        ];

        $stmtPublikasiCreate = $this->modelPublikasi->createPublikasi($stmtPublikasiPost);

        if ($stmtPublikasiCreate) {
            Alert::toast('Success Toast', 'success');
            return redirect()->to('/admin/publikasi')->with('message', '<script>alert("Berhasil tersimpan, Lihat Review Dibawah...!!");</script>');
        } else {
            return redirect()->to('/admin/publikasi')->with('message', '<script>alert("Gagal");</script>');
        }
    }

    public function publikasiDelete($item)
    {
        // make sure delete function
        $stmtPublikasiDelete = $this->modelPublikasi->publikasiDelete($item);

        if ($stmtPublikasiDelete) {
            return redirect()->to('/admin/publikasi')->with('message', '<script>alert("Berhasil dihapus");</script>');
        } else {
            return redirect()->to('/admin/publikasi')->with('message', '<script>alert("Gagal");</script>');
        }
    }
}
