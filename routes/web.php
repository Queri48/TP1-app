<?php

use App\Http\Controllers\client\ArticleController;
use App\Http\Controllers\client\CategorieController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view("admin.home");
});


Route::get('/admin/articles/ajouter', function () {
    return view("admin.articles.create");
});

Route::get('/admin/articles/modifier', function () {
    return view("admin.articles.edit");
});

Route::get('/admin/articles/liste', function () {
    return view("admin.articles.list");
});

Route::get('/admin/articles/detail', function () {
    return view("admin.articles.show");
});



Route::get('/admin/contact/liste', function () {
    return view("admin.contact.list");
});

Route::get('/admin/contact/detail', function () {
    return view("admin.contact.show");
});



Route::get('/',[HomeController::class, 'accueil'])->name('client.accueil');

Route::get('/articles', [ArticleController::class, 'liste'])->name('client.articles');

Route::get('/articles/{slug}', [ArticleController::class, 'details'])->name('client.articles.detail');

Route::get('/contact', [ContactController::class, 'contact'])->name('client.contact');

Route::post('/contact/traitement', [ContactController::class, 'contact_traitement'])->name('client.contact.traitement');

Route::get('/categories', [CategorieController::class, 'liste'])->name('client.categories');

Route::get('/categories/{slug}', [CategorieController::class, 'details'])->name('client.categories.detail');
