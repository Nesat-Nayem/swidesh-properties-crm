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

        $request->validate(
            [
                'title' => 'required',
                'full_name' => 'required',
                'account' => 'required',
                'email' => 'required|email',

                'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
                'postal_code' => ['required', 'regex:/^\d{6}$/'],
            ],
            [
                'telephone.regex' => 'The telephone number must be a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.',
                'postal_code.regex' => 'The zip code must be a valid 6-digit Indian PIN code.',
            ]
        );

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
        $request->validate(
            [
                'title' => 'required',
                'full_name' => 'required',
                'account' => 'required',
                'email' => 'required|email',
                'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
                'postal_code' => ['required', 'regex:/^\d{6}$/']
            ],
            [
                'telephone.regex' => 'The telephone number must be a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.',
                'postal_code.regex' => 'The zip code must be a valid 6-digit Indian PIN code.'

            ]
        );

        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
