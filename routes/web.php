<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MailController::class, 'sendBtn'])->name('home');
Route::post('/contact-form', [MailController::class, 'contactForm'])->name('contact.form');
