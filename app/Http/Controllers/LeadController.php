<?php

namespace App\Http\Controllers;


use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        // $leads = Lead::all();
        $leads = Lead::paginate(10); // or whatever number of items per page you want
//  dd($leads);
        return view('crm.leads.index', compact('leads'));
    }

    public function hotLeads()
{
    $leads = Lead::where('phone_type', 'Hot Call')->paginate(10);
    return view('crm.leads.hot', compact('leads'));
}
    public function coldLeads()
{
    $leads = Lead::where('phone_type', 'Cold Call')->paginate(10);
    return view('crm.leads.cold', compact('leads'));
}


    public function create()
    {
        // return view('crm.leads.create');
        $lead = new Lead();
        return view('crm.leads.create', compact('lead'));
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'full_name' => 'required',
            'phone_type' => 'required',
            'telephone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'zip_code' => ['required', 'regex:/^\d{6}$/'],
            'email' => 'required|email',
            'lead_value' => 'required|numeric',
            'assigned' => 'required',
            'status' => 'required',
            'notes' => 'required',
            'source' => 'required',
            'category' => 'required',
            'total_budget' => 'required|numeric',
            'target_date' => 'required|date',
            'content_type' => 'required',
            'company_name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
      
            'country' => 'required',
            'last_contacted' => 'nullable|date',
        ], [
            'telephone.regex' => 'The telephone number must be a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.',
            'zip_code.regex' => 'The zip code must be a valid 6-digit Indian PIN code.',
        ]);

        Lead::create($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead created successfully.');
    }

    public function show(Lead $lead)
    {
        return view('crm.leads.show', compact('lead'));
    }

    public function edit(Lead $lead)
    {
        // dd($lead);
        return view('crm.leads.edit', compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        $request->validate([
            'title' => 'required',
            'full_name' => 'required',
            'phone_type' => 'required',
            'telephone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'zip_code' => ['required', 'regex:/^\d{6}$/'],
            'email' => 'required|email',
            'lead_value' => 'required|numeric',
            'assigned' => 'required',
            'status' => 'required',
            'notes' => 'required',
            'source' => 'required',
            'category' => 'required',
            'total_budget' => 'required|numeric',
            'target_date' => 'required|date',
            'content_type' => 'required',
            'company_name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'last_contacted' => 'nullable|date',
        ], [
            'telephone.regex' => 'The telephone number must be a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.',
            'zip_code.regex' => 'The zip code must be a valid 6-digit Indian PIN code.',
        ]);

        $lead->update($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead updated successfully.');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
    }
    

}
