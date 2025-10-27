<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PelayananKonsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PelayananConsumenController extends Controller
{

    public function __construct()
    {
        $this->modelPelayananKonsumen = new PelayananKonsumen();
    }

    public function index()
    {
        $stsmGetDataPelayananKons = $this->modelPelayananKonsumen->dataPelayanan();

        return view ('admin.content.pelayananKonsumen.index', compact('stsmGetDataPelayananKons'));
    }

    public function uploadPelayananKonsumen(Request $request)
    {
        // request data and validation
        
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:25',
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
            $file = $request->file('file')->store('filePdf/layananKonsumen');
        }

        $stmtPelayananPost = [
            'judul' => $request->input('judul'),
            'file' => $file,
            'created_at' => DB::raw('NOW()')
        ];
        
        $stmtPelayananKonsumen = $this->modelPelayananKonsumen->pelayananKonsumenPost($stmtPelayananPost);

        if ($stmtPelayananKonsumen) {
            return redirect()->to('/admin/pelayananKonsumen')->with('message', '<script>alert("Berhasil tersimpan, Lihat Review Dibawah...!!");</script>');
        } else {
            return redirect()->to('/admin/pelayananKonsumen')->with('message', '<script>alert("Gagal");</script>');
        }
        
        // if ($stmtDataKreditInput) {
        //     return redirect()->to('/')->with('message', '<script>alert("Berhasil tersimpan, mohon tunggu tim kami menghubungi anda. terimakasih");</script>');
        // } else {
        //     return redirect()->to('/')->with('message', '<script>alert("Gagal");</script>');
        // }

        // $files = $produk->files;
        // //  get file
        // if ($request->hasFile('files')) {
        //     Storage::delete($produk->files);
        //     $files = $request->file('files')->store('img-produk');
        // }
    }

    public function pelayananKonsumenDelete($item)
    {
        // make sure delete function
        $stmtPelayananKonsumenDelete = $this->modelPelayananKonsumen->pelayananKonsumenDelete($item);

        if ($stmtPelayananKonsumenDelete) {
            return redirect()->to('/admin/pelayananKonsumen')->with('message', '<script>alert("Berhasil dihapus");</script>');
        } else {
            return redirect()->to('/admin/pelayananKonsumen')->with('message', '<script>alert("Gagal");</script>');
        }
    }
}
