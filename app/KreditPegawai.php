<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KreditPegawai extends Model
{
    protected $table = 'kredit_pegawai';

    protected $fillable = [
        // Step 1
        'nik',
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'no_tlp',
        'pekerjaan',


        // Step 2
        'jenis_kredit',
        'tujuan',
        'nominal',
        'jangka_waktu',
        'tujuan_pengajuan_kredit',


        // Step 3
        'jenis_agunan',
        'jenis_kendaraan',
        'merek',
        'tahun_kendaraan',
        'no_polisi',
        'nama_pemilik',
        'jenis_sertifikat',
        'luas_tanah',
        'atas_nama',
        'ket_karpeg',
        'ket_taspen',
        'ket_sk80',
        'ket_sk100',
        'ket_sk',
        'ket_lainnya',

        'pinjaman_kur',
        'account_officer',
        'ktp',
        'kartu_keluarga',
        'surat_nikah',
        'izin_usaha',
    ];
}
