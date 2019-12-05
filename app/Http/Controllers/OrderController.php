<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderTicketRequest;

class OrderController extends Controller
{
    public function order(OrderTicketRequest $request)
    {
        // $ticketid
        $createOrder = Order::create($request->all());
        // dd($createOrder);

        return redirect('/ticket');
    }
}
