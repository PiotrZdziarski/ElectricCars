<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdvertResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ComparisionController extends Controller
{
    public function test() {
        phpinfo();
    }

    public function testapi() {
        $value = Cache::remember('users', 10, function () {
            DB::table('features')->get();
        });

        return $value;
    }

    public function index() {
        return  'xd';
    }
}
