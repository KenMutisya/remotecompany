<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PDFResourcesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::resource('admin',AdminController::class);

Route::resource('pdfresource',PDFResourcesController::class);
