<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(10);
        return view('crm.team.index', compact('teams'));
    }

    public function create()
    {
        return view('crm.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'position' => 'required',
            'role' => 'required',
            'email' => 'required|email',
            'last_seen' => 'nullable|date',
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
        ], [
            'phone.regex' => 'The telephone number must be a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.',
     ]);

        Team::create($request->all());

        return redirect()->route('teams.index')->with('success', 'Team member created successfully.');
    }

    public function show(Team $team)
    {
        return view('crm.team.show', compact('team'));
    }

    public function edit(Team $team)
    {
        return view('crm.team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'full_name' => 'required',
            'position' => 'required',
            'role' => 'required',
            'email' => 'required|email',

            'last_seen' => 'nullable|date',
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
        ], [
            'phone.regex' => 'The telephone number must be a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.',
     ]);

        $team->update($request->all());

        return redirect()->route('teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team member deleted successfully.');
    }
}
