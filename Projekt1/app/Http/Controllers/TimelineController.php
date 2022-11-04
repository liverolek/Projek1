<?php

namespace App\Http\Controllers;


use App\Models\Events;
use App\Models\Processes;
use App\Models\Timeline;

use Illuminate\Http\Request;

class TimelineController extends Controller
{


   // Show all listings
   public function timeline() {
    return view('timeline.index1', [
        'events' => Events::orderBy('date', 'DESC')->get(),
        'processes' => Processes::all()
    ]
    );

}

}