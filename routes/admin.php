<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;

Route::get('admin/dashboard',[AdminController::class,'dashboard'])->middleware(['auth','role:admin'])->name('admin.dashboard');
