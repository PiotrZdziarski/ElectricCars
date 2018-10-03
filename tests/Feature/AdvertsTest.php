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
        $adverts = Advert::take(12)->get();

        $this->get('/api/announcements/12')
            ->assertStatus(200)
            ->assertSee($adverts);

        $this->get('/api/announcements')
            ->assertStatus(200)
            ->assertSee($adverts);

        $this->json('GET', '/api/announcements')
            ->assertSee(json_encode($this->advertsController->index()));
    }
}
