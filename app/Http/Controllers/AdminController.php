<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Contact;
use App\Models\Subscribers;
use App\Models\Order;


class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $orders=Order::latest()->paginate(3);
        $ordersCount=Order::count();
        $subsCount=Subscribers::count();
        $userCount=User::count();
        $submissions = Contact::latest()->paginate(3);
        $subscriptions = Subscribers::latest()->paginate(3);
        return view('adminpanel.home', compact('userCount','ordersCount','submissions','subscriptions','subsCount','orders'));

    } //end  method
public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }//end  method
}
