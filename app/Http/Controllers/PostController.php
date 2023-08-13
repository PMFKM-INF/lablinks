<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::latest()->paginate(4);

        return view('adminpanel.post.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpanel.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated());

        // Image
        if($request->hasFile('image')) {
            foreach($request->file('image') as $key => $image) {
                $name = $key.time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/images/', $name);

                Image::create([
                    'image' => $name,
                    'post_id' => $post->id,
                ]);
            }
        }

        return redirect()->route('post.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('front2.single', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('adminpanel.post.edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
    // Update the post
        $post->update($request->validated());

    // Handle the image upload
        if($request->hasFile('image')) {
        // delete old images
            foreach($post->images as $image) {
            // remove the old file from the storage
                if(file_exists(public_path('/images/' . $image->image))){
                unlink(public_path('/images/' . $image->image));
                }

            // delete the image from the database
                $image->delete();
         }

            // upload new images
            foreach($request->file('image') as $key => $image) {
                $name = $key.time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/images/', $name);

            // Create and save the new Image
                Image::create([
                'image' => $name,
                'post_id' => $post->id,
            ]);
        }
    }

    return redirect()->route('post.index')->with('success','Post updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        foreach ($post->images as $image) {
            // delete the image file
            if (file_exists(public_path('images/' . $image->image))){
                unlink(public_path('images/' . $image->image));
            }

            // delete the image from the database
            $image->delete();
        }
        $post->delete();
        return redirect()->route('post.index')->with('success','Post deleted successfully.');
    }

}
