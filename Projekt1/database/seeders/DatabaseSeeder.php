<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Listing;
use App\Models\Types;
use App\Models\Events;
use App\Models\Processes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
       \App\Models\User::factory(1)->create();
    

        Types::create(
            [
                'name' => 'Party',
                'color' => 'red'
            ]
        );

        Types::create(
            [
                'name' => 'Learning',
                'color' => 'blue'
            ]
        );

        Types::create(
            [
                'name' => 'Trip',
                'color' => 'yellow'
            ]
        );

        Events::create(
            [
                'title' => 'Halloween Party',
                'date' => '2022-10-30',
                'logo' => 'logos/85WDcZAPtMkD9n2E1RxuFeDE3L8EbodMqHwW8ULV.jpg',
                'description' => 'Every year party for all employees!',
                'long_description' => 'Join us for a Dreadful Evening. The nightmare begins at 7 p.m.',
                'type_id' => '1'
            ]
        );

        Events::create(
            [
                'title' => 'Hackathon',
                'date' => '2022-10-04',
                'logo' => 'logos/p4k1bzDWExgpCo8lKSlpFFDBejtMFuRhGXnWugOZ.jpg',
                'description' => 'Laravel coding night!',
                'long_description' => 'Try your skills in Laravel.',
                'type_id' => '2'
            ]
        );
        Events::create(
            [
                'title' => 'Christmas Party',
                'date' => '2022-12-22',
                'logo' => 'logos/BeNH9NPLO02EAKDLkUtVYabmAvD847wfBaWdCxoC.jpg',
                'description' => 'Party for all employees!',
                'long_description' => 'Every year Christmas party with delicious food.',
                'type_id' => '1'
            ]
        );

        Processes::create(
            [
                'title' => 'Boat trip',
                'start_date' => '2022-07-27',
                'end_date' => '2022-07-30',
                'logo' => 'logos/W0rdPD3QPOrHCX6dORLOf8jJvYhbHZ5zNEjwAxir.jpg',
                'description' => 'It was an amazing journey!',
                'long_description' => 'Boat trip took place in Mazury - Mikołajki.',
                'type_id' => '3'
            ]
        );

        Processes::create(
            [
                'title' => 'Training days',
                'start_date' => '2022-10-12',
                'logo' => 'logos/fHqXS4NppEGtqpTJGsivfr5VbPM6wBe7Pjus1nEi.jpg',
                'end_date' => '2022-10-14',
                'description' => 'PHP course - for free!',
                'long_description' => 'This course is designed to introduce you to the theories, concepts, and ideas used in PHP.',
                'type_id' => '2'
            ]
        );

    }
}