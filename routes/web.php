<?php

use App\Livewire\Cart;
use App\Livewire\NotFound;
use App\Livewire\PageAbout;
use App\Livewire\PageBlog;
use App\Livewire\PageContact;
use App\Livewire\PageHome;
use App\Livewire\PageProducts;
use App\Livewire\SingleBlog;
use App\Livewire\SingleProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', PageHome::class)->name('page.home');
Route::get('/about', PageAbout::class)->name('page.about');
Route::get('/contact', PageContact::class)->name('page.contact');
Route::get('/news', PageBlog::class)->name('page.blog');
Route::get('/news/{slug}', SingleBlog::class)->name('single.blog');
Route::get('/products', PageProducts::class)->name('page.products');
Route::get('/products/{slug}', SingleProduct::class)->name('single.products');
Route::get('/{any}', NotFound::class)->where('any', '.*');
