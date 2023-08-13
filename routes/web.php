<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;

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


Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Front controller========================
Route::get('/home', [FrontController::class, 'home'])->name('home');
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/image-editing', [FrontController::class, 'imageEditing'])->name('image-editing');
Route::get('/custom-illustrations', [FrontController::class, 'illustration'])->name('custom-illustrations');
Route::get('/uiux-design', [FrontController::class, 'uiux'])->name('uiux-design');
Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('portfolio');

Route::get('/postovi/{post}', [FrontController::class, 'show'])->name('postovi.show');


// Image controller========================
Route::post('image-upload', [ImageController::class, 'store'])->name('image.upload.post');
Route::get('image-upload', [ImageController::class, 'create'])->name('image.upload');


// Order controller========================
Route::get('/ordersIndex', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/order', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');


// Contact controller========================
Route::get('contact-us', [ContactController::class, 'index'])->name('contact.us.index');
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


// Subsribers controller========================
Route::post('/subscribe', [SubscribersController::class, 'subscribe'])->name('subscribe');
Route::delete('/unsubscribe/{subscription}', [SubscribersController::class, 'unsubscribe'])
    ->name('subscription.unsubscribe');
Route::get('/subscribers/report', [SubscribersController::class, 'generateReport'])
    ->name('subscribers.report');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('adminpanel.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::resource('post', PostController::class);
    Route::resource('service', ServiceController::class);
});

