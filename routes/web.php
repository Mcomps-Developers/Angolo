<?php

use App\Livewire\BookPageComponent;
use App\Livewire\BookPdfComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\HomeComponent;
use App\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',HomeComponent::class);
Route::get('/book-pdf',BookPdfComponent::class);
Route::get('/category',CategoryComponent::class);
Route::get('/checkout',CheckoutComponent::class);
Route::get('/book-page',BookPageComponent::class);
Route::get('/wishlist',WishlistComponent::class);
