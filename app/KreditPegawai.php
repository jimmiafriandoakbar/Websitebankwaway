<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KreditPegawai extends Model
{
    //tabel
    protected $table = 'kredit_pegawai';
    protected $fillable = [
        'nik',
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'no_tlp',
        'pekerjaan',

        'jenis_kredit',
        'tujuan',
        'nominal',
        'jangka_waktu',
        'tujuan_pengajuan_kredit',

        // Agunan
        'jenis_agunan',
        'ket_karpeg',
        'ket_taspen',
        'ket_sk80',
        'ket_sk100',
        'ket_sk',
        'ket_lainnya',

        // Upload KTP
        'ktp',
    ];
}
