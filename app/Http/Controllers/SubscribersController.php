<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use App\Http\Requests\StoreSubscribersRequest;
use App\Http\Requests\UpdateSubscribersRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubscribersController extends Controller
{
    public function Subscribe(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Create a new subscriber
        Subscribers::create([
            'email' => $request->email,
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Successfully subscribed!');
    }

    public function unsubscribe(Subscribers $subscription)
    {
        // Delete the subscriber record
        $subscription->delete();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Successfully unsubscribed!');
    }
    public function generateReport()
    {
        // Retrieve all subscribed emails
        $subscribers = Subscribers::pluck('email')->toArray();

        // Generate the report content
        $reportContent = implode("\n", $subscribers);

        // Set the response headers for downloading the report
        $headers = [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'attachment; filename="subscribers_report.txt"',
        ];

        // Create the response with the report content and headers
        $response = new Response($reportContent, 200, $headers);

        return $response;
    }
}
