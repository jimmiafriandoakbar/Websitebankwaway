<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KreditPegawai; // Ensure this model is imported

class KreditPegawaiController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('products.index', compact('products'));
    }
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function stepOnePemohon(Request $request)
    {
        // Ambil data dari session kreditPegawai agar data tetap terisi saat kembali
        $kreditPegawai = $request->session()->get('kreditPegawai', []);
        return view('kreditPegawai.pemohon', compact('kreditPegawai'));
    }

    public function stepOnePemohonPost(Request $request)
    {
        $validatedData = $request->validate([
            'nik'           => 'required|numeric|unique:kredit_pegawai,nik',
            'nama_lengkap'  => 'required|string|max:255',
            'nama_panggilan' => 'nullable|string|max:255',
            'tempat_lahir'  => 'nullable|string|max:255',
            'tgl_lahir'     => 'nullable|date',
            'alamat'        => 'nullable|string|max:255',
            'no_tlp'        => 'required|string|max:15',
            'pekerjaan'     => 'nullable|string|max:255',
            'account_officer'  => 'nullable|string|max:255',
        ], [

            'nik.numeric'       => 'NIK harus berupa angka.',
            'nik.unique'        => 'NIK sudah terdaftar.',

            'required'          => ':attribute wajib diisi.',

            'nama_lengkap.max'      => 'Nama lengkap maksimal 255 karakter.',

            'nama_panggilan.max'    => 'Nama panggilan maksimal 255 karakter.',

            'tempat_lahir.max'      => 'Tempat lahir maksimal 255 karakter.',

            'tgl_lahir.date'        => 'Tanggal lahir harus berupa format tanggal yang valid.',

            'alamat.max'            => 'Alamat maksimal 255 karakter.',


            'no_tlp.max'            => 'Nomor telepon maksimal 15 karakter.',

            'pekerjaan.max'         => 'Pekerjaan maksimal 255 karakter.',
        ]);

        // Pastikan session selalu array, bukan object
        $old = $request->session()->get('kreditPegawai', []);
        if (is_object($old)) {
            $old = (array) $old;
        }
        $request->session()->put('kreditPegawai', array_merge($old, $validatedData));
        return redirect()->route('step-two-pengajuan-kredit');
    }

    public function stepTwoPengajuanKredit(Request $request)
    {
        $kreditPegawai = $request->session()->get('kreditPegawai');
        return view('kreditPegawai.pengajuanKredit', compact('kreditPegawai'));
    }

    public function stepTwoPengajuanKreditPost(Request $request)
    {
        $validatedData = request()->validate([
            'jenis_kredit'            => 'required|string|max:255',
            'tujuan'                  => 'required|string|max:255',
            'nominal'                 => 'required|numeric',
            'jangka_waktu'            => 'required|integer',
            'tujuan_pengajuan_kredit' => 'required|string|max:255',
            'pinjaman_kur' => 'required|string|max:10',
        ], [

            'jenis_kredit.string'   => 'Jenis kredit harus berupa teks.',
            'jenis_kredit.max'      => 'Jenis kredit maksimal 255 karakter.',

            'required'          => ':attribute wajib diisi.',

            'tujuan.string'   => 'Tujuan harus berupa teks.',
            'tujuan.max'      => 'Tujuan maksimal 255 karakter.',

            'nominal.numeric'  => 'Nominal pinjaman harus berupa angka.',

            'jangka_waktu.integer'  => 'Jangka waktu harus berupa angka bulat (bulan).',

            'tujuan_pengajuan_kredit.string'   => 'Tujuan pengajuan kredit harus berupa teks.',
            'tujuan_pengajuan_kredit.max'      => 'Tujuan pengajuan kredit maksimal 255 karakter.',
            'pinjaman_kur.max'      => 'Tujuan pengajuan kredit maksimal 255 karakter.',
        ]);

        $old = $request->session()->get('kreditPegawai', []);
        if (is_object($old)) {
            $old = (array) $old;
        }
        $request->session()->put('kreditPegawai', array_merge($old, $validatedData));
        return redirect()->route('agunan');
    }

    public function agunan(Request $request)
    {
        $kreditPegawai = $request->session()->get('kreditPegawai');
        // dd($agunan);
        return view('kreditPegawai.agunan', compact('kreditPegawai'));
    }


    public function agunanPost(Request $request)
    {

        // Validasi hanya field agunan yang diperlukan, jangan $request->all()
        $validatedData = $request->validate([
            'jenis_agunan' => 'required',
            'jenis_kendaraan' => 'nullable|string',
            'merek' => 'nullable|string',
            'tahun_kendaraan' => 'nullable|integer',
            'no_polisi' => 'nullable|string',
            'nama_pemilik' => 'nullable|string',
            'jenis_sertifikat' => 'nullable|string',
            'luas_tanah' => 'nullable|integer',
            'atas_nama' => 'nullable',
            'ket_karpeg' => 'nullable',
            'ket_taspen' => 'nullable',
            'ket_sk80' => 'nullable',
            'ket_sk100' => 'nullable',
            'ket_sk' => 'nullable',
            'ket_lainnya' => 'nullable',
        ]);

        $old = $request->session()->get('kreditPegawai', []);
        if (is_object($old)) {
            $old = (array) $old;
        }

        $jenisAgunanArray = $request->input('jenis_agunan');
        $jenisAgunanString = implode(', ', $jenisAgunanArray);

        // Simpan sebagai key khusus, agar tidak bentrok dengan key lainnya
        $validatedData['jenis_agunan'] = implode(', ', (array) $request->input('jenis_agunan'));

        $request->session()->put('kreditPegawai', array_merge($old, $validatedData));

        return redirect()->route('uploadKtp');
    }


    public function uploadKtp(Request $request)
    {
        $kreditPegawai = $request->session()->get('kreditPegawai');
        return view('kreditPegawai.uploadKtp', compact('kreditPegawai'));
    }

    public function uploadKtpPost(Request $request)
    {
        // Validasi input KTP
        $request->validate([
            'ktp' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',

            'kartu_keluarga' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
            'surat_nikah' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
            'izin_usaha' => 'file|mimes:jpg,jpeg,png,pdf|max:2048',
        ], [
            'ktp.required' => 'File KTP wajib diupload.',
            'ktp.mimes'    => 'Format file harus jpg, jpeg, png, atau pdf.',
            'ktp.max'      => 'Ukuran file maksimal 2MB.',
        ]);
        $data = $request->session()->get('kreditPegawai', []);

        if (is_object($data)) {
            $data = (array) $data;
        }

        // Upload semua file
        $files = ['ktp', 'kartu_keluarga', 'surat_nikah', 'izin_usaha'];
        foreach ($files as $file) {
            if ($request->hasFile($file)) {
                $path = $request->file($file)->store('uploads/' . $file);
                $data[$file] = $path;
            }
        }

        $kreditPegawai = new KreditPegawai();
        $kreditPegawai->fill($data);

        \Log::info('DATA DARI SESSION', $data);

        $kreditPegawai->save();

        $request->session()->forget('kreditPegawai');
        return view('kreditPegawai.berhasil');
    }
}
