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
        //输出 "Hello，Josh
    }


    /**
     * 在array_map函数中使用闭包
     */
    public function map()
    {
        $numberPlusOne = array_map( function ($number)
        {
            return $number + 1;
        },[1,2,3]);

        print_r($numberPlusOne);
        //输出 【2，3，4】
    }


    /**
     *使用use关键字附加闭包的状态
     */
    public function enclosePerson($name)
    {
        return function ($doCommand) use ($name)
        {
            return printf('%s,%s',$name,$doCommand);
        };
    }









}
