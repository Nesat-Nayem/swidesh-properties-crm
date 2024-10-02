<?php

use App\Http\Controllers\CrmController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProductController;




// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/dashboard2', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard2');





Route::resource('/contacts', ContactController::class);

Route::resource('/leads', LeadController::class);
Route::resource('/tasks', TaskController::class);
Route::resource('/teams', TeamController::class);
Route::resource('/products', ProductController::class);





Route::middleware('auth')->group(function () {
    Route::get('/', [CrmController::class, 'dashboard'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
