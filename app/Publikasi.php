<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Publikasi extends Model
{
    protected $table = 'publikasis';

    public function dataPublikasi()
    {
        // get data publikasi desc query builder
        $stmtDataPublikasi = DB::table('publikasis')
                                ->orderBy('id', 'desc')
                                ->get();

        return $stmtDataPublikasi;
    }

    public function createPublikasi($stmtPublikasiPost)
    {
        // insert data publikasi query builder
        $stmtCreatePublikasi = DB::table('publikasis')
                                ->insert($stmtPublikasiPost);

        return $stmtCreatePublikasi;
    }

    public function publikasiDelete($item)
    {
        // // decrypt id
        $id = decrypt($item);
        
        $stmtDeletePublikasi = DB::table('publikasis')
                                ->where('id', $id)
                                ->first();

        if ($stmtDeletePublikasi) {
            $file_path = $stmtDeletePublikasi->file;

            // Hapus file di dalam direktori storage jika ada
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }

            // Hapus data dari tabel publikasi
            $stmtDeletePublikasi = DB::table('publikasis')
                                    ->where('id', $id)
                                    ->delete();

            if ($stmtDeletePublikasi) {
                return redirect()->back()->with('success', 'Data publikasi berhasil dihapus');
            }
        }

        return redirect()->back()->with('error', 'Data publikasi tidak ditemukan atau gagal dihapus');

    }
}
