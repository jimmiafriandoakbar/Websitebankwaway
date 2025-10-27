<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Karir extends Model
{
    protected $table = 'karirs';

    public function karirPost($stmtKarirPost)
    {
        // insert data karir
        $stmtCreatekarir = DB::table('karirs')
                                ->insert($stmtKarirPost);

        return $stmtCreatekarir;
    }

    public function karirDelete($item)
    {
        $id = decrypt($item);
        $stmtDeleteKarir = DB::table('karirs')
                                        ->where('id', $id)
                                        ->first();

        if ($stmtDeleteKarir) {
            $file_path = $stmtDeleteKarir->file;

            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }

            $stmtDeleteKarir = DB::table('karirs')
                                    ->where('id', $id)
                                    ->delete();

            if ($stmtDeleteKarir) {
                return redirect()->back()->with('success', 'Data karir berhasil dihapus');
            }
        }

        return redirect()->back()->with('error', 'Data karir tidak ditemukan atau gagal dihapus');
    }
}
