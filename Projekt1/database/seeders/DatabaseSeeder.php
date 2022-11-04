<?php

namespace Database\Seeders;


use App\Models\Listing;
use App\Models\Types;
use App\Models\Events;
use App\Models\Processes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        \App\Models\User::factory(5)->create();

     

        
        Types::create(
            [
                'name' => 'party',
                'color' => 'red'                
            ]);

        Types::create(
                [
                    'name' => 'holiday',
                    'color' => 'yellow'                
                ]);

        Types::create(
                    [
                        'name' => 'training',
                        'color' => 'blue'                
                    ]);

        Events::create(
            [
                'title' => 'Halloween Party',
                'date' => '2022-10-30',
                'description' => 'Every year party for all employees',
                'long_description' => 'Join us for a Dreadful Evening. The nightmare begins at 7 p.m.',
                'type_id' => '1'
            ]
            );
        Processes::create(
                [
                    'title' => 'Boat trip',
                    'start_date' => '2022-07-27',
                    'end_date' => '2022-07-30',
                    'description' => 'It was an amazing journey',
                    'long_description' => 'Boat trip took place in Mazury - Mikołajki',
                    'type_id' => '1'
                ]
                );

           

       
       
    }
}
