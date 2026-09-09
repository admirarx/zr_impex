<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WhatsAppClickController;
use Illuminate\Support\Facades\Route;

// Public Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');

// CNC Machinery Catalogue
Route::get('/cnc-machines', [ProductController::class, 'machinesIndex'])->name('machines.index');
Route::get('/machines/{slug}', [ProductController::class, 'machineShow'])->name('machines.show');

// Spare Parts Catalogue
Route::get('/spare-parts', [ProductController::class, 'sparePartsIndex'])->name('spare-parts.index');
Route::get('/spare-parts/{slug}', [ProductController::class, 'sparePartShow'])->name('spare-parts.show');

// Lead Generation Form (Throttled to 10 submissions per minute per IP)
Route::post('/enquiry', [EnquiryController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('enquiry.store');

// WhatsApp Click Tracking
Route::match(['GET', 'POST'], '/whatsapp-click/{product?}', [WhatsAppClickController::class, 'track'])
    ->name('whatsapp.track');
