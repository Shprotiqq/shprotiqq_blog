<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
//        dump($posts);
        $post = Post::find(1);
//        dump($post->title);
        foreach ($post->tags as $tag) {
//            dump($tag);
        }
        return view('home',compact('posts'));
    }

    public function apiAll()
    {
        return response()->json(Post::all());
    }

}
