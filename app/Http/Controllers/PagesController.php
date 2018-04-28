<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    //

    public function root()
    {
//        dd(User::all());

//        dd(User::class);  //这个只是路径
        return view('pages.root');
    }

    public function permissionDenied(){
        // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('pages.permission_denied');

    }
}
