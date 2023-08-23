<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::get();
        return view('admin.contact')->with([
            'contact' => $contact,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'address'     => 'required',
            'whatsapp'     => 'required|numeric',
            'email'     => 'required|email',
        ]);

        $post = Contact::findOrFail($id);
        $post->update([
            'address'     => $request->address,
            'whatsapp'     => $request->whatsapp,
            'email'     => $request->email,
        ]);

        return redirect()->route('contact.index')->with('success', 'Berhasil Update COntact');
    }
}
