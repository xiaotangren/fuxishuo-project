<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //用户列表
    public function index()
    {
        return view('users.index',compact('user'));
    }

    //个人中心
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    //信息验证
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);
    }
    //用户注册
    public function create(Request $request)
    {
        $name = $request->name;

    }

    //跳转到注册页面
    public function signup()
    {
        return view('users.create');
    }
}
