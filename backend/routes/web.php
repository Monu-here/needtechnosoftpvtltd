<?php

use App\Http\Controllers\Admin\contactController;
use App\Http\Controllers\Admin\ContactsubmitController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\dashController;
use App\Http\Controllers\Admin\featureController;
use App\Http\Controllers\Admin\homeController;
use App\Http\Controllers\Admin\loginController;
use App\Http\Controllers\Admin\navFooterController;
use App\Http\Controllers\Admin\serviceController;
use App\Http\Controllers\Admin\teamController;
use App\Http\Controllers\Admin\testmonialController;
use Illuminate\Support\Facades\Route;

Route::prefix('adminLogin')->name('adminLogin.')->group(function () {
    Route::match(['GET', 'POST'], '', [loginController::class, 'login'])->name('login');
    Route::get('/logout', [loginController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('', [dashController::class, 'index'])->name('index');
    Route::prefix('navFooter')->name('navFooter.')->group(function () {
        Route::get('', [navFooterController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [navFooterController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{navFooter}', [navFeooterController::class, 'edit'])->name('edit');
        Route::get('del/{navFooter}', [navFooterController::class, 'del'])->name('del');
    });
    Route::prefix('home')->name('home.')->group(function () {
        Route::get('', [homeController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [homeController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{home}', [homeController::class, 'edit'])->name('edit');
        Route::get('del/{home}', [homeController::class, 'del'])->name('del');
    });
    Route::prefix('feature')->name('feature.')->group(function () {
        Route::get('', [featureController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [featureController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{feature}', [featureController::class, 'edit'])->name('edit');
        Route::get('del/{feature}', [featureController::class, 'del'])->name('del');
    });
    Route::prefix('team')->name('team.')->group(function () {
        Route::get('', [teamController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [teamController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{team}', [teamController::class, 'edit'])->name('edit');
        Route::get('del/{team}', [teamController::class, 'del'])->name('del');
    });
    Route::prefix('test')->name('test.')->group(function () {
        Route::get('', [testmonialController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [testmonialController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{testmonial}', [testmonialController::class, 'edit'])->name('edit');
        Route::get('del/{testmonial}', [testmonialController::class, 'del'])->name('del');
    });
    Route::prefix('service')->name('service.')->group(function () {
        Route::get('', [serviceController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [serviceController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{service}', [serviceController::class, 'edit'])->name('edit');
        Route::get('del/{service}', [serviceController::class, 'del'])->name('del');
    });
    Route::prefix('contact')->name('contact.')->group(function () {
        Route::get('', [contactController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [contactController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{contact}', [contactController::class, 'edit'])->name('edit');
        Route::get('del/{contact}', [contactController::class, 'del'])->name('del');
    });
    Route::prefix('submitContact')->name('submitContact.')->group(function () {
        Route::get('', [ContactsubmitController::class, 'index'])-> name('index');
    });
});
