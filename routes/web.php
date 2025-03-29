<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AppointmentController;
use App\Models\Service;
use App\Http\Controllers\Admin\SupportController;


// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product Routes
Route::get('/products', [ProductController::class, 'shop'])->name('products');

Route::get('/services', [ServiceController::class, 'showServices'])->name('services');

Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks');
Route::post('/feedbacks', [FeedbackController::class, 'store'])->name('feedbacks.store');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');




Route::get('/contact', function () {
    $services = \App\Models\Service::all(); // make sure you're importing this
    return view('contact', ['services' => $services]);
})->name('contact');



// Other Pages
Route::get('/consultation', fn() => view('consultation'))->name('consultation');
Route::get('/about-us', fn() => view('about'))->name('about');
Route::get('/login', fn() => view('login'))->name('login');
Route::get('/my-profile', fn() => view('myprofile'))->name('myprofile');
Route::get('/wishlist', fn() => view('wishlist'))->name('wishlist');

// Basket & Checkout
Route::get('/basket', [BasketController::class, 'index'])->name('basket');
Route::post('/basket/add/{product}', [BasketController::class, 'add'])->name('basket.add');
Route::post('/basket/remove/{product}', [BasketController::class, 'remove'])->name('basket.remove');
Route::get('/checkout', [BasketController::class, 'checkout'])->name('basket.checkout');
Route::post('/checkout/confirm', [BasketController::class, 'confirmCheckout'])->name('basket.confirm');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('/products', ProductController::class);
    Route::resource('/services', ServiceController::class);
    Route::get('/support', [SupportController::class, 'index'])->name('support'); 
});



