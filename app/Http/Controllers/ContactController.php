<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10); 
        return view('crm.contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('crm.contact.create');
    }

    public function store(Request $request)
    {
        // Dump and die to inspect the incoming request data
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'full_name' => 'required',
            'account' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        // Dump and die to inspect the validated data
        // dd($request->all());

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    public function show(Contact $contact)
    {
        return view('crm.contact.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('crm.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'title' => 'required',
            'full_name' => 'required',
            'account' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
