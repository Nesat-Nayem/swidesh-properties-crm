<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::paginate(10);
        return view('crm.payment.index', compact('payments'));
    }

    public function create()
    {
        return view('crm.payment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_id' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'payment_method' => 'required',
            'transaction_id' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment created successfully.');
    }

    public function show(Payment $payment)
    {
        return view('crm.payment.show', compact('payment'));
    }

    public function edit(Payment $payment)
    {
        return view('crm.payment.edit', compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'invoice_id' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'payment_method' => 'required',
            'transaction_id' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $payment->update($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully.');
    }
}
