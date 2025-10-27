<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Karir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KarirController extends Controller
{
    public function __construct()
    {
        $this->modelKarir = new Karir();
    }

    public function index()
    {
        // data karir dari database asc make query bulder
        $stmtDataKarir = DB::table('karirs')->orderBy('id', 'asc')->get();

        return view('admin.content.karir.index', compact('stmtDataKarir'));
    }

    public function uploadKarir(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'file' => 'required|max:12000|mimes:pdf'
        ], [
            'judul.max' => 'Kolom judul maksimal 255 karakter',
            'judul.required' => 'Kolom judul harus diisi',
            'file.required' => 'file tidak boleh kosong',
            'file.mimes' => 'file harus bertipe pdf',
            'file.max' => 'Ukuran files maksimum adalah 12000 bytes'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('filePdf/karir');
        }

        $stmtKarirPost = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'), // tambahin ini di viewnya, udah gan
            'file' => $file,
            'created_at' => DB::raw('NOW()')
        ];

        // insert by model Karir
        $stmtKarir = $this->modelKarir->karirPost($stmtKarirPost);

        if ($stmtKarir) {
            return redirect()->to('/admin/karir')->with('message', '<script>alert("Berhasil tersimpan, Lihat Review Dibawah...!!");</script>');
        } else {
            return redirect()->to('/admin/karir')->with('message', '<script>alert("Gagal");</script>');
        }
    }

    public function karirDelete($item)
    {
        // make sure delete function
        $stmtKarirDelete = $this->modelKarir->karirDelete($item);

        if ($stmtKarirDelete) {
            return redirect()->route('admin.karir')->with('success', 'Data karir berhasil dihapus');
        } else {
            return 'gagal';
        }
    }
}
