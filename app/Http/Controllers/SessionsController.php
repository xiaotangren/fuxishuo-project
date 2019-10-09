<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class SessionsController extends Controller
{
    //创建登录页面跳转
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {

    }
}
