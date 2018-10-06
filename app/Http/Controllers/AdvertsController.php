<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Http\Resources\AdvertResource;
use Illuminate\Http\Request;

class AdvertsController extends Controller
{

    public function index(Request $request)
    {
        $per_page = $request->get('per_page');
        $order_by = $request->get('order_by');

        switch ($order_by) {
            case 'newest':
                $adverts = Advert::orderBy('id', 'desc')->paginate($per_page);
                break;
            case 'oldest':
                $adverts = Advert::orderBy('id', 'asc')->paginate($per_page);
                break;
            case 'name':
                $adverts = Advert::orderBy('title', 'asc')->paginate($per_page);
                break;
            case 'lowest_price':
                $adverts = Advert::orderBy('price', 'asc')->paginate($per_page);
                break;
            case 'highest_price':
                $adverts = Advert::orderBy('price', 'desc')->paginate($per_page);
                break;

            default:
                $adverts = Advert::paginate($per_page);
                break;
        }

        return AdvertResource::collection($adverts);
    }


}
