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

    // Show timeline
    public function timeline()
    {

        //Divided processes for 2 events
        function split_process(array $process)
        {

            $start_event = new Events(
                [
                    'title' => $process["title"],
                    'date' => $process["start_date"],
                    'logo' => $process["logo"],
                    'type_id' => $process["type_id"],
                    'description' => $process["description"],
                    'long_description' => $process["long_description"],
                    'process' => "true_start",
                    'id' => $process["id"]
                ]
                );

            $end_event = new Events(
                [
                    'title' => $process["title"],
                    'date' => $process["end_date"],
                    'logo' => $process["logo"],
                    'type_id' => $process["type_id"],
                    'description' => $process["description"],
                    'long_description' => $process["long_description"],
                    'process' => "true_end",
                    'id' => $process["id"]
                ]
                );

            return [$start_event, $end_event];

        }

        //Create array of events
        function event(array $process)
        {

            $event1 = new Events(
                [
                    'title' => $process["title"],
                    'date' => $process["date"],
                    'logo' => $process["logo"],
                    'type_id' => $process["type_id"],
                    'description' => $process["description"],
                    'long_description' => $process["long_description"],
                    'process' => "false",
                    'id' => $process["id"]
                ]
                );


            return [$event1];

        }


        //Merge all data in one array and sort it

        $processes = array_merge(...array_map('App\Http\Controllers\split_process', Processes::all()->toArray()));
        $events = array_merge(...array_map('App\Http\Controllers\event', Events::all()->toArray()));
        $all_events = array_merge($processes, $events);

        usort(
            $all_events, function ($a, $b) {
                if ($a["date"] == $b["date"]) {
                    return 0;
                }
                return ($a["date"] > $b["date"]) ? -1 : 1;
            }
        );

        return view(
            'timeline.index',
            [
                'events' => $all_events,
                'events1' => Events::all(),
                'types' => Types::all(),
            ]
        );

    }

}