<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {

        return view('crm.report.index');
    }

}