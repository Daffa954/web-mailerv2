<?php

use App\Http\Controllers\EmailMessageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/send', function () {
//     return view('sendEmail');
// });
Route::get('/', [EmailMessageController::class, 'create'])->name('emails.create');
Route::post('/send-email', [EmailMessageController::class, 'send'])->name('emails.send');