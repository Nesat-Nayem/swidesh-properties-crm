<?php

use App\Http\Controllers\CrmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PaymentController;






// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/dashboard2', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard2');





Route::resource('/contacts', ContactController::class);

Route::resource('/leads', LeadController::class);
// Route::delete('leads/{lead}', [LeadController::class, 'destroy'])->name('leads.destroy');
Route::get('/hot-leads', [LeadController::class, 'hotLeads'])->name('leads.hot');
Route::get('/cold-leads', [LeadController::class, 'coldLeads'])->name('leads.cold');


Route::resource('/tasks', TaskController::class);
Route::resource('/teams', TeamController::class);
Route::resource('/products', ProductController::class);
Route::resource('/expenses', ExpenseController::class);
Route::resource('/payments', PaymentController::class);

Route::get('/report', [ReportController::class ,'repoart']);
Route::get('/lead', [ReportController::class, 'lead']);
Route::get('/contact', [ReportController::class, 'contact']);
Route::get('/product', [ReportController::class, 'product']);
Route::get('/expense', [ReportController::class, 'Expence']);
Route::get('/payment', [ReportController::class, 'Payment']);
Route::get('/task', [ReportController::class, 'Task']);
Route::get('/team', [ReportController::class, 'team']);







Route::middleware('auth')->group(function () {
    Route::get('/', [CrmController::class, 'dashboard'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
