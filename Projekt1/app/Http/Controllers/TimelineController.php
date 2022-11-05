<?php

namespace App\Http\Controllers;


use App\Models\Events;
use App\Models\Processes;
use App\Models\Timeline;
use App\Models\Types;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;




class TimelineController extends Controller
{




    // Show all listings
    public function timeline()
    {
        function split_process(array $process)
        {
          
            $start_event = new Events(
                [
                    'title' => $process["title"],
                    'date' => $process["start_date"],
                    'type_id' => $process["type_id"],
                    'description' => "Process started!" . "\n" . $process["description"],
                    'long_description' => $process["long_description"]
                ]
                );

            $end_event = new Events(
                [
                    'title' => $process["title"],
                    'date' => $process["end_date"],
                    'type_id' => $process["type_id"],
                    'description' => "Process ended! " . $process["description"],
                    'long_description' => $process["long_description"]
                ]
                );

            return [$start_event, $end_event];

        }

        $processes = array_merge(...array_map('App\Http\Controllers\split_process', Processes::all()->toArray()));
       
       
        $events = Events::all()->toArray();

        $all_events = array_merge($processes, $events);
        // dd($all_events);
        usort(
            $all_events, function ($a, $b) {
                if ($a["date"] == $b["date"]) {
                    return 0;
                }
                return ($a["date"] > $b["date"]) ? -1 : 1;
            }
        );

       


        

        // dd($all_events);


        return view(
            'timeline.index1',
            [
                'events' => $all_events,

                'events1' => Events::all(),
                'types' => Types::all(),
                
            ]
        );

    }


}