<?php

use App\Livewire\AccountSettingComponent;
use App\Livewire\AdminAddAuthorComponent;
use App\Livewire\AdminAddUserComponent;
use App\Livewire\AdminAuthorComponent;
use App\Livewire\AdminCategoryComponent;
use App\Livewire\AdminDashboard;
use App\Livewire\AdminBooksComponent;
use App\Livewire\AdminAddCategoryComponent;
use App\Livewire\AdminAddBookComponent;
use App\Livewire\AdminDashboardComponent;
use App\Livewire\BookPageComponent;
use App\Livewire\BookPdfComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ProfileComponent;
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
Route::get('/profile',ProfileComponent::class);

// ADMIN
Route::get('/acount-setting',AccountSettingComponent::class);
Route::get('/add-user',AdminAddUserComponent::class);
Route::get('/admin-add-user',AdminAddUserComponent::class);
Route::get('/admin-add-author',AdminAddAuthorComponent::class);
Route::get('/admin-add-book',AdminAddBookComponent::class);
Route::get('/admin-add-category',AdminAddCategoryComponent::class);
Route::get('/admin-author',AdminAuthorComponent::class);
Route::get('/admin-books',AdminBooksComponent::class);
Route::get('/admin-category',AdminCategoryComponent::class);
Route::get('/admin-dashboard',AdminDashboardComponent::class);