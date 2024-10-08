<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Expense;
use App\Models\Lead;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Task;
use App\Models\Team;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function repoart()
    {

        return view('crm.report.index');
    }
    public function lead()
    {
        // $leads = Lead::all();
        $leads = Lead::paginate(10);
        return view('crm.report.lead', compact('leads'));
    }
    public function contact()
    {
        // $leads = Lead::all();
        $contacts = Contact::paginate(10);
        return view('crm.report.contact', compact('contacts'));
    }
    public function product()
    {
        // $leads = Lead::all();
        $products = Product::paginate(10);
        return view('crm.report.product', compact('products'));
    }
    public function Expence()
    {
        // $leads = Lead::all();
        $expenses = Expense::paginate(10);
        return view('crm.report.expence', compact('expenses'));
    }
    public function Payment()
    {
        // $leads = Lead::all();
        $payments = Payment::paginate(10);
        return view('crm.report.payment', compact('payments'));
    }
    public function Task()
    {
        // $leads = Lead::all();
        $tasks = Task::paginate(10);
        return view('crm.report.task', compact('tasks'));
    }
    public function Team()
    {
        // $leads = Lead::all();
        $teams = Team::paginate(10);
        return view('crm.report.team', compact('teams'));
    }


}