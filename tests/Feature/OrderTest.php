<?php

namespace Tests\Feature;

use Mail;
use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Event;
use App\Models\Ticket;
use App\Mail\OrderTicket;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    // set variable
    protected $event, $ticket;

    public function setUp(): void
    {
        parent::setUp();

        Mail::fake();

        // make fake event data
        $this->event = Factory(Event::class)->create([
            'name' => 'Djakarta Warehouse Project',
            'slug' => 'djakarta-warehouse-project',
            'price' => 2500000,
            'date' => Carbon::parse('+1 week'),
            'detail' => 'For infomation please contact @djakartawp',
            'image' => 'djakarta-warehouse-project.png'
        ]);

        // make fake ticket data
        $this->ticket = Factory(Ticket::class)->create([
            'event_id' => $this->event->id,
            'amount' => 2000,
            'published' => 'Yes'
        ]);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicket()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => $this->ticket->id,
            'name' => 'Bayu Bimantara',
            'email' => 'bayubimantarar@gmail.com',
            'phone' => '0895332055486',
            'address' => 'Tatar Wangsakerta Kota Baru Parahyangan',
            'quantity' => 1
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseHas('order', $orderTicket);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketEmptyCustomer()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => NULL,
            'name' => NULL,
            'email' => NULL,
            'phone' => NULL,
            'address' => NULL,
            'quantity' => NULL
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseMissing('order', $orderTicket);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketEmptyName()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => NULL,
            'name' => 'Bayu Bimantara',
            'email' => 'bayubimantarar@gmail.com',
            'phone' => '0895332055486',
            'address' => 'Tatar Wangsakerta Kota Baru Parahyangan',
            'quantity' => 1
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseMissing('order', $orderTicket);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketEmptyTicket()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => $this->ticket->id,
            'name' => NULL,
            'email' => 'bayubimantarar@gmail.com',
            'phone' => '0895332055486',
            'address' => 'Tatar Wangsakerta Kota Baru Parahyangan',
            'quantity' => 1
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseMissing('order', $orderTicket);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketEmptyEmail()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => $this->ticket->id,
            'name' => 'Bayu Bimantara',
            'email' => NULL,
            'phone' => '0895332055486',
            'address' => 'Tatar Wangsakerta Kota Baru Parahyangan',
            'quantity' => 1
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseMissing('order', $orderTicket);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketEmptyPhone()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => $this->ticket->id,
            'name' => 'Bayu Bimantara',
            'email' => 'bayubimantarar@gmail.com',
            'phone' => NULL,
            'address' => 'Tatar Wangsakerta Kota Baru Parahyangan',
            'quantity' => 1
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseMissing('order', $orderTicket);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketEmptyAddress()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => $this->ticket->id,
            'name' => 'Bayu Bimantara',
            'email' => 'bayubimantarar@gmail.com',
            'phone' => '0895332055486',
            'address' => NULL,
            'quantity' => 1
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseMissing('order', $orderTicket);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketEmptyQuantity()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => $this->ticket->id,
            'name' => 'Bayu Bimantara',
            'email' => 'bayubimantarar@gmail.com',
            'phone' => '0895332055486',
            'address' => 'Tatar Wangsakerta Kota Baru Parahyangan',
            'quantity' => NULL
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseMissing('order', $orderTicket);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketSuccessSendingNotificationEmail()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => $this->ticket->id,
            'name' => 'Bayu Bimantara',
            'email' => 'bayubimantarar@gmail.com',
            'phone' => '0895332055486',
            'address' => 'Tatar Wangsakerta Kota Baru Parahyangan',
            'quantity' => 1
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->event->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseHas('order', $orderTicket);

        // sending email to customer
        Mail::to('bayubimantarar@gmail.com')->send(new OrderTicket);

        // check email has sent or not
        Mail::assertSent(OrderTicket::class);
    }

    /**
     * A basic feature test example.
     * @test
     * @group OrderTest
     * @return void
     */
    public function orderTicketFailedSendingNotificationEmail()
    {
        // set order ticket data
        $orderTicket = [
            'ticket_id' => $this->ticket->id,
            'name' => 'Bayu Bimantara',
            'email' => 'bayubimantarar@gmail.com',
            'phone' => '0895332055486',
            'address' => 'Tatar Wangsakerta Kota Baru Parahyangan',
            'quantity' => 1
        ];

        // post order ticket
        $this
            ->post('/order/'.$this->ticket->id, $orderTicket)
            ->assertStatus(302);

        // check order ticket data
        $this
            ->assertDatabaseHas('order', $orderTicket);

        // sending email to customer
        Mail::assertNothingSent();

        // check email has sent or not
        Mail::assertNotSent(OrderTicket::class);
    }
}
