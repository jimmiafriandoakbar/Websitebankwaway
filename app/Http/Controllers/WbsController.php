<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WbsController extends Controller
{
    public function index()
    {
        return view('guest.content.wbs.index');
    }

    public function wbsPost(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'ktp' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'kriteria' => 'required|array|min:1',
            'nama_pelapor' => 'required',
            'jabatan_pelapor' => 'nullable',
            'waktu_kejadian' => 'nullable|date',
            'kronologi_kejadian' => 'nullable',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Upload file jika ada
        $filePath = null;
        if ($request->hasFile('lampiran')) {
            $filePath = $request->file('lampiran')->store('wbs/files');
        }

        // Simpan ke database
        $inserted = DB::table('wbs')->insert([
            'ktp' => $validatedData['ktp'],
            'no_hp' => $validatedData['no_hp'],
            'email' => $validatedData['email'],
            'kriteria' => implode(', ', $validatedData['kriteria']), // Ubah array jadi string
            'nama_pelapor' => $validatedData['nama_pelapor'],
            'jabatan_pelapor' => $validatedData['jabatan_pelapor'] ?? null,
            'waktu_kejadian' => $validatedData['waktu_kejadian'] ?? null,
            'kronologi_kejadian' => $validatedData['kronologi_kejadian'] ?? null,
            'lampiran' => $filePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if (!$inserted) {
            return redirect()->back()->with('error', 'Gagal mengirim laporan. Silakan coba lagi.');
        }

        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }
}
