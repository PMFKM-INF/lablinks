<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->paginate(4);
        return view('adminpanel.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front2.services.orderImage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $order = Order::create($request->validated());

        // Image
        if($request->hasFile('image')) {
            foreach($request->file('image') as $key => $image) {
                $name = $key.time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/images/', $name);

                Image::create([
                    'image' => $name,
                    'order_id' => $order->id,
                ]);
            }
        }


        return redirect()->route('orders.create')->with('success', 'Order placed successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('adminpanel.orders.single', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('adminpanel.dashboard')->with('success', 'Post deleted successfully.');
    }
}
