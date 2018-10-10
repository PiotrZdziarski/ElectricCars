<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Http\Resources\AdvertResource;

class SitesController extends Controller
{

    public function home() {
        return view('home');
    }


    //Cars
    public function cars() {
        return view('sites.cars');
    }


    public function car() {
        return view('sites.car');
    }



    //Adverts
    public function adverts(){
        return view('sites.announcements');
    }


    /**
     * Single advert page
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function advert($id) {

        $advert = Advert::find($id);

        return view('sites.announcement', ['advert' => $advert]);
    }

}
