<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Http\Resources\AdvertResource;
use Illuminate\Http\Request;

class AdvertsController extends Controller
{
    /**
     * @var Advert
     */
    private $advert;

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
    private function sorting($adverts, $per_page, $order_by) {

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

    /**
     * Basic adverts retrieve
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $per_page = $request->get('per_page');
        $order_by = $request->get('order_by');
        $looking_for = $request->get('looking_for');

        $adverts = $this->advert->where('title', $looking_for)
            ->orWhere('title', 'like', '%'.$looking_for.'%')
            ->orWhere('make', 'like', '%'.$looking_for.'%')
            ->orWhere('model', 'like', '%'.$looking_for.'%')
            ->orWhere('exterior_color', 'like', '%'.$looking_for.'%')
            ->orWhere('year', 'like', '%'.$looking_for.'%')
            ->orWhere('body_style', 'like', '%'.$looking_for.'%')
            ->orWhere('condition', 'like', '%'.$looking_for.'%')
            ->orWhere('torque', 'like', '%'.$looking_for.'%');

        $adverts = $this->sorting($adverts, $per_page, $order_by);

        return AdvertResource::collection($adverts);
    }


}
