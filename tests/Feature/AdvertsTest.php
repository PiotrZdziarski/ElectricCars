<?php

namespace Tests\Feature;

use App\Advert;
use App\Http\Controllers\AdvertsController;
use App\Http\Resources\AdvertResource;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdvertsTest extends TestCase
{
    /**
     * @var AdvertsController
     */
    private $advertsController;
    private $index;

    /**
     * Set up AdvertController
     */
    public function setUp()
    {
        parent::setUp();
        $this->advertsController = new AdvertsController();
        $this->index = $this->advertsController->index();
    }

    /**
     * test index method from AdvertController
     */
    public function testIndexMethod()
    {
        $adverts = Advert::take(12)->get();

        $this->get('/api/adverts/12')
            ->assertStatus(200)
            ->assertSee($adverts);

        $this->get('/api/adverts')
            ->assertStatus(200)
            ->assertSee($adverts);

        $this->json('GET', '/api/adverts')
            ->assertSee(json_encode($this->index));
    }
}
