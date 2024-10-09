<?php

namespace App\Http\Controllers;

use App\Models\Followup;
use Illuminate\Http\Request;

class FollowupController extends Controller
{
    public function index()
    {
        $followups = Followup::paginate(10);
        return view('crm.followup.index', compact('followups'));
    }

    public function create()
    {
        return view('crm.followup.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'parent_type' => 'required',
            'organization_name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'duration' => 'required',
            'outcome' => 'nullable',
            'description' => 'nullable',
            'status' => 'required',
        ]);

        Followup::create($validated);

        return redirect()->route('followups.index')->with('success', 'Followup created successfully.');
    }

    public function show(Followup $followup)
    {
        return view('crm.followup.show', compact('followup'));
    }

    public function edit(Followup $followup)
    {
        return view('crm.followup.edit', compact('followup'));
    }

    public function update(Request $request, Followup $followup)
    {
        $validated = $request->validate([
            'parent_type' => 'required',
            'organization_name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'duration' => 'required',
            'outcome' => 'nullable',
            'description' => 'nullable',
            'status' => 'required',
        ]);

        $followup->update($validated);

        return redirect()->route('followups.index')->with('success', 'Followup updated successfully.');
    }

    public function destroy(Followup $followup)
    {
        $followup->delete();
        return redirect()->route('followups.index')->with('success', 'Followup deleted successfully.');
    }
}
