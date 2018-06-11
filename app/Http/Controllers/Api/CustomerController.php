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
        return response()->json(['status' => true, 'access_token' => $this->token],200);
    }
}