<?php

namespace Tests\Feature;

use App\Advert;
use App\ComparisionProduct;
use App\Feature;
use App\Http\Controllers\AdvertsController;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class AdvertsTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @var AdvertsController
     */
    private $advertsController;

    /**
     * Set up AdvertController
     */
    public function setUp()
    {
        parent::setUp();
        $this->advertsController = new AdvertsController(new Advert());
    }

    /**
     * test index method from AdvertController - retrieving adverts from DB
     */
    public function testIndexMethod()
    {
        //without any data
        $request = Request::create('', 'POST');
        $this->json('POST', '/api/announcements')
            ->assertStatus(200)
            ->assertSee(json_encode($this->advertsController->index($request)));


        //with data
        //generate user settings
        $user_settings_array = [];
        $i = 0;
        while ($i < count(Config::get('constants.SEARCHING_SETTING'))) {
            array_push($user_settings_array, ["Any"]);
            $i++;
        }

        $data = [
            'per_page' => 20,
            'order_by' => 'lowest_price',
            'looking_for' => 'eA',
            'year' => 2018,
            'user_settings' => $user_settings_array,
            'min_price' => 40000,
            'max_price' => 80000
        ];
        $request = Request::create('', 'POST', $data);
        $this->json('POST', '/api/announcements', $data)
            ->assertStatus(200)
            ->assertSee(json_encode($this->advertsController->index($request)));
    }


    /**
     * Test advert method from AdvertsController
     */
    public function testSingleAdvertSubpage()
    {
        //generete components
        $advert = factory(Advert::class)->create();
        factory(Feature::class, 5)->create();
        factory(ComparisionProduct::class)->create();

        //test caching
        $this->get(URL::current()."/advert/$advert->id")
            ->assertStatus(200)
            ->assertSee(Cache::get(URL::current()."/advert/$advert->id"));
    }

}
