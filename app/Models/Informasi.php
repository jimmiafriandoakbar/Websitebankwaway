<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Informasi extends Model
{
    protected $table = 'informasis';

    protected $fillable = [
        'judul', 'deskripsi', 'gambar', 'link', 'kategori'
    ];

    public function getInformasi()
    {
        // get data informasi dari database query builder
        $stmtDataInformasi = DB::table('informasis')->orderBy('id', 'desc')->get();
        return $stmtDataInformasi;
    }

    public function informasiPost($stmtInformasiPost)
    {
        // insert data informasi ke database query builder
        $stmtInformasi = DB::table('informasis')->insert($stmtInformasiPost);
        return $stmtInformasi;
    }

    public function informasiDelete($item)
    {
        // delete data informasi dari database query builder
        $stmtInformasi = DB::table('informasis')->where('id', $item)->delete();
        return $stmtInformasi;
    }
}
