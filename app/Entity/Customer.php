<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-6
 * Time: 下午4:51
 */

namespace App\Entity;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_name','sex','tel','address','group'];
}