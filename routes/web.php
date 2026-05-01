<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BrandController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FacilityController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InvestorController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\PartnerController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// 
Route::get('/',  [HomeController::class, 'home'])->name('home');
Route::get('/about',  [AboutController::class, 'about'])->name('about');
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/ceo',        [AboutController::class, 'ceo'])       ->name('ceo');
    Route::get('/ibl',        [AboutController::class, 'ibl'])       ->name('ibl');
    Route::get('/history',    [AboutController::class, 'history'])   ->name('history');
    Route::get('/mission',    [AboutController::class, 'mission'])   ->name('mission');
    Route::get('/facilities', [AboutController::class, 'facilities'])->name('facilities');
    Route::get('/csr',        [AboutController::class, 'csr'])       ->name('csr');
    Route::get('/global',     [AboutController::class, 'global'])    ->name('global');
    Route::get('/policies',   [AboutController::class, 'policies'])  ->name('policies');
});


// Facilities 
Route::get('/facilities/{slug}', [FacilityController::class, 'show'])->name('facilities.show');

// Brands
Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

// Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

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
