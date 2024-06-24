<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('dashboard/jfdsklfs/fsdkfls/fddsfgsdg/ertefdvfdv/dfsfsdfdfds', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('page-products-list', function () {
        return view('admin.page-products-list');
    })->name('admin.page-products-list');

    Route::get('page-products-grid', function () {
        return view('admin.page-products-grid');
    })->name('admin.page-products-grid');

    Route::get('page-products-grid-2', function () {
        return view('admin.page-products-grid-2');
    })->name('admin.page-products-grid-2');

    Route::get('page-categories', function () {
        return view('admin.page-categories');
    })->name('admin.page-categories');

    Route::get('page-orders-1', function () {
        return view('admin.page-orders-1');
    })->name('admin.page-orders-1');

    Route::get('page-orders-2', function () {
        return view('admin.page-orders-2');
    })->name('admin.page-orders-2');

    Route::get('page-orders-detail', function () {
        return view('admin.page-orders-detail');
    })->name('admin.page-orders-detail');

    Route::get('page-orders-tracking', function () {
        return view('admin.page-orders-tracking');
    })->name('admin.page-orders-tracking');

    Route::get('page-invoice', function () {
        return view('admin.page-invoice');
    })->name('admin.page-invoice');

    Route::get('page-sellers-cards', function () {
        return view('admin.page-sellers-cards');
    })->name('admin.page-sellers-cards');

    Route::get('page-sellers-list', function () {
        return view('admin.page-sellers-list');
    })->name('admin.page-sellers-list');

    Route::get('page-seller-detail', function () {
        return view('admin.page-seller-detail');
    })->name('admin.page-seller-detail');

    Route::get('page-form-product-1', function () {
        return view('admin.page-form-product-1');
    })->name('admin.page-form-product-1');

    Route::get('page-form-product-2', function () {
        return view('admin.page-form-product-2');
    })->name('admin.page-form-product-2');

    Route::get('page-form-product-3', function () {
        return view('admin.page-form-product-3');
    })->name('admin.page-form-product-3');

    Route::get('page-form-product-4', function () {
        return view('admin.page-form-product-4');
    })->name('admin.page-form-product-4');

    Route::get('page-transactions-1', function () {
        return view('admin.page-transactions-1');
    })->name('admin.page-transactions-1');

    Route::get('page-transactions-2', function () {
        return view('admin.page-transactions-2');
    })->name('admin.page-transactions-2');

    Route::get('page-transactions-details', function () {
        return view('admin.page-transactions-details');
    })->name('admin.page-transactions-details');

    Route::get('page-account-login', function () {
        return view('admin.page-account-login');
    })->name('admin.page-account-login');

    Route::get('page-account-register', function () {
        return view('admin.page-account-register');
    })->name('admin.page-account-register');

    Route::get('page-error-404', function () {
        return view('admin.page-error-404');
    })->name('admin.page-error-404');

    Route::get('page-reviews', function () {
        return view('admin.page-reviews');
    })->name('admin.page-reviews');

    Route::get('page-brands', function () {
        return view('admin.page-brands');
    })->name('admin.page-brands');

    Route::get('page-settings-1', function () {
        return view('admin.page-settings-1');
    })->name('admin.page-settings-1');

    Route::get('page-settings-2', function () {
        return view('admin.page-settings-2');
    })->name('admin.page-settings-2');

    Route::get('page-blank', function () {
        return view('admin.page-blank');
    })->name('admin.page-blank');

    // Add more admin routes here
});

// Home Routes
Route::prefix('')->group(function () {
    Route::view('', 'main.index')->name('main.index');
    Route::view('index-2', 'main.index-2')->name('main.index-2');
    Route::view('index-3', 'main.index-3')->name('main.index-3');
    Route::view('index-4', 'main.index-4')->name('main.index-4');
    Route::view('index-5', 'main.index-5')->name('main.index-5');
    Route::view('index-6', 'main.index-6')->name('main.index-6');
    Route::view('index-7', 'main.index-7')->name('main.index-7');
    Route::view('index-8', 'main.index-8')->name('main.index-8');
    Route::view('index-9', 'main.index-9')->name('main.index-9');
    Route::view('index-10', 'main.index-10')->name('main.index-10');
});

// Shop Routes
Route::prefix('shop')->group(function () {
    Route::view('grid', 'main.shop-grid')->name('main.shop-grid');
    Route::view('grid-2', 'main.shop-grid-2')->name('main.shop-grid-2');
    Route::view('list', 'main.shop-list')->name('main.shop-list');
    Route::view('list-2', 'main.shop-list-2')->name('main.shop-list-2');
    Route::view('fullwidth', 'main.shop-fullwidth')->name('main.shop-fullwidth');
    Route::view('single-product', 'main.shop-single-product')->name('main.shop-single-product');
    Route::view('single-product-2', 'main.shop-single-product-2')->name('main.shop-single-product-2');
    Route::view('single-product-3', 'main.shop-single-product-3')->name('main.shop-single-product-3');
    Route::view('single-product-4', 'main.shop-single-product-4')->name('main.shop-single-product-4');
    Route::view('cart', 'main.shop-cart')->name('main.shop-cart');
    Route::view('checkout', 'main.shop-checkout')->name('main.shop-checkout');
    Route::view('compare', 'main.shop-compare')->name('main.shop-compare');
    Route::view('wishlist', 'main.shop-wishlist')->name('main.shop-wishlist');
    Route::view('vendor-list', 'main.shop-vendor-list')->name('main.shop-vendor-list');
    Route::view('vendor-single', 'main.shop-vendor-single')->name('main.shop-vendor-single');
});

// Pages Routes
Route::prefix('page')->group(function () {
    Route::view('about-us', 'main.page-about-us')->name('main.page-about-us');
    Route::view('contact', 'main.page-contact')->name('main.page-contact');
    Route::view('careers', 'main.page-careers')->name('main.page-careers');
    Route::view('term', 'main.page-term')->name('main.page-term');
    Route::view('register', 'main.page-register')->name('main.page-register');
    Route::view('login', 'main.page-login')->name('main.page-login');
    Route::view('account', 'main.page-account')->name('main.page-account');
    Route::view('404', 'main.page-404')->name('main.page-404');
});

// Blog Routes
Route::prefix('blog')->group(function () {
    Route::view('', 'main.blog')->name('main.blog');
    Route::view('2', 'main.blog-2')->name('main.blog-2');
    Route::view('list', 'main.blog-list')->name('main.blog-list');
    Route::view('big', 'main.blog-big')->name('main.blog-big');
    Route::view('single', 'main.blog-single')->name('main.blog-single');
    Route::view('single-2', 'main.blog-single-2')->name('main.blog-single-2');
    Route::view('single-3', 'main.blog-single-3')->name('main.blog-single-3');
});

// Contact Us Route
Route::view('contact', 'main.page-contact')->name('main.page-contact');

