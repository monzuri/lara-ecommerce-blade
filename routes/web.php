<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });
    // ->name('admin.dashboard')
    Route::get('page-products-list', function () {
        return view('admin.page-products-list');
    })->name('admin.page-products-list');

    Route::get('page-products-grid', function () {
        return view('admin.page-products-grid');
    });

    Route::get('page-products-grid-2', function () {
        return view('admin.page-products-grid-2');
    });

    Route::get('page-categories', function () {
        return view('admin.page-categories');
    });

    Route::get('page-orders-1', function () {
        return view('admin.page-orders-1');
    });

    Route::get('page-orders-2', function () {
        return view('admin.page-orders-2');
    });

    Route::get('page-orders-detail', function () {
        return view('admin.page-orders-detail');
    });

    Route::get('page-orders-tracking', function () {
        return view('admin.page-orders-tracking');
    });

    Route::get('page-invoice', function () {
        return view('admin.page-invoice');
    });

    Route::get('page-sellers-cards', function () {
        return view('admin.page-sellers-cards');
    });

    Route::get('page-sellers-list', function () {
        return view('admin.page-sellers-list');
    });

    Route::get('page-seller-detail', function () {
        return view('admin.page-seller-detail');
    });

    Route::get('page-form-product-1', function () {
        return view('admin.page-form-product-1');
    });

    Route::get('page-form-product-2', function () {
        return view('admin.page-form-product-2');
    });

    Route::get('page-form-product-3', function () {
        return view('admin.page-form-product-3');
    });

    Route::get('page-form-product-4', function () {
        return view('admin.page-form-product-4');
    });

    Route::get('page-transactions-1', function () {
        return view('admin.page-transactions-1');
    });

    Route::get('page-transactions-2', function () {
        return view('admin.page-transactions-2');
    });

    Route::get('page-transactions-details', function () {
        return view('admin.page-transactions-details');
    });

    Route::get('page-account-login', function () {
        return view('admin.page-account-login');
    });

    Route::get('page-account-register', function () {
        return view('admin.page-account-register');
    });

    Route::get('page-error-404', function () {
        return view('admin.page-error-404');
    });

    Route::get('page-reviews', function () {
        return view('admin.page-reviews');
    });

    Route::get('page-brands', function () {
        return view('admin.page-brands');
    });

    Route::get('page-settings-1', function () {
        return view('admin.page-settings-1');
    });

    Route::get('page-settings-2', function () {
        return view('admin.page-settings-2');
    });

    Route::get('page-blank', function () {
        return view('admin.page-blank');
    });

    // Add more admin routes here
});

// Home Routes
Route::get('', function () {
    return view('main.index');
});

Route::get('index-2', function () {
    return view('main.index-2');
});

Route::get('index-3', function () {
    return view('main.index-3');
});

Route::get('index-4', function () {
    return view('main.index-4');
});

Route::get('index-5', function () {
    return view('main.index-5');
});

Route::get('index-6', function () {
    return view('main.index-6');
});

Route::get('index-7', function () {
    return view('main.index-7');
});

Route::get('index-8', function () {
    return view('main.index-8');
});

Route::get('index-9', function () {
    return view('main.index-9');
});

Route::get('index-10', function () {
    return view('main.index-10');
});

// Shop Routes
Route::get('shop-grid', function () {
    return view('main.shop-grid');
});

Route::get('shop-grid-2', function () {
    return view('main.shop-grid-2');
});

Route::get('shop-list', function () {
    return view('main.shop-list');
});

Route::get('shop-list-2', function () {
    return view('main.shop-list-2');
});

Route::get('shop-fullwidth', function () {
    return view('main.shop-fullwidth');
});

Route::get('shop-single-product', function () {
    return view('main.shop-single-product');
});

Route::get('shop-single-product-2', function () {
    return view('main.shop-single-product-2');
});

Route::get('shop-single-product-3', function () {
    return view('main.shop-single-product-3');
});

Route::get('shop-single-product-4', function () {
    return view('main.shop-single-product-4');
});

Route::get('shop-cart', function () {
    return view('main.shop-cart');
});

Route::get('shop-checkout', function () {
    return view('main.shop-checkout');
});

Route::get('shop-compare', function () {
    return view('main.shop-compare');
});

Route::get('main.shop-wishlist', function () {
    return view('shop-wishlist');
});

// Vendors Routes
Route::get('shop-vendor-list', function () {
    return view('main.shop-vendor-list');
});

Route::get('shop-vendor-single', function () {
    return view('main.shop-vendor-single');
});

// Pages Routes
Route::get('page-about-us', function () {
    return view('main.page-about-us');
});

Route::get('page-contact', function () {
    return view('main.page-contact');
});

Route::get('page-careers', function () {
    return view('main.page-careers');
});

Route::get('page-term', function () {
    return view('main.page-term');
});

Route::get('page-register', function () {
    return view('main.page-register');
});

Route::get('page-login', function () {
    return view('main.page-login');
});

Route::get('page-404', function () {
    return view('main.page-404');
});

// Blog Routes
Route::get('blog', function () {
    return view('main.blog');
});

Route::get('blog-2', function () {
    return view('main.blog-2');
});

Route::get('blog-list', function () {
    return view('main.blog-list');
});

Route::get('blog-big', function () {
    return view('main.blog-big');
});

Route::get('blog-single', function () {
    return view('main.blog-single');
});

Route::get('blog-single-2', function () {
    return view('main.blog-single-2');
});

Route::get('blog-single-3', function () {
    return view('main.blog-single-3');
});

// Contact Us Route
Route::get('page-contact', function () {
    return view('main.page-contact');
});
