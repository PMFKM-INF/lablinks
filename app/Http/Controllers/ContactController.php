<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

        public function index()
        {
            return view('front2.contact');
        }

        /**
         * Write code on Method
         *
         * @return response()
         */
        public
        function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required'
            ]);

            Contact::create($request->all());

            return redirect()->route('contact.us.index')
                ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
        }
}
