<?php

use App\Http\Livewire\Module\Projects\Add;
use App\Http\Livewire\Module\Projects\Index;
use App\Http\Livewire\Module\Projects\Update;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('index');
Route::get('/add', Add::class)->name('add');
Route::get('/update/{uuid}', Update::class)->name('update');
