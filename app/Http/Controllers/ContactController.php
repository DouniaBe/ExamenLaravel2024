<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validatedData);

        return redirect()->route('contact.create')->with('success', 'Your message has been sent successfully!');
    }

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }

    public function respond(Request $request, $id)
    {
        $validatedData = $request->validate([
            'response' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->response = $validatedData['response'];
        $contact->save();

        return redirect()->route('admin.contacts.show', $contact->id)->with('success', 'Response sent successfully!');
    }
}