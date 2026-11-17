<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

// 5.6 - Redirect Route
Route::redirect('/', '/routing');

// 5.2 - Halaman utama daftar routing
Route::get('/routing', function () {
    return view('routing');
});

// 5.3 - Basic Routing
Route::get('/basic_routing', function () {
    return 'Hello World';
});

// 5.4 - View Route
Route::view('/view_route', 'view_route', [
    'name' => 'Rasyid'
]);

// 5.5 - Controller Route
Route::get('/controller_route', [
    RouteController::class,
    'index'
]);

// 5.7 - Required Route Parameter
Route::get('/user/{id}', function ($id) {
    return "User Id: " . $id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Post Id: " . $postId . ", Comment Id: " . $commentId;
});

// 5.8 - Optional Route Parameter
Route::get('/username/{name?}', function ($name = null) {
    return 'Username: ' . $name;
});

// 5.9 - Regular Expression Constraint
Route::get('/title/{title}', function ($title) {
    return "Title: " . $title;
})->where('title', '[A-Za-z]+');

// 5.10 - Named Route
Route::get('/profile/{profileId}', [
    RouteController::class,
    'profile'
])->name('profileRouteName');

// 5.11 - Route Priority
// Untuk pengujian kondisi kedua,
// beri komentar pada route pertama ini.
Route::get('/route_priority/{rpId}', function ($rpId) {
    return "This is Route One";
});

Route::get('/route_priority/user', function () {
    return "This is Route 1";
});

Route::get('/route_priority/user', function () {
    return "This is Route 2";
});

// 5.13 - Route Group
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return "This is admin dashboard";
    })->name('dashboard');

    Route::get('/users', function () {
        return "This is user data on admin page";
    })->name('users');

    Route::get('/items', function () {
        return "This is item data on admin page";
    })->name('items');

});

// BAB 7 - TUGAS NOMOR 2
Route::view('/portofolio', 'portofolio')->name('portofolio');

// 5.12 - Fallback Route
Route::fallback(function () {
    return 'This is Fallback Route';
});
