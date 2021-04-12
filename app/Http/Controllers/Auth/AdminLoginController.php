<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function getAdminLogin()
    {
        return view('admin::auth.login');
    }

    public function postAdminLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (\Auth::guard('admins')->attempt($credentials)) {
            return redirect()->route('get_admin.index');
        }

        return redirect()->back();
    }

    public function logoutAdmin(Request $request)
    {
        \Auth::guard('admins')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('get.admin_login');
    }
}
