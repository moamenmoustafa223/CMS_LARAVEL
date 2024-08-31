<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactFormResponse;
use App\Models\ContactResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
      
        $contact = Contact::all();

        
        $responses  = ContactResponse::all(); 

        return view('admin.contact')->with([
            'contact' => $contact,
            'responses' => $responses,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'phone'       => 'required|numeric',
            'whatsapp'    => 'required|numeric',
            'email'       => 'required|email',
            'address_en'  => 'required|string',
            'address_ar'  => 'required|string',
            'address_link'=> 'nullable|url',
        ]);

        // Find the contact record
        $contact = Contact::findOrFail($id);

        // Update the contact record
        $contact->update([
            'phone'       => $request->phone,
            'whatsapp'    => $request->whatsapp,
            'email'       => $request->email,
            'address_en'  => $request->address_en,
            'address_ar'  => $request->address_ar,
            'address_link'=> $request->address_link,
        ]);

        return redirect()->route('contact.index')->with('success', 'Contact information updated successfully.');
    }

    // public function submitContactForm(Request $request)
    // {
    //     // Validate the form inputs
    //     $request->validate([
    //         'name'    => 'required|string|max:255',
    //         'phone'   => 'required|numeric',
    //         'email'   => 'required|email|max:255',
    //         'message' => 'required|string',
    //     ]);

    //     // Create a new contact form response
    //     ContactFormResponse::create([
    //         'name'    => $request->input('name'),
    //         'phone'   => $request->input('phone'),
    //         'email'   => $request->input('email'),
    //         'message' => $request->input('message'),
    //     ]);

    //     // Redirect back with a success message
    //     return redirect()->back()->with('success', 'Your message has been sent successfully!');
    // }
}
