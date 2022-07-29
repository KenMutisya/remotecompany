<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HtmlResourcesController;
use App\Http\Controllers\LinkResourcesController;
use App\Http\Controllers\PDFResourcesController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AdminController::class,'index'])->name('home');

Route::resource('admin',AdminController::class);

Route::resource('pdfresource',PDFResourcesController::class);

Route::resource('linkresource',LinkResourcesController::class);

Route::resource('htmlresource',HtmlResourcesController::class);
