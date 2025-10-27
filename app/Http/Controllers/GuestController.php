<?php

namespace App\Http\Controllers;

use App\KritikSaran;
use App\Models\Deposito;
use App\Models\Informasi;
use App\Models\PembukaanRekeningPerorangan;
use App\PelayananKonsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    public function __construct()
    {
        $this->modelKrisan = new KritikSaran();
        $this->modelPembukaanRekening = new PembukaanRekeningPerorangan();
        $this->modelInformasi = new Informasi();
        $this->modelDeposito = new Deposito();
    }

    public function index()
    {
        // get data cover desc
        $stmtCover = DB::table('cover')->orderBy('id', 'desc')->get();
        // dd($stmtCover);
        return view('guest.index');
    }

    public function kritikPost(Request $request)
    {
        try {
            $this->validate($request, [
                'nama' => [
                    'required',
                    'regex:/^(?!(.* ){2}).*$/',
                    'regex:/^[^!@#$%^&*()_+{}\[\]:;<>,.?~\\-=\\|]*$/',
                    'min:3'
                ],
                'email' => 'required|email',
                'pesan' => 'required|min:15'
            ]);
        } catch (\Exception $e) {
            alert()->html('<i style="color:red;">WARNING..!!!</i>', " 
                    <li>Nama inimal 3 character</li>
                    <li>Pesan minimal 15 character</li>
            ", 'warning');

            return redirect()->to('/');
        }

        $stmtKritikPost = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'pesan' => $request->input('pesan'),
            'created_at' => DB::raw('NOW()')
        ];

        $stmtDataKreditInput = $this->modelKrisan->kritikPost($stmtKritikPost);

        // if ($stmtDataKreditInput) {
        //     return redirect()->to('/')->with('message', '<script>alert("Berhasil tersimpan, mohon tunggu tim kami menghubungi anda. terimakasih");</script>');
        // } else {
        //     return redirect()->to('/')->with('message', '<script>alert("Gagal");</script>');
        // }
        Alert::success('Success Title', 'Success Message');
        return redirect()->to('/');
    }

    public function pembukaanRekening()
    {
        $kelurahan = DB::table('kelurahan')->get();
        $kecamatan = DB::table('kecamatan')->get();
        $kodePos = DB::table('kode_pos')->get();
        $kabKota = DB::table('kab_kota')->get();

        return view('guest.content.pembukaanRekening', compact('kelurahan', 'kecamatan', 'kodePos', 'kabKota'));
    }

    public function pembukaanRekeningPost(Request $request)
    {

        // dd($request);
        // try {
            $this->validate($request, [
                // 'rekening_yang_dikehendaki' => 'required',

                'nama_lengkap' => [
                'required',
                'regex:/^[A-Za-z\s.]+$/u',
                'min:3',
                'max:50',
                ],
                'kartu_identitas' => 'required|max:50',
                'nominal_pendapatan' => 'required|max:50',
                'kelurahan' => 'required|max:50',
                'kecamatan' => 'required|max:50',
                'kab/kota' => 'required|max:50',
                'no_identitas' => ['required','regex:/^\d{16}$/','unique:pendaftaranrekening,no_identitas'],


                'alamat_identitas' => [
                    'required',
                    'regex:/^[\pL0-9\s.,\-\/]+$/u',
                    'min:5',
                    'max:100',
                ],
                'alamat_kontak_darurat' => [
                    'required',
                    'regex:/^[\pL0-9\s.,\-\/]+$/u',
                    'min:5',
                    'max:100',
                ],
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|max:50',

                'jenis_kelamin' => 'required|max:50',
                'status_perkawinan' => 'required|max:50',
                'nama_gadis_ibu_kandung' => 'required|max:50|min:3',
                'agama' => 'required|max:50',

                'kewarganegaraan' => 'required|max:50',
                'hubungan_dengan_pemohon' => 'required|max:50',

                'pendidikan_terakhir' => 'required|max:50',
                'no_tlpn' => [
                    'required',
                    'regex:/^[0-9]+$/',
                    'digits_between:10,15',
                ],
                'no_hp' => [
                    'required',
                    'regex:/^[0-9]+$/',
                    'digits_between:10,15',
                ],
                'kodePos' => [
                    'required',
                    'regex:/^[0-9]+$/',
                ],
                'alamat_email' => 'required|max:50',
                // 'status_tempat_tinggal' => 'required|max:50',
                'tujuan_pembuatan_rekening' => 'required|max:50',

                'pekerjaan' =>
                [
                    'required',
                    'regex:/^[\pL0-9\s.,\-\/]+$/u',
                    'max:100',
                ],

                'pendapatan_rata_rata_perbulan' => 'required',
                'sumber_pendapatan' => 'required|max:50',

                'nama_lengkap_kontak_darurat' =>
                [
                    'required',
                    'regex:/^[A-Za-z\s]+$/u',
                    'min:3',
                    'max:50',
                ],
                'no_tlpn_kontak_darurat' => 'required|max:50',
            ],[
                'no_identitas.required' => 'NIK wajib diisi.',
                'required' => ':attribute wajib diisi.',
                'no_identitas.regex'    => 'NIK harus 16 digit angka.',
                'no_identitas.unique'   => 'NIK sudah terpakai, silakan gunakan yang lain.',

                'alamat_email.email'    => 'Format email tidak valid.',
                'kode_pos.regex'        => 'Kode pos harus 5 digit.',
                'no_tlpn.regex'         => 'No. Telepon hanya boleh angka.',
                'no_hp.regex'           => 'No. HP hanya boleh angka.',
                'no_tlpn_kontak_darurat.regex' => 'No. Telepon darurat hanya boleh angka.',

                'alamat_identitas.regex'        => 'Alamat identitas hanya boleh huruf, angka, spasi, titik, koma, garis miring dan strip.',
                'alamat_kontak_darurat.regex'   => 'Alamat kontak darurat hanya boleh huruf, angka, spasi, titik, koma, garis miring dan strip.',
            ]);
        // } catch (\Exception $e) {
        //     alert()->html('<i style="color:red;">WARNING..!!!</i>', " 
        //             <li>Gagal</li>
        //     ", 'warning');

        //     return redirect()->back();
        // }

        $stmtDataRekeningBaru = [
            'rekening_yang_dikehendaki' => $request->input('rekening_yang_dikehendaki'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nama_alias' => $request->input('nama_alias'),
            'kartu_identitas' => $request->input('kartu_identitas'),
            'no_identitas' => $request->input('no_identitas'),
            'alamat_identitas' => $request->input('alamat_identitas'),
            'kelurahan' => $request->input('kelurahan'),
            'kecamatan' => $request->input('kecamatan'),
            'kode_pos_alamat' => $request->input('kodePos'),
            'kab_kota_alamat' => $request->input('kab/kota'),
            'kab_kota_tmpt_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'status_perkawinan' => $request->input('status_perkawinan'),
            'nama_gadis_ibu_kandung' => $request->input('nama_gadis_ibu_kandung'),
            'agama' => $request->input('agama'),
            'kewarganegaraan' => $request->input('kewarganegaraan'),
            'npwp' => $request->input('npwp'),
            'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
            'no_tlpn' => $request->input('no_tlpn'),
            'no_hp' => $request->input('no_hp'),
            'alamat_email' => $request->input('alamat_email'),
            'status_tempat_tinggal' => $request->input('status_tempat_tinggal'),
            'tujuan_pembuatan_rekening' => $request->input('tujuan_pembuatan_rekening'),
            'pekerjaan' => $request->input('pekerjaan'),
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'bidang_usaha' => $request->input('bidang_usaha'),
            'tanggal_pendirian_perusahaan' => $request->input('tanggal_pendirian_perusahaan'),
            'jabatan' => $request->input('jabatan'),
            'nip_gol' => $request->input('nip_gol'),
            'mulai_bekerja' => $request->input('mulai_bekerja'),
            'alamat_kantor' => $request->input('alamat_kantor'),
            'no_tlpn_kantor' => $request->input('no_tlpn_kantor'),
            'pendapatan_rata_rata_perbulan' => $request->input('pendapatan_rata_rata_perbulan'),
            'sumber_pendapatan' => $request->input('sumber_pendapatan'),
            'nominal_pendapatan' => $request->input('nominal_pendapatan'),
            'nama_lengkap_kontak_darurat' => $request->input('nama_lengkap_kontak_darurat'),
            'hubungan_dengan_pemohon' => $request->input('hubungan_dengan_pemohon'),
            'alamat_kontak_darurat' => $request->input('alamat_kontak_darurat'),
            'no_tlpn_kontak_darurat' => $request->input('no_tlpn_kontak_darurat'),
            'created_at' => DB::raw('NOW()')
        ];

        $stmtInputDataRekeningBaru = $this->modelPembukaanRekening->kritikPost($stmtDataRekeningBaru);

        if ($stmtInputDataRekeningBaru) {
            Alert::success('Success Title', 'Berhasil tersimpan, mohon tunggu tim kami menghubungi anda. terimakasih');
            return redirect()->to('/')->with('message', '<script>alert("");</script>');
        } else {
            alert()->html('<i style="color:red;">WARNING..!!!</i>', "Gagal..!", 'warning');
            return redirect()->back();
        }
    }

    public function laporanPelayananKons()
    {
        $stmtPelayananKons = DB::table('pelayanan_konsumens')->get();
        return view('guest/content/laporan-pelayanan-kons', compact('stmtPelayananKons'));
    }

    public function laporan()
    {
        //get data publikasi desc
        $stmtPublikasi = DB::table('publikasis')->orderBy('id', 'asc')->get();

        return view('guest/content/laporan', compact('stmtPublikasi'));
    }

    public function karir()
    {
        //get data karir desc
        $stmtKarir = DB::table('karirs')->orderBy('id', 'desc')->get();

        return view('guest/content/karir', compact('stmtKarir'));
    }

    public function laporanGcg()
    {
        // get data laporan gcg asc
        $stmtLaporanTataKelola = DB::table('tata_kelolas')->orderBy('created_at', 'desc')->get();

        return view('guest/content/laporan-gcg', compact('stmtLaporanTataKelola'));
    }
    
    public function laporankeberlanjutan()
    {
        // get data laporan Laporan Keberlanjutan asc
        $stmtLaporankeberlanjutan = DB::table('tata_kelolas')->orderBy('id', 'asc')->get();

        return view('guest/content/laporan-keberlanjutan', compact('stmtLaporankeberlanjutan'));
    }
    
    public function laporantahunan()
    {
        // get data laporan Laporan tahunan asc
        $stmtLaporantahunan = DB::table('tata_kelolas')->orderBy('id', 'asc')->get();

        return view('guest/content/laporan-tahunan', compact('stmtLaporantahunan'));
    }

    public function isPlindrome($string)
    {
        $char = preg_replace('/[^a-zA-Z0-9]/', '', $string);

        if ($stringNew = strrev($char)) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function informasi()
    {
        // get data informasi desc
        $stmtDataInformasi =  $this->modelInformasi->getInformasi();
        // dd($stmtDataInformasi);

        return view('guest/content/informasi', compact('stmtDataInformasi'));
    }

    public function formdeposit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|min:3',
            'nomorTlp' => 'required|min:11',
            'email' => 'required',
            'provinsi' => 'required',
            'kota' => 'required'
        ], [
            'nama.required' => 'Nama harus diisi.',
            'nama.min' => 'Nama minimal 3 karakter.', // Sesuaikan dengan panjang maksimal yang diinginkan
            'nomorTlp.required' => 'Telepon harus diisi.',
            'nomorTlp.min' => 'Nomor telepon minimal 11 karakter.', // Sesuaikan dengan panjang minimal yang diinginkan
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'provinsi.required' => 'Kolom provinsi harus diisi.',
            'kota.required' => 'Kolom kota harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $stmtDepositoPost = [
            'nama' => $request->input('nama'),
            'no_tlp' => $request->input('nomorTlp'),
            'email' => $request->input('email'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'created_at' => DB::raw('NOW()')
        ];

        $stmtDataDeposito = $this->modelDeposito->depositoPost($stmtDepositoPost);

        if ($stmtDataDeposito) {
            Alert::success('Success Title', 'Berhasil tersimpan, mohon tunggu tim kami menghubungi anda. terimakasih');
            return redirect()->to('/deposito')->with('message', '<script>alert("");</script>');
        } else {
            alert()->html('<i style="color:red;">WARNING..!!!</i>', "Gagal..!", 'warning');
            return redirect()->back();
        }
    }
}
