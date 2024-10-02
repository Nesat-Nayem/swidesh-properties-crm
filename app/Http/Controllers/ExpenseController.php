<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::paginate(10);
        return view('crm.expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('crm.expenses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'description' => 'required',
            'user' => 'required',
            'client' => 'required',
            'project' => 'required',
            'amount' => 'required|numeric',
            'status' => 'required',
        ]);

        Expense::create($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense created successfully.');
    }

    public function show(Expense $expense)
    {
        return view('crm.expenses.show', compact('expense'));
    }

    public function edit(Expense $expense)
    {
        return view('crm.expenses.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'date' => 'required|date',
            'description' => 'required',
            'user' => 'required',
            'client' => 'required',
            'project' => 'required',
            'amount' => 'required|numeric',
            'status' => 'required',
        ]);

        $expense->update($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }
}
