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
     * @return \App\Advert|bool|mixed
     */
    public function store(Request $request) {
        $id = intval($request->get('id'));

        //set comparision list if not previously set
        if(!Session::has('comparision_list_id')) {
            ComparisionList::increment('id');
            Session::put('comparision_list_id', ComparisionList::first()->id);
        }
        $comparision_list_id = Session::get('comparision_list_id');

        $comparision_products = ComparisionProduct::where('comparision_list_id', $comparision_list_id)
            ->select('id', 'product_id')
            ->get();
        $products = array();

        foreach ($comparision_products as $comparision_product) {
            array_push($products, ComparisionProduct::find($comparision_product->id)->advert);
        }


        //user can compare maximally 3 products
        if(count($products) >= 3) {
            //sending info that it is too much
            array_push($products, true);
            $products = json_encode($products);
            return $products;
        }


        if(ComparisionProduct::where('product_id', $id)
            ->where('comparision_list_id', $comparision_list_id)
            ->doesntExist()) {
            $new_comparision_product = new ComparisionProduct();
            $new_comparision_product->comparision_list_id =  $comparision_list_id;
            $new_comparision_product->product_id = $id;
            $new_comparision_product->save();

            array_push($products, $new_comparision_product->advert);
        }

        $products = json_encode($products);

        if(!isset($products)) {
            return "not_set";
        }

        return $products;
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
