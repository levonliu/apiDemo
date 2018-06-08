<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-8
 * Time: 下午4:16
 */

namespace App\Http\Middleware;

use Closure;

class CrossHttp
{
    public function handle($request, Closure $next) {
        return $next($request);
    }
}