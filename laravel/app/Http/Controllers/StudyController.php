<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    /**
     * 定义闭包函数
     */
    public function closure()
    {

        $closure = function ($name)
        {
            return sprintf('Hello %s',$name);
        };

        echo $closure("Josh");
        //输出 --》"Hello，Josh
    }
}
