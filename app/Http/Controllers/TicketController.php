<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * @return ticket data
     */
    public function index()
    {
        $tickets = Ticket::with('event')->get();

        return response()->json($tickets, 200);
    }

    /**
     * @return single ticket data
     */
    public function detail($id)
    {
        $tickets = Ticket::with('event')->find($id);

        return response()->json($tickets, 200);
    }
}
