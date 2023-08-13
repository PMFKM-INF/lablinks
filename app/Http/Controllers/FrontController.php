<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class FrontController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->paginate(8);
        return view('front2.home', compact('posts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function imageEditing()
    {
        $images = Post::where('Category', 'Image Editing')->latest()->take(4)->get();
        return view('front2.services.image', compact('images'));
    }
    public function illustration()
    {
        $illustration = Post::where('Category', 'Custom Illustration')->latest()->take(4)->get();
        return view('front2.services.illustration', compact('illustration'));
    }

    public function uiux()
    {
        $webDevelopmentPosts = Post::where('Category', 'Web Development')->latest()->take(3)->get();
        return view('front2.services.uiux', compact('webDevelopmentPosts'));
    }


    public function portfolio(Request $request)
    {
        if($request->has('Category')) {
            $posts = Post::where('Category', $request->Category)->latest()->get();
        }
        else{
            $posts = Post::latest()->get();
        }

        return view('front2.portfolio', compact('posts'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('front2.single', compact('post'));
    }

}
