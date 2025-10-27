<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PelayananKonsumen extends Model
{
    protected $table = ['pelayanan_konsumens'] ;

    public function dataPelayanan()
    {
        $stmtDataPelayanan = DB::table('pelayanan_konsumens')->get();

        return $stmtDataPelayanan;
    }

    public function pelayananKonsumenPost($stmtPelayananPost)
    {
        $stmtCreatePelayanan = DB::table('pelayanan_konsumens')
                                ->insert($stmtPelayananPost);

        return $stmtCreatePelayanan;
    }

    public function pelayananKonsumenDelete($item)
    {
        $id = decrypt($item);
        $stmtDeletePelayanan = DB::table('pelayanan_konsumens')
                                        ->where('id', $id)
                                        ->first();

        if ($stmtDeletePelayanan) {
            $file_path = $stmtDeletePelayanan->file;

            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }

            $stmtDeletePelayanan = DB::table('pelayanan_konsumens')
                                    ->where('id', $id)
                                    ->delete();

            if ($stmtDeletePelayanan) {
                return redirect()->back()->with('success', 'Data pelayanan berhasil dihapus');
            }
        }

        return redirect()->back()->with('error', 'Data publikasi tidak ditemukan atau gagal dihapus');
    }
}
