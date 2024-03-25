<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/send-mail', [MailController::class, 'sendMail'])->name('mail.send');
Route::get('/', [MailController::class, 'sendBtn'])->name('home');
