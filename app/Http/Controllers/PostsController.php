<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use DB;

class PostsController extends Controller
{
    public function show($slug)
    {
        // $post = Post::where('slug', $slug)->firstOrFail();

        // $post = DB::table('posts')->where('slug', $slug)->first();

        // dd($post);

        // $posts = [
        //     'my-first-post' => 'Hello, this is my first blog post!',
        //     'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        // ];
            
        // if(! $post) {
        //     abort(404);
        // }

    
        return view('test2', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    
    }
}
