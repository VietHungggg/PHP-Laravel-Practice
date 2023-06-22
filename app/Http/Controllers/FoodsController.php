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

        // Cách 1
        // $foods = new Food();
        // $foods->name = $request->input('name');
        // $foods->count = $request->input('count');
        // $foods->description = $request->input('description');

        // Cách 2
        $foods = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
        ]);
        $foods->save();
        return redirect('/foods');
    }

    public function edit($id) {
        $foods = Food::find($id);
        return view('foods/edit')->with('foods', $foods);
    }

    public function update(Request $request, $id) {
        $foods = Food::where('id', $id)
                    ->update([
                        'name' => $request->input('name'),
                        'count' => $request->input('count'),
                        'description' => $request->input('description'),
                    ]);
        return redirect('/foods');
    }

    public function destroy($id) {
        $foods = Food::find($id);
        $foods->delete();
        return redirect('/foods');
    }

    public function show($id){
        $foods = Food::find($id);
        return view('foods.show')->with('foods', $foods);
    }

}
