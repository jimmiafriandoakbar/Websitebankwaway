<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerifikasiDownload extends Model
{
    protected $table = 'verifikasi_download';

    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'instansi',
        'keperluan',
        'agree',
        'file',
        'ip_address',
    ];
}
