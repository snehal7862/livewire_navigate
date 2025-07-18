<?php

use Illuminate\Support\Facades\Route;


Route::get('/', \App\Livewire\Home::class);
Route::get('/about', \App\Livewire\About::class);

Route::get('/page2', function () {
    return view('page2');
});
