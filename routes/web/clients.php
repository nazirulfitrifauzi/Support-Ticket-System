<?php

use App\Http\Livewire\Module\Clients\Add;
use App\Http\Livewire\Module\Clients\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('index');
Route::get('/add', Add::class)->name('add');
