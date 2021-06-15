<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
class PersonController extends Controller
{
    function index(){
    $data = Person::all();
    return response()->json(["data"=>$data],200);

    }

    function store(Request $request){
        $request ->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required',
            ]
        );
        $person = Person::create($request->all());
        return response()->json(["data"=>$person],200);
    }

    function show($id){
        return Person::findOrFail($id);
     }
}
