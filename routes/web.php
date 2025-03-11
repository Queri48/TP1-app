<?php

use App\Http\Controllers\admin\ArticleController as AdminArticleController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\client\ArticleController;
use App\Http\Controllers\client\CategorieController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/accueil', [AdminHomeController::class, 'accueil'])->name('admin.accueil');


Route::get('/admin/articles/ajouter', [AdminArticleController::class, 'ajouter'])->name('admin.articles.ajouter');

Route::post('/admin/articles/ajouter/traitement', [AdminArticleController::class, 'ajouter_traitement'])->name('admin.articles.ajouter.traitement');

Route::get('/admin/articles/modifier/{id}', [AdminArticleController::class, 'modifier'])->name('admin.articles.modifier');

Route::post('/admin/articles/modifier/traitement/{id}', [AdminArticleController::class, 'modifier_traitement'])->name('admin.articles.modifier_traitement');

Route::get('/admin/articles/liste', [AdminArticleController::class, 'liste'])->name('admin.articles.liste');

Route::get('/admin/articles/detail', [AdminArticleController::class, 'detail'])->name('admin.articles.detail');



Route::get('/admin/contact/liste', [AdminContactController::class, 'liste'])->name('admin.contact.liste');

Route::get('/admin/contact/detail', [AdminContactController::class, 'detail'])->name('admin.contact.detail');



Route::get('/',[HomeController::class, 'accueil'])->name('client.accueil');

Route::get('/articles', [ArticleController::class, 'liste'])->name('client.articles');

Route::get('/articles/{slug}', [ArticleController::class, 'details'])->name('client.articles.detail');

Route::get('/contact', [ContactController::class, 'contact'])->name('client.contact');

Route::post('/contact/traitement', [ContactController::class, 'contact_traitement'])->name('client.contact.traitement');

Route::get('/categories', [CategorieController::class, 'liste'])->name('client.categories');

Route::get('/categories/{slug}', [CategorieController::class, 'details'])->name('client.categories.detail');
