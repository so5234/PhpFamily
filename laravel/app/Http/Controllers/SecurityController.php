<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function index()
    {
        //return 1;
        // 设置一个公钥(key)和私钥(secret)，公钥用于区分用户，私钥加密数据，不能公开
        $key = "c4ca4238a0b923820dcc509a6f75849b";
        $secret = "28c8edde3d61a0411511d3b1866f0636";

        // 待发送的数据包
        $data = [
        'username' => '123',
        'sex' => '1',
        'age' => '16',
        'addr' => 'zhongguo',
        'key' => $key,
        'timestamp' => time()
        ];

        ksort($data);

        $params = http_build_query($data);

        //return $params;

        //生成sign
        $sing = md5($params.$secret);

        return $sing;

    }





}
