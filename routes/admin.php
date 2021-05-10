<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TicketController;

Route::get('', [HomeController::class,'index'])->name('admin.home');

Route::resource('tickets', TicketController::class)->names('admin.tickets');
