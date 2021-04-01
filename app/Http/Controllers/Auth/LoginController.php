<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function postLogin(RequestLogin $request)
    {
        if($request->ajax())
        {
            $credentials = $request->only('email', 'password');
            Log::info($credentials);
            if (\Auth::guard('users')->attempt($credentials)) {
                return response()->json([
                    'status' => 200
                ]);
            }

            return response()->json([
                'status' => 201
            ]);
        }

    }
}
