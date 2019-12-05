<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Event;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    // set variable
    protected $event;

    public function setUp(): void
    {
        parent::setUp();

        $this->event = Factory(Event::class)->create([
            'name' => 'Djakarta Warehouse Project',
            'slug' => 'djakarta-warehouse-project',
            'price' => 2500000,
            'date' => Carbon::parse('+1 week'),
            'detail' => 'For infomation please contact @djakartawp',
            'image' => 'djakarta-warehouse-project.png'
        ]);
    }

    /**
     * A basic feature test example.
     * @test
     * @group EventTest
     * @return void
     */
    public function getEvent()
    {
        // get event
        $this
            ->get('/event')
            ->assertStatus(200);
    }

    /**
     * A basic feature test example.
     * @test
     * @group EventTest
     * @return void
     */
    public function getEventDetail()
    {
        // get event detail
        $this
            ->get('/event/detail/'.$this->event->id)
            ->assertStatus(200);
    }
}
