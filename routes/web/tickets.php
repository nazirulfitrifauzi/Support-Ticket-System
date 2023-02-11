<?php

use App\Http\Livewire\Module\Tickets\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('index');