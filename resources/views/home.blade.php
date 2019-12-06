@extends('layouts.app')

@section('content')
<main>
  <div class="welcome h-screen" style="background-image: url('https://images.unsplash.com/photo-1522327646852-4e28586a40dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1502&q=80')">
    <div class="p-12">
      <div class="intro mb-5">
        <h3 class="text-2xl md:text-4xl text-white font-sans">
          <span class="font-bold">TicketBeast!</span> make your dream come true.
        </h3>
        <p class="text-white font-serif">
          What is <span class="font-bold">TicketBeast?</span> a platform who can buy a ticket for an event.
        </p>
      </div>
      <div class="offer">
        <a
          href="#"
          class="mr-2 p-3 bg-teal-500 hover:bg-teal-700 rounded-sm text-white font-sans font-semibold"
        >
          Order Ticket
        </a>
      </div>
    </div>
  </div>
</main>
@endsection
