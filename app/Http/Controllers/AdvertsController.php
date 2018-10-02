<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Http\Resources\AdvertResource;
use Illuminate\Http\Request;

class AdvertsController extends Controller
{

    public function index($per_page = 12) {

        return AdvertResource::collection(Advert::paginate($per_page));
    }
}
