<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TicketTest extends TestCase
{
    use RefreshDatabase;

    // set variable
    protected $event, $ticket;


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

        $this->ticket = Factory(Ticket::class)->create([
            'event_id' => $this->event->id,
            'amount' => 2000,
            'published' => 'Yes'
        ]);
    }

    /**
     * A basic feature test example.
     * @test
     * @group TicketTest
     * @return void
     */
    public function getTicket()
    {
        $getTicket = $this
            ->get('/ticket')
            ->assertStatus(200);
    }
}
