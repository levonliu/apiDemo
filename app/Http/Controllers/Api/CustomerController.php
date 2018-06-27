<?php
/**
 * Created by PhpStorm.
 * User: levonliu
 * Date: 18-6-11
 * Time: 下午8:55
 */

namespace App\Http\Controllers\Api;

class CustomerController extends AuthController
{
    private $token;

    public function __construct()
    {
        $this->token = $this->refresh();
    }

    public function getCustomerList()
    {
        $customerList = \DB::table('customers')->get();
        $customerList = $customerList->reject(function(&$v){
            $v->sex_name     = $v->sex == '1' ? '男' : '女';
            $v->address_name = $v->address == '1' ? '绵竹' : '彭州';
            $v->group_name   = $v->group == '1' ? 'A' : 'B';
        });
        return response()->json([ 'status' => true, 'access_token' => $this->token, 'data' => $customerList ], 200);
    }
}