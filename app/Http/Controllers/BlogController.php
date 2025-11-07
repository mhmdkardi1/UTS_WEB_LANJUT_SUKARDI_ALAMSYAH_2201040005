<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    // Halaman home isinya banyak posts
    public function home()
    {
        $posts = Post::data();
        $totalposts = count($posts);

        return view('home', compact('posts', 'totalposts'));
    }

    // Halaman single post (detail satu post)
    public function show($id)
    {
        $post = Post::caridata($id);

        if (!$post) {
            abort(404);
        }

        return view('post', compact('post'));
    }

    // Halaman tentang
    public function about()
    {
        $info = [
            'name' => 'deva',
            'bio'  => 'penulis.'
        ];

        return view('about', compact('info'));
    }
}
