<?php

use App\Http\Controllers\Frontend\BrandController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FacilityController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InvestorController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PartnerController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// 
Route::get('/',  [HomeController::class, 'home'])->name('home');
Route::get('/about',  [PageController::class, 'about'])->name('about');

// Facilities 
Route::get('/facilities/{slug}', [FacilityController::class, 'show'])->name('facilities.show');

// Brands
Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');

// Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');


// News
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Partners
Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');

// Investors
Route::prefix('investors')->name('investors.')->group(function () {
    Route::get('/profile',      [InvestorController::class, 'profile'])->name('profile');
    Route::get('/governance',   [InvestorController::class, 'governance'])->name('governance');
    Route::get('/relations',    [InvestorController::class, 'relations'])->name('relations');
    Route::get('/media',        [InvestorController::class, 'media'])->name('media');
    Route::get('/information',  [InvestorController::class, 'information'])->name('information');
});
