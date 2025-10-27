<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormKreditPegawaiController extends Controller
{

    public function index()
    {
        return view('guest.content.kreditP.formKreditPegawai');
    }

    public function formKreditPegawaiPost()
    {
        return view('guest.content.kreditP.formDataPegawai');;
    }
}
