<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Http\Resources\AdvertResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdvertsController extends Controller
{
    /**
     * @var Advert
     */
    private $advert;
    private $looking_for;

    /**
     * Constructor with Advert DI
     * @param Advert $advert
     */
    public function __construct(Advert $advert)
    {
        $this->advert = $advert;
    }

    /**
     * Sorting records by user choose - sortBy.vue
     * @param $adverts
     * @param $per_page
     * @param $order_by
     * @return mixed
     */
    private function sorting($adverts, $per_page, $order_by)
    {

        switch ($order_by) {
            case 'newest':
                $adverts = $adverts->orderBy('id', 'desc')->paginate($per_page);
                break;
            case 'oldest':
                $adverts = $adverts->orderBy('id', 'asc')->paginate($per_page);
                break;
            case 'name':
                $adverts = $adverts->orderBy('title', 'asc')->paginate($per_page);
                break;
            case 'lowest_price':
                $adverts = $adverts->orderBy('price', 'asc')->paginate($per_page);
                break;
            case 'highest_price':
                $adverts = $adverts->orderBy('price', 'desc')->paginate($per_page);
                break;

            default:
                $adverts = $adverts->orderBy('id', 'desc')->paginate($per_page);
                break;
        }

        return $adverts;
    }

    private function basicSearching($adverts, $looking_for)
    {

        $this->looking_for = $looking_for;

        /* need to use query for basic searching, because if user would use advanced searching
        where clauses would be like where(//)->orWhere(//)->where(//) -
        this would return inaccurate results */
        $adverts = $adverts->where(function ($query) {
            $query->where('title', 'like', '%' . $this->looking_for . '%')
                ->orWhere('make', 'like', '%' . $this->looking_for . '%')
                ->orWhere('model', 'like', '%' . $this->looking_for . '%')
                ->orWhere('exterior_color', 'like', '%' . $this->looking_for . '%')
                ->orWhere('year', 'like', '%' . $this->looking_for . '%')
                ->orWhere('body_style', 'like', '%' . $this->looking_for . '%')
                ->orWhere('condition', 'like', '%' . $this->looking_for . '%')
                ->orWhere('torque', 'like', '%' . $this->looking_for . '%');
        });

        return $adverts;
    }

    private function advanced_search($adverts, $user_settings, $min_price, $max_price) {

        if ($min_price != '') {
            $adverts = $adverts->where('price', '>', (int)$min_price);
        }
        if ($max_price != '') {
            $adverts = $adverts->where('price', '<', (int)$max_price);
        }


        $index = 0;
        if($user_settings == []) {
            return $adverts;
        }
        //foreach option in advanced searching, frontend is rendered from that const too
        foreach (SEARCHING_SETTING as $settingName => $setting) {

            //column in database have underscore instead of space
            $settingName = str_replace(' ', '_', $settingName);

            //values are retrieved from setting.vue - data structure is indexed arrays in outer indexed array
            $choosenSettingValues = $user_settings[$index];

            //first option in advanced searching is Any - filter results only if Any is not checked and if array isnt empty
            if($choosenSettingValues != []) {
                if ($choosenSettingValues[0] !== "Any") {
                    $adverts = $adverts->whereIn("$settingName", $choosenSettingValues);
                }
            }

            $index++;
        }

        return $adverts;
    }

    /**
     * Adverts retrieve
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $per_page = $request->get('per_page');
        $order_by = $request->get('order_by');
        $looking_for = $request->get('looking_for');
        $user_settings = $request->get('user_settings');
        $min_price = $request->get('min_price');
        $max_price = $request->get('max_price');

//        Cache::remember('adverts', 15 , function() {
//            return AdvertResource::collection(Advert::all());
//        });


        $adverts = $this->advanced_search($this->advert, $user_settings, $min_price, $max_price);
        $adverts = $this->basicSearching($adverts, $looking_for);
        $adverts = $this->sorting($adverts, $per_page, $order_by);

       return AdvertResource::collection($adverts);
    }


    /**
     * Single advert page
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function advert($id) {
        $advert = $this->advert->find($id);
        $features = $advert->features;

        return view('sites.announcement', ['advert' => $advert, 'features' => $features]);
    }
}
