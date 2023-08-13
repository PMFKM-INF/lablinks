<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class ImageController extends Controller
{
    public function store(Request $request)
{
    $this->validate($request, [
        'image' => 'required',
        'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    if($request->hasFile('image')) {
        foreach($request->file('image') as $image) {
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/images', $name);
            $data[] = $name;
        }
    }

    // you can also save the names of the images to your database if needed
    Image::insert(['image' => implode("|", $data)]);

    return back()->with('success', 'Your images has been successfully uploaded');
    }
    public function create()
    {
        return view('admin.post.image');
    }


}
