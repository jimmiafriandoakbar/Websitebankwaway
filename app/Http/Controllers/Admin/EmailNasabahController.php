<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailNasabahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application Email Nasabah.
     *
     * @return \Illuminate\Http\Response
     */
    public function email()
    {
        $email = DB::table('kritikdansaran')->orderBy('created_at', 'desc')->get();
        $count = DB::table('kritikdansaran')->count();

        return view('admin/content/emailNasabah', compact('email', 'count'));
    }
}
