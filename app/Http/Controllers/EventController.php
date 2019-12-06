<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * @return event data
     */
    public function index()
    {
        $events = Event::all();

        return view('/event', [
            'events' => $events
        ]);
    }

    /**
     * @param $id
     * @return event data
     */
    public function detail($id)
    {
        $event = Event::find($id);

        return response()->json($event, 200);
    }
}
