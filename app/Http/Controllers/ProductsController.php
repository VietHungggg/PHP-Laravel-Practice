<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use tidy;

class ProductsController extends Controller
{
    // Sample
        // public function index(){
    //     return view('products.index');
    // }

    // Pass data to view (sử dụng compact)
    public function index(){
        $title = "Laravel Products Practices";
        $info = [
            'name' => 'Bui Viet Hung',
            'age' => 26,
        ];
        return view('products.index', compact('title', 'info'));
    }

    // Truyền data bằng with
    // public function index(){
    //     $name = 'Bui Viet Hung';
    //     return view('products.index')->with('name', $name);
    // }

    public function about(){
        return "This is the Home Page";
    }

    // Tham số là kiểu int
    // public function detail($id){
    //     return 'Product ID = '.$id;
    // }

    // Tham số là kiêu string
    // public function detail($productName, $id){
    //     return "Product name : ".$productName."<br>".
    //     "Product ID : ".$id;
    // }

    // Tham số nhận vào là 1 array
    // public function detail($id){
    //     return view('products.index',[
    //         'products' => [
    //             'name' => 'Exciter',
    //             'year' => '2023',
    //         ]
    //     ]);
    // }



}
