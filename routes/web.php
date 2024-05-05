<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::middleware('guest')->group(function () {
    Volt::route('/', 'pages.auth.login')->name('login');
    Volt::route('register', 'pages.auth.register')->name('register');
    Volt::route('forgot-password', 'pages.auth.forgot-password')->name('password.request');
    Volt::route('reset-password/{token}', 'pages.auth.reset-password')->name('password.reset');
});


Route::middleware('auth')->group(function () {
    Volt::route('verify-email', 'pages.auth.verify-email')->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', ['as' => 'verification.verify', 'uses' => 'App\Http\Controllers\Auth\VerifyEmailController'])->middleware(['signed', 'throttle:6,1']);
    Volt::route('confirm-password', 'pages.auth.confirm-password')->name('password.confirm');
});


Route::middleware(['web', 'auth', 'verified'])->prefix('dashboard')->group(function(){
    Volt::route('/dashboard', 'pages.index')->name('dashboard');
});

