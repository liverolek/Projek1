<?php

namespace App\Http\Controllers;

use App\Models\Processes;
use App\Models\Types;
use Illuminate\Http\Request;

class ProcessController extends Controller
{

    //Show single process   
    public function show_process(Processes $process){

        return view ('processes.show-process', [
        'process' => $process
        ]
        );
    }

    //Show Create Process Form
    public function create_process(){

        $types=Types::pluck('name', 'id');

        return view ('processes.create-process', ['types' => $types]);
    }


     //Store Processes Data
     public function store_processes(Request $request){
        
        $formFields1 = $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required | after:start_date',
            'type_id' => 'required',
            'description' => 'required',
            'long_description' => 'required'
            
        ]);

        if($request->hasFile('logo')){
            $formFields1['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Processes::create($formFields1);

         
        return redirect('/')->with('message', 'Event Created successfully');
        
       
    }

      //Show Edit Process Form
      public function edit_process(Processes $process){

        $types=Types::pluck('name', 'id');

        return view('processes.edit-process', ['process' => $process], ['types' => $types]);
    }

     //Update Processes Data
     public function update_process(Request $request, Processes $process){
        
        $formFields1 = $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required | after:start_date',
             'type_id' => 'required',
            'description' => 'required',
            'long_description' => 'required'

        ]);

        if($request->hasFile('logo')){
            $formFields1['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $process->update($formFields1);

        return back()->with('message', 'Process updated successfully');
    }
        //Delete Process
        public function destroy_process(Processes $process){
            $process->delete();
            return redirect('/')->with('message', 'Process deleted successfully');
        }
}