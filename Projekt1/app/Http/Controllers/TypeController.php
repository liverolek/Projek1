<?php

namespace App\Http\Controllers;


use App\Models\Types;
use Illuminate\Http\Request;

class TypeController extends Controller
{


     // Show all types
     public function all_types() {
        return view('types.all-types', [
            'types' => Types::all()
        ]
        );
    }

 //Show single type  
 public function show_type(Types $type){

    return view ('types.show-type', [
    'type' => $type
    ]
    );
}

    //Show Create Type Form
    public function create_type(){

        return view ('types.create-type');
    
    }

    //Store Types Data
     public function store_types(Request $request){
        
        $formFields3 = $request->validate([
            'name' => ['required', 'unique:types'],
            'color' => 'required'

           

        ]);

    
        Types::create($formFields3);

        return redirect('/types')->with('message', 'New type created successfully');
        

    }

     //Show Edit Type Form
     public function edit_type(Types $type){
        return view('types.edit-type', ['type' => $type]);
    }

     //Update Types Data
     public function update_type(Request $request, Types $type){
        
        $formFields3 = $request->validate([
            'name' => ['required', 'unique:types'],
            'color' => 'required'

        ]);

        if($request->hasFile('logo')){
            $formFields1['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $type->update($formFields3);

        return back()->with('message', 'Type updated successfully');
    }

     //Delete Type
     public function destroy_type(Types $type){
        $type->delete();
        return redirect('/')->with('message', 'Type deleted successfully');
    }
    
}