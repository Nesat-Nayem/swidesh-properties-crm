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

        return view('crm.leads.index', compact('leads'));
    }

    public function create()
    {
        return view('crm.leads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'full_name' => 'required',
            'phone_type' => 'required',
            'telephone' => 'required',
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
            'zip_code' => 'required',
            'country' => 'required',
            'last_contacted' => 'nullable|date',
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
            'telephone' => 'required',
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
            'zip_code' => 'required',
            'country' => 'required',
            'last_contacted' => 'nullable|date',
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
