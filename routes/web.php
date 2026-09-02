<?php

use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');
Route::post('webhook/whatsapp', [WhatsAppController::class, 'handle']);
