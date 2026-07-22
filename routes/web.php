<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');

Route::prefix('layanan')->name('services.')->group(function () {
    Route::get('/', [PageController::class, 'servicesIndex'])->name('index');
    Route::get('/{slug}', [PageController::class, 'servicesShow'])->name('show');
});

Route::prefix('studi-kasus')->name('case-studies.')->group(function () {
    Route::get('/', [PageController::class, 'caseStudiesIndex'])->name('index');
    Route::get('/{slug}', [PageController::class, 'caseStudiesShow'])->name('show');
});

Route::get('/tim', [PageController::class, 'team'])->name('team');

Route::prefix('wawasan')->name('blog.')->group(function () {
    Route::get('/', [PageController::class, 'blogIndex'])->name('index');
    Route::get('/{slug}', [PageController::class, 'blogShow'])->name('show');
});

Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/kontak', [ContactController::class, 'submit'])->name('contact.submit');
