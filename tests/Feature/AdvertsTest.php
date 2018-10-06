<?php

namespace Tests\Feature;

use App\Advert;
use App\Http\Controllers\AdvertsController;
use App\Http\Resources\AdvertResource;
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdvertsTest extends TestCase
{
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
        $this->advertsController = new AdvertsController();
    }

    /**
     * test index method from AdvertController
     */
    public function testIndexMethod()
    {
        //without any data
        $request = Request::create('', 'GET');
        $this->json('GET', '/api/announcements')
            ->assertStatus(200)
            ->assertSee(json_encode($this->advertsController->index($request)));


        //with data
        $data = [
            'per_page' => 20,
            'order_by' => 'lowest_price'
        ];
        $request = Request::create('', 'GET', $data);
        $this->json('GET', '/api/announcements', $data)
            ->assertStatus(200)
            ->assertSee(json_encode($this->advertsController->index($request)));
    }
}
