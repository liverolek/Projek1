<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Types;
use Illuminate\Http\Request;

class EventController extends Controller
{


// Show all listings
public function index(){

    return view('listings.index', [       
        'events' => Events::all()            
        
    ]);  
    }

 //Show single event    
 public function show_event(Events $event){
    return view ('events.show-event', [
        'event' => $event
    ]
    );
}

//Show Create Event Form
public function create_event(){
    
    $types=Types::pluck('name', 'id');
    // dd($types);

    return view ('events.create-event', ['types' => $types]);
}

//Store Events Data
public function store_events(Request $request){
        $formFields2 = $request->validate([
            'title' => 'required', 'unique',
            'date' => 'required',
            'type_id' => 'required',
            'description' => 'required',
            'long_description' => 'required'
        
    ]);

    if($request->hasFile('logo')){
        $formFields2['logo'] = $request->file('logo')->store('logos', 'public');
    }

    Events::create($formFields2);

    return redirect('/')->with('message', 'Event Created successfully');
    //return back()->with('message', 'Event Created successfully');
}

//Show Edit Event Form
public function edit_event(Events $event){

    $types=Types::pluck('name', 'id');

    return view('events.edit-event', ['event' => $event], ['types' => $types]);
}

//Update Events Data
public function update_event(Request $request, Events $event){
        
    $formFields2 = $request->validate([
        'title' => 'required',
        'date' => 'required',
         'type_id' => 'required',
        'description' => 'required',
        'long_description' => 'required'

    ]);

    if($request->hasFile('logo')){
        $formFields2['logo'] = $request->file('logo')->store('logos', 'public');
    }
 
    $event->update($formFields2);

    return back()->with('message', 'Event updated successfully');
}

 //Delete Event
 public function destroy_event(Events $event){
    $event->delete();
    return redirect('/')->with('message', 'Event deleted successfully');
}




}