<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    public function index(){
       $foods = Food::all();

        // Search theo trường
        // $foods = Food::where ('name', '=', 'sushi')
        //             ->firstOrFail();

       return view('foods.index',[
            'foods' => $foods,
       ]);
    }

    public function create(){
        return view('foods.create');
    }

    public function store(Request $request){
        $foods = new Food();
        $foods->name = $request->input('name');
        $foods->count = $request->input('count');
        $foods->description = $request->input('description');
        $foods->save();
        return redirect('/foods');
    }

}
