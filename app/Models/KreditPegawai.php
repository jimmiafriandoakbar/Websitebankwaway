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
        // BPKB Kendaraan
        'jenis_kendaraan',
        'merek',
        'tahun_kendaraan',
        'no_polisi',
        'nama_pemilik',
        // Sertifikat Tanah/Bangunan
        'jenis_sertifikat',
        'luas_tanah',
        'atas_nama',
        // Lainnya
        'keterangan_agunan',
        // Upload KTP
        'ktp',
    ];
}
