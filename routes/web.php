<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::get('/about-us', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact-us', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/go-driver', [HomeController::class, 'godriver'])->name('godriver');
Route::get('/go-partner', [HomeController::class, 'gopartner'])->name('gopartner');
Route::get('/gomt', [HomeController::class, 'gomt'])->name('gomt');
Route::get('/privacy-policy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/refund-policy', [HomeController::class, 'refundpolicy'])->name('refundpolicy');
Route::get('/terms-and-conditions', [HomeController::class, 'termsandconditions'])->name('termsandconditions');
Route::get('/terms-of-use', [HomeController::class, 'termsofuse'])->name('termsofuse');
Route::get('/vendor-terms', [HomeController::class, 'vendorterms'])->name('vendorterms');
Route::get('/site-map.xml', function () {
    return response()->view('home.sitemap')->header('Content-Type', 'text/xml');
})->name('sitemap');


Route::get('restaurants', [RestaurantController::class, 'index'])->name('restaurants');
Route::get('restaurants/{pretty_name?}', [RestaurantController::class, 'restaurantDetails'])->name('restaurant.details');
Route::get('delivery', [RestaurantController::class, 'delivery'])->name('restaurant.delivery');
Route::get('pickup', [RestaurantController::class, 'pickup'])->name('restaurant.pickup');
Route::get('home-chef', [RestaurantController::class, 'homeChef'])->name('restaurant.homechef');
Route::get('featured', [RestaurantController::class, 'featured'])->name('restaurant.featured');

Route::get('products/{name?}/{location?}', [ProductController::class, 'index'])->name('products');
