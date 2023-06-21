<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public  function index(){

        // Để tránh SQL injection thì cần truyền id vào theo cách như dưới đây
        // $posts = DB::select('SELECT * FROM posts WHERE id = :id',
        // [
        //     'id' => 3
        // ]);

        // Cách 2 (dùng trong cả trường hợp lấy ra title)
        $posts = DB::table('posts')
                    ->where('id', '<' ,1)
                    ->orWhere('id', '>=' ,2)
                    ->select('title')
                    ->get();
    
        // Insert new posts
        // $posts = DB::table('posts')
        //             ->insert([
        //                 'title' => 'New Post',
        //                 'body' => 'New Post Body',
        //             ]);

        // Update posts
        // $posts = DB::table('posts')
        //             ->where('id', '=', 2)
        //             ->update([
        //                 'title' => 'Update Post Title',
        //             ]);


        // Delete posts 
        // $posts = DB::table('posts')
        //             ->where('id', '=',1)
        //             ->delete();

        dd($posts);

    }
}
