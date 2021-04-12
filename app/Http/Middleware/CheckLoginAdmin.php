<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 4/13/21 .
 * Time: 1:20 AM .
 */

namespace App\Http\Middleware;


use Illuminate\Http\Request;

class CheckLoginAdmin
{
    public function handle(Request $request, \Closure $next)
    {
        if(get_data_user('admins')) return $next($request);

        return redirect()->route('get.admin_login');
    }
}
