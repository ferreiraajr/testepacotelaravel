<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;


Route::get('admin-dashboard',[AdminDashboardController::class,'index'])->name('dashboard.index');