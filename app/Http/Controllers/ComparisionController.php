<?php

namespace App\Http\Controllers;

use App\Advert;
use App\ComparisionList;
use App\ComparisionProduct;
use App\Http\Resources\AdvertResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ComparisionController extends Controller
{
    public function test() {
        phpinfo();
    }

    /**
     * Storing comparision product to list
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function store(Request $request) {
        $id = intval($request->get('id'));

        if(!Session::has('comparision_list_id')) {
            ComparisionList::increment('id');
            Session::put('comparision_list_id', ComparisionList::first()->id);
        }

        ComparisionProduct::insert([
            'comparision_list_id' => Session::get('comparision_list_id'),
            'product_id' => $id
        ]);

        return AdvertResource::collection(
            Advert::where('id', $id)->select('id', 'main_image', 'title')->get()
        );
    }
}
