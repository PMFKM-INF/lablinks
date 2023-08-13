<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Post;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->paginate(4);

        return view('adminpanel.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpanel.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $service = Service::create($request->validated());

        // Image
        if($request->hasFile('image')) {
            foreach($request->file('image') as $key => $image) {
                $name = $key.time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/images/', $name);

                Image::create([
                    'image' => $name,
                    'service_id' => $service->id,
                ]);
            }
        }

        return redirect()->route('service.index')->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $posts = Post::latest()->paginate(4);
        return view('front2.services.service', compact('service','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('adminpanel.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        // Update the service
        $service->update($request->validated());

        // Handle the image upload
        if($request->hasFile('image')) {
            // delete old images
            foreach($service->images as $image) {
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
                    'service_id' => $service->id,
                ]);
            }
        }

        return redirect()->route('service.index')->with('success','Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        foreach ($service->images as $image) {
            // delete the image file
            if (file_exists(public_path('images/' . $image->image))){
                unlink(public_path('images/' . $image->image));
            }

            // delete the image from the database
            $image->delete();
        }
        $service->delete();
        return redirect()->route('service.index')->with('success','Service deleted successfully.');
    }
}
