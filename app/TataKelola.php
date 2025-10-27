<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TataKelola extends Model
{
    protected $table = 'tata_kelolas';

    public function dataTataKelola()
    {
        // stmt data kelola order by id desc
        $stmtTataKelola = DB::table('tata_kelolas')
                                ->orderBy('id', 'desc')
                                ->get();

        return $stmtTataKelola;
    }

    public function insertTataKelola($stmtTataKelolaPost)
    {
        // insert data kelola
        $stmtTataKelolaCreate = DB::table('tata_kelolas')
                                    ->insert($stmtTataKelolaPost);

        return $stmtTataKelolaCreate;
    }

    public function deleteTataKelola($id)
    {
        // delete data kelola
        $stmtTataKelolaDelete = DB::table('tata_kelolas')
                                    ->where('id', $id)
                                    ->first();

        if ($stmtTataKelolaDelete) {
            // delete file di dalam direktori storage jika ada
            if (Storage::exists($stmtTataKelolaDelete->file)) {
                Storage::delete($stmtTataKelolaDelete->file);
            }

            // delete data dari tabel tata_kelolas
            $stmtTataKelolaDelete = DB::table('tata_kelolas')
                                        ->where('id', $id)
                                        ->delete();

            if ($stmtTataKelolaDelete) {
                return redirect()->back()->with('success', 'Data Tata Kelola berhasil dihapus');
            }
        }

        return $stmtTataKelolaDelete;
    }
}
