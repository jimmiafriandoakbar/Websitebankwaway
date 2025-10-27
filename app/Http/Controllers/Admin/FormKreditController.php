<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormKredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FormKreditController extends Controller
{

    public function __construct()
    {
        $this->modelFormKredit = new FormKredit();
    }

    public function index()
    {
        $stmtKabKota = DB::table('kab_kota')->get();
        $stmtKecamatan = DB::table('kecamatan')->get();
        $stmtKelurahan = DB::table('kelurahan')->get();
        $stmtProvinsi = DB::table('provinsi')->get();

        return view('guest.content.formKredit')
            ->with('stmtKabKota', $stmtKabKota)
            ->with('stmtKecamatan', $stmtKecamatan)
            ->with('stmtKelurahan', $stmtKelurahan)
            ->with('stmtProvinsi', $stmtProvinsi);
    }

    public function formKreditPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nama_panggilan_pemohon' => 'required',
            'tmplahir' => 'required',
            'tgllahir' => 'required',
            'jnsid' => 'required',
            'noid' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'no_tlp_hp' => 'required',
            'telp_saudara' => 'required',

            'usaha_pokok' => 'required',
            'tujuan' => 'required',
            'permohonan' => 'required',
            'jk' => 'required',
            'sumber_penghasilan' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi',
            'nama_panggilan_pemohon.required' => 'Nama panggilan harus diisi',
            'tmplahir.required' => 'Tempat tgl lahir harus diisi',
            'tgllahir.required' => 'Tgl lahir harus diisi',
            'jnsid.required' => 'Jenis identitas harus diisi',
            'noid.required' => 'Nomor identitas harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'provinsi.required' => 'Provinsi harus diisi',
            'kota.required' => 'Kota harus diisi',
            'kecamatan.required' => 'Kecamatan Harus diisi',
            'kelurahan.required' => 'kelurahan Harus diisi',
            'no_tlp_hp.required' => 'Nomorf HP hpHarus diisi',
            'telp_saudara.required' => 'Telp Saudara Harus diisi',

            'usaha_pokok.required' => 'Usaha Pokok Harus diisi',
            'tujuan.required' => 'Tujuan Harus diisi',
            'permohonan.required' => 'Permohonan Harus diisi',
            'jk.required' => 'Jangka KreditHarus diisi',
            'sumber_penghasilan.required' => 'Sumber Penghasilan Harus diisi'

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'nama' => $request->nama,
            'nama_panggilan_pemohon' => $request->nama_panggilan_pemohon,
            'tmplahir' => $request->tmplahir,
            'tgllahir' => $request->tgllahir,
            'jnsid' => $request->jnsid,

            'noid' => $request->noid,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,

            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kewarganegaraan' => $request->kewarganegaraan,
            'tmpt_tinggal_sekarang' => $request->tmpt_tinggal_sekarang,

            'status_tempat_tinggal' => $request->status_tempat_tinggal,
            'atas_nama_sendiri' => $request->atas_nama_sendiri,
            'alamat_usaha' => $request->alamat_usaha,
            'pendidikan' => $request->pendidikan,
            'no_tlp_hp' => $request->no_tlp_hp,
            'telp_rumah' => $request->telp_rumah,

            'telp_saudara' => $request->telp_saudara,
            'pendamping' => $request->pendamping,
            'panggilan_pendamping' => $request->panggilan_pendamping,
            'no_hp_pendamping' => $request->no_hp_pendamping,
            'status_pendamping' => $request->status_pendamping,
            'status' => $request->status,

            'nama_pasangan' => $request->nama_pasangan,
            'perkawinan_ke' => $request->perkawinan_ke,
            'jmlh_anak' => $request->jmlh_anak,
            'nama_ibu_kndung' => $request->nama_ibu_kndung,

            // data usaha
            'usaha_pokok' => $request->usaha_pokok,
            'usaha_smpingn' => $request->usaha_smpingn,
            'lm_usaha' => $request->lm_usaha,
            'referensi' => $request->referensi,

            //surat izin usaha
            'npwp' => $request->npwp,
            'siup' => $request->siup,
            'tdp' => $request->tdp,

            'pegawai' => $request->pegawai,
            'nama_perusahaan' => $request->nama_perusahaan,
            'jenis_usaha' => $request->jenis_usaha,
            'jabatan' => $request->jabatan,
            'npwp_debitur' => $request->npwp_debitur,


            'tujuan' => $request->tujuan,
            'instansi' => $request->instansi,
            'ket_penggunaan' => $request->ket_penggunaan,
            'permohonan' => $request->permohonan,
            'jk' => $request->jk,
            'sumber_penghasilan' => $request->sumber_penghasilan,

            'berapakali_pinjam' => $request->berapakali_pinjam,
            'plafon_terakhir' => $request->plafon_terakhir,
            'jk_terakhir' => $request->jk_terakhir,
            'tujuan_pinjaman_sebelumnya' => $request->tujuan_pinjaman_sebelumnya,
            'tglpelunasan' => $request->tglpelunasan,

            // data jaminan
            'data_jaminan' => $request->data_jaminan,
            'ket_agunan_non_bergerak' => $request->ket_agunan_non_bergerak,
            'nilai_jaminan_non_bergerak' => $request->nilai_jaminan_non_bergerak,
            'taksasi_1' => $request->taksasi_1,
            'j_agunan_liquidasi1' =>  $request->j_agunan_liquidasi1,
            'data_jaminan2' =>  $request->data_jaminan2,

            'ket_agunan_bergerak' =>  $request->ket_agunan_bergerak,
            'nilai_jaminan_bergerak' => $request->nilai_jaminan_bergerak,
            'taksasi_2' => $request->taksasi_2,
            'j_agunan_liquidasi2' => $request->j_agunan_liquidasi2,
            'data_jaminan3' => $request->data_jaminan3,
            'ket_agunan_lainnya' => $request->ket_agunan_lainnya,

            'nilai_jaminan_lainnya' => $request->nilai_jaminan_lainnya,
            'taksasi_3' => $request->taksasi_3,
            'j_agunan_liquidasi3' => $request->j_agunan_liquidasi3,
            'data_pinjaman_lembaga_lain' => $request->data_pinjaman_lembaga_lain,
            'ket_pinjaman_lain' => $request->ket_pinjaman_lain,
            'addpendaftaran' => $request->addpendaftaran,

            'created_at' => now()
        ];

        $stmtFormKreditPost = $this->modelFormKredit->formKreditPost($data);

        return redirect()->back()->with('success', 'Form kredit Anda berhasil disimpan, mohon menunggu...');
    }
}
