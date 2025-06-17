<?php

use App\Livewire\NotFound;
use App\Livewire\PageAbout;
use App\Livewire\PageBlog;
use App\Livewire\PageHome;
use App\Livewire\SingleBlog;
use Illuminate\Support\Facades\Route;

Route::get('/', PageHome::class)->name('page.home');
Route::get('/about', PageAbout::class)->name('page.about');
Route::get('/blog', PageBlog::class)->name('page.blog');
 Route::get('/blog/{slug}', SingleBlog::class)->name('single.blog');
Route::get('/{any}', NotFound::class)->where('any', '.*');
