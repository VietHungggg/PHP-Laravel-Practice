<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/user', function () {
//     return "This is user page";
// });

// // Response trả về là 1 object *array*
// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => 'BVH',
//         'age' => 26,
//     ]);
// });

// // Redirect to URL (trong trường hợp này là chuyển về trang welcome)
// Route::get('/todo', function () {
//     return redirect ('/');
// });

Route::get('/products',[
    ProductsController::class,
    'index',
]);

// Router có truyền tham số (validation theo int)
// Route::get('/products/{id}',[
//     ProductsController::class,
//     'detail',
// ])->where('id', '[0-9]+');

// Router có truyền tham số (validation theo string)
Route::get('/products/{productName}/{id}',[
    ProductsController::class,
    'detail',
])->where([
    'productName' => '[a-zA-Z0-9]+',
    'id' => '[a-zA-Z0-9]+',
]);










