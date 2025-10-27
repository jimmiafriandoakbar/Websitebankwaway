<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PembukaanRekeningPerorangan extends Model
{
    protected $table = 'pendaftaranrekening';
    protected $primaryKey = 'no_identitas';
    public $incrementing = false;
    protected $keyType = 'string';  

    protected $fillable = [
            'nama_lengkap', 
            'nama_alias',
            'kartu_identitas',
            'no_identitas',
            'alamat_identitas',
            'tanggal_lahir',
            'tempat_lahir',
            'jumlah_tanggungan',
            'jenis_kelamin',
            'status_perkawinan',
            'nama_gadis_ibu_kandung',
            'agama',
            'kewarganegaraan',
            'npwp',
            'pendidikan_terakhir',
            'no_tlpn',
            'no_hp',
            'alamat_email',
            'status_tempat_tinggal',
            'tujuan_pembuatan_rekening',
            'pekerjaan',
            'nama_perusahaan', 'bidang_usaha', 'jabatan',
            'nip_gol', 'mulai_bekerja', 'alamat_kantor',
            'pendapatan', 'sumber_pendapatan',
            'nama_lengkap_kontak_darurat', 'hubungan_dengan_pemohon',
            'alamat', 'no_tlpn_kontak_darurat'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function kritikPost($stmtDataRekeningBaru)
    {
        $stmtPembukaanRekening = DB::table('pendaftaranrekening')->insert($stmtDataRekeningBaru);

        return $stmtPembukaanRekening;
    }
}
