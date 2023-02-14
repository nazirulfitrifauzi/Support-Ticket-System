<?php

use App\Http\Livewire\Module\Clients\Add;
use App\Http\Livewire\Module\Clients\Index;
use App\Http\Livewire\Module\Clients\Update;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('index');
Route::get('/add', Add::class)->name('add');
Route::get('/update/{uuid}', Update::class)->name('update');
