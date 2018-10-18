<?php

namespace App\Http\Controllers;

use App\ComparisionList;
use App\ComparisionProduct;
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

        //set comparision list if not previously set
        if(!Session::has('comparision_list_id')) {
            ComparisionList::increment('id');
            Session::put('comparision_list_id', ComparisionList::first()->id);
        }
        $comparision_list_id = Session::get('comparision_list_id');

        if(ComparisionProduct::where('product_id', $id)->doesntExist()) {
            $comparision_product = new ComparisionProduct();
            $comparision_product->comparision_list_id =  $comparision_list_id;
            $comparision_product->product_id = $id;
            $comparision_product->save();
        }

        if(!isset($comparision_product)) {
            return null;
        }

        return $comparision_product->advert;
    }


    /**
     * Delete comparision product from list
     * @param Request $request
     */
    public function delete(Request $request)
    {
        $id = $request->get('id');

        if (Session::has('comparision_list_id')) {
            ComparisionProduct::where('product_id', $id)
                ->where('comparision_list_id', Session::get('comparision_list_id'))
                ->delete();
        }
    }
}
