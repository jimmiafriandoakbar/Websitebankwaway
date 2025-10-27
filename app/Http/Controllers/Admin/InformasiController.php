<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InformasiController extends Controller
{
    public function __construct()
    {
        $this->modelInformasi = new Informasi();
    }

    public function index()
    {
        $stmtDataInformasi =  $this->modelInformasi->getInformasi();

        return view('admin/content/informasi/index', compact('stmtDataInformasi'));
    }

    public function uploadInformasi(Request $request)
    {
        // validation
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'deskripsi' => 'required',
            'file' => 'max:10000|mimes:pdf'
        ], [
            'judul.max' => 'Kolom judul maksimal 255 karakter',
            'judul.required' => 'Kolom judul harus diisi',
            'file.mimes' => 'file harus bertipe pdf',
            'cover.required' => 'cover tidak boleh kosong',
            'cover.mimes' => 'cover harus bertipe jpeg,png,jpg,gif,svg',
            'cover.max' => 'Ukuran cover maksimum adalah 2048 bytes',
            'file.max' => 'Ukuran files maksimum adalah 12000 bytes',
            'deskripsi.required' => 'Kolom tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // pengecekkan file (not null)
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->store('assetGuest/img/Informasi');
        }

        // pengecekkan jika file kosong (nullable)
        if ($request->hasFile('file') && $request->file('file') != null) {
            $file = $request->file('file')->store('filePdf/informasi');
        } else {
            $file = null;
        }

        $stmtInformasiPost = [
            'judul' => $request->input('judul'),
            'cover' => $cover,
            'deskripsi' => $request->input('deskripsi'),
            'file' => $file,
            'created_at' => now()
        ];

        // insert by model Informasi
        $stmtInformasi = $this->modelInformasi->informasiPost($stmtInformasiPost);

        if ($stmtInformasi) {
            return redirect()->to('/admin/informasi')->with('message', '<script>alert("Berhasil tersimpan, Lihat Review Dibawah...!!");</script>');
        } else {
            return redirect()->to('/admin/informasi')->with('message', '<script>alert("Gagal tersimpan, Lihat Review Dibawah...!!");</script>');
        }
    }

    public function informasiDelete($item)
    {
        // delete by model Informasi
        $stmtInformasi = $this->modelInformasi->informasiDelete($item);

        if ($stmtInformasi) {
            return redirect()->to('/admin/informasi')->with('message', '<script>alert("Berhasil terhapus, Lihat Review Dibawah...!!");</script>');
        } else {
            return redirect()->to('/admin/informasi')->with('message', '<script>alert("Gagal terhapus, Lihat Review Dibawah...!!");</script>');
        }
    }
}
