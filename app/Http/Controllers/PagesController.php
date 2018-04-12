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
}
