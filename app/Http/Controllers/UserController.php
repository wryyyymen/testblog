<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //个人信息
    public function infoPage()
    {
        dd('个人信息页面');
    }

    //修改信息
    public function infoUpdate()
    {
        dd('修改个人信息');
    }

    //个人头像
    public function avatarPage()
    {
        dd('个人头像');
    }

    //修改个人头像
    public function avatarUpdate()
    {
        dd('修改个人头像');
    }

    //我的博客
    public function userBlog()
    {
        dd('我的博客');
    }

}
