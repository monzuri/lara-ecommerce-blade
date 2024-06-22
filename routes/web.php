<?php

use Illuminate\Support\Facades\Route;

// Home Routes
Route::get('', function () {
    return view('index');
});

Route::get('index-2', function () {
    return view('index-2');
});

Route::get('index-3', function () {
    return view('index-3');
});

Route::get('index-4', function () {
    return view('index-4');
});

Route::get('index-5', function () {
    return view('index-5');
});

Route::get('index-6', function () {
    return view('index-6');
});

Route::get('index-7', function () {
    return view('index-7');
});

Route::get('index-8', function () {
    return view('index-8');
});

Route::get('index-9', function () {
    return view('index-9');
});

Route::get('index-10', function () {
    return view('index-10');
});

// Shop Routes
Route::get('shop-grid', function () {
    return view('shop-grid');
});

Route::get('shop-grid-2', function () {
    return view('shop-grid-2');
});

Route::get('shop-list', function () {
    return view('shop-list');
});

Route::get('shop-list-2', function () {
    return view('shop-list-2');
});

Route::get('shop-fullwidth', function () {
    return view('shop-fullwidth');
});

Route::get('shop-single-product', function () {
    return view('shop-single-product');
});

Route::get('shop-single-product-2', function () {
    return view('shop-single-product-2');
});

Route::get('shop-single-product-3', function () {
    return view('shop-single-product-3');
});

Route::get('shop-single-product-4', function () {
    return view('shop-single-product-4');
});

Route::get('shop-cart', function () {
    return view('shop-cart');
});

Route::get('shop-checkout', function () {
    return view('shop-checkout');
});

Route::get('shop-compare', function () {
    return view('shop-compare');
});

Route::get('shop-wishlist', function () {
    return view('shop-wishlist');
});

// Vendors Routes
Route::get('shop-vendor-list', function () {
    return view('shop-vendor-list');
});

Route::get('shop-vendor-single', function () {
    return view('shop-vendor-single');
});

// Pages Routes
Route::get('page-about-us', function () {
    return view('page-about-us');
});

Route::get('page-contact', function () {
    return view('page-contact');
});

Route::get('page-careers', function () {
    return view('page-careers');
});

Route::get('page-term', function () {
    return view('page-term');
});

Route::get('page-register', function () {
    return view('page-register');
});

Route::get('page-login', function () {
    return view('page-login');
});

Route::get('page-404', function () {
    return view('page-404');
});

// Blog Routes
Route::get('blog', function () {
    return view('blog');
});

Route::get('blog-2', function () {
    return view('blog-2');
});

Route::get('blog-list', function () {
    return view('blog-list');
});

Route::get('blog-big', function () {
    return view('blog-big');
});

Route::get('blog-single', function () {
    return view('blog-single');
});

Route::get('blog-single-2', function () {
    return view('blog-single-2');
});

Route::get('blog-single-3', function () {
    return view('blog-single-3');
});

// Contact Us Route
Route::get('page-contact', function () {
    return view('page-contact');
});
