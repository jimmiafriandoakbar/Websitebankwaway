<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Setelah login berhasil
     */
    protected function authenticated(Request $request, $user)
    {
        // kalau pakai spatie role (opsional)
        if (method_exists($user, 'hasRole') && $user->hasRole('admin')) {
            return redirect('/admin/home');
        }

        // role wbs
        if ($user->role == 'wbs') {
            return redirect('/admin-wbs');
        }

        // default
        return redirect('/admin-wbs');
    }

    /**
     * Default redirect (tidak terlalu dipakai karena override di atas)
     */
    protected $redirectTo = '/admin-wbs';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}