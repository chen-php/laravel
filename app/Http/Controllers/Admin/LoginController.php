<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	//登录验证
    public function getLogin(Request $request)
    {
        return view('admin/login/login');
    }

}
