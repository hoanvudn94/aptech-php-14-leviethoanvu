<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function layTatCaNguoiDung()
    {
        $tatCaNguoiDung = User::all();
        return view('view-user',['nguoi_dung'=> $tatCaNguoiDung]);
    }
    function layMotNguoiDung($id)
    {
        $layMotNguoiDung = User::find($id);
        return view('view-user',['nguoi_dung'=> $layMotNguoiDung]);
    }
    function xoaNguoiDung($id)
    {
        return 'abc';
    }
}
