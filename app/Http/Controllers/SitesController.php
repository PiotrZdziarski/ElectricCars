<?php

namespace App\Http\Controllers;

class SitesController extends Controller
{
    /**
     * Home page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home() {
        return view('home');
    }


    /**
     * Cars subpage
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cars() {
        return view('sites.cars');
    }

}
