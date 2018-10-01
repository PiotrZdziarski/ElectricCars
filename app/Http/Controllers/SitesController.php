<?php

namespace App\Http\Controllers;

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

    public function advert() {
        return view('sites.announcement');
    }

}
