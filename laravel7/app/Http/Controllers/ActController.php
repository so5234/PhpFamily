<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActController extends Controller
{
    //列表
    public function index()
    {
        return view('act/index');
    }

    //详情页
    public function show()
    {
        return view('act/show');
    }

    //创建文章
    public function create()
    {

    }

    //创建逻辑
    public function store()
    {

    }

    //编辑逻辑
    public function update()
    {
        
    }

    //删除逻辑
    public function delete()
    {
        
    }








}
