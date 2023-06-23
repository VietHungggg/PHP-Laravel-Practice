<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

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
        $categories = Category::all();
        return view('foods.create')->with('categories',$categories);
    }

    public function store(Request $request){

        // Custom validation request method
        // public function store(CreateValidationRequest $request){

        // dd($request->all());
        // Image validation 
        // Lấy ra đuôi file 
        // dd($request->file('image')->guessExtension());
        // Check original name
        // dd($request->file('image')->getClientOriginalName());
        // Check type
        // dd($request->file('image')->getMimeType());
        // Get size
        // dd($request->file('image')->getSize());

        $request ->validate([
            'name' => 'required',
            'count' => 'required | integer | min:0 | max:200',
            'description' => 'required',
            'image' => 'required | mimes:jpg,png,gif,jpeg|max:10000000000'
        ]);
        $generatedImageName = 'images-' 
                                .time()
                                .'-'.$request->name
                                .'.'.$request->image->extension();
        // dd($generatedImageName);

        // Chuyền hình ảnh đến thư mục public bên trong project
        $request->image->move(public_path('images'),$generatedImageName);

        // dd($request->all());
        // Custom validation
        // $request->validated();


        // Cách 1
        // $foods = new Food();
        // $foods->name = $request->input('name');
        // $foods->count = $request->input('count');
        // $foods->description = $request->input('description');

        // Cách 2

        // Validate
        // $request->validate([
        //     // 'name' =>'required | unique:foods',
        //     'name' =>new Uppercase,
        //     'description' =>'required| integer | min:1, maximum:1000',
        //     'count'=>'required',
        // ]);

        $foods = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' =>$generatedImageName,
        ]);
        $foods->save();
        return redirect('/foods');
    }

    public function edit($id) {
        $foods = Food::find($id);
        $categories = Category::all();
        return view('foods/edit')->with('foods', $foods)->with('categories', $categories);
    }

    // public function update(Request $request, $id) {
    public function update(Request $request, $id) {

        $request ->validate([
            'name' => 'required',
            'count' => 'required | integer | min:0 | max:200',
            'description' => 'required',
            'image' => 'required | mimes:jpg,png,gif,jpeg|max:10000000000'
        ]);
        $generatedImageName = 'images-' 
                                .time()
                                .'-'.$request->name
                                .'.'.$request->image->extension();
        // dd($generatedImageName);

        // Chuyền hình ảnh đến thư mục public bên trong project
        $request->image->move(public_path('images'),$generatedImageName);

        $foods = Food::where('id', $id)
                    ->update([
                        'name' => $request->input('name'),
                        'count' => $request->input('count'),
                        'description' => $request->input('description'),
                        'category_id' => $request->input('category_id'),
                        'image_path' =>$generatedImageName,
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
        $category = Category::find($foods->category_id);
        $foods->category = $category;
        // dd($foods);
        return view('foods.show')->with('foods', $foods);
    }

}
