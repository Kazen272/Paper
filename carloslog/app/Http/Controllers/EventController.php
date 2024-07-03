<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Event;

class EventController extends Controller

{
    public function entregas(){
        
        $events = Event::all();

        return view('entregas', ['events' => $events]);
    }





    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = new Event;

        $event->fleet = $request->fleet;
        $event->adress_pickup = $request->adress_pickup;
        $event->adress_delivery = $request->adress_delivery;
        $event->client_name = $request->client_name;
        $event->order_price = $request->order_price;
        $event->private = $request->private;

        $event->save();

        return redirect('/entregas');
    }
}


