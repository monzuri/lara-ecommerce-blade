<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/imgs/template/favicon.svg') }}">
    <link href="{{ asset('/assets/css/style.css?v=3.0.0') }}" rel="stylesheet">
    <title>Ecom - Ecom Marketplace Template</title>
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center"><img class="mb-10" src="{{ asset('/assets/imgs/template/favicon.svg') }}"
                        alt="Ecom">
                    <div class="preloader-dots"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="topbar">
        <div class="container-topbar">
            <div class="menu-topbar-left d-none d-xl-block">
                <ul class="nav-small">
                    <li><a class="font-xs" href="{{ route('main.page-about-us') }}">About Us</a></li>
                    <li><a class="font-xs" href="{{ route('main.page-careers') }}">Careers</a></li>
                    <li><a class="font-xs" href="{{ route('main.page-register') }}">Open a shop</a></li>
                </ul>
            </div>
            <div class="info-topbar text-center d-none d-xl-block"><span class="font-xs color-brand-3">Free shipping for
                    all orders over</span><span class="font-sm-bold color-success"> $75.00</span></div>
            <div class="menu-topbar-right"><span class="font-xs color-brand-3">Need help? Call Us:</span><span
                    class="font-sm-bold color-success"> + 1800 900</span>
                <div class="dropdown dropdown-language">
                    <button class="btn dropdown-toggle" id="dropdownPage" type="button" data-bs-toggle="dropdown"
                        aria-expanded="true" data-bs-display="static"><span
                            class="dropdown-right font-xs color-brand-3"><img
                                src="{{ asset('/assets/imgs/template/en.svg') }}" alt="Ecom">
                            English</span></button>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage"
                        data-bs-popper="static">
                        <li><a class="dropdown-item" href="{{ url('#') }}"><img
                                    src="{{ asset('/assets/imgs/template/flag-en.svg') }}" alt="Ecom"> English</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('#') }}"><img
                                    src="{{ asset('/assets/imgs/template/flag-fr.svg') }}" alt="Ecom"> Français</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('#') }}"><img
                                    src="{{ asset('/assets/imgs/template/flag-es.svg') }}" alt="Ecom"> Español</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('#') }}"><img
                                    src="{{ asset('/assets/imgs/template/flag-pt.svg') }}" alt="Ecom">
                                Português</a></li>
                        <li><a class="dropdown-item" href="{{ url('#') }}"><img
                                    src="{{ asset('/assets/imgs/template/flag-cn.svg') }}" alt="Ecom"> 中国人</a></li>
                    </ul>
                </div>
                <div class="dropdown dropdown-language">
                    <button class="btn dropdown-toggle" id="dropdownPage2" type="button" data-bs-toggle="dropdown"
                        aria-expanded="true" data-bs-display="static"><span
                            class="dropdown-right font-xs color-brand-3">USD</span></button>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownPage2"
                        data-bs-popper="static">
                        <li><a class="dropdown-item active" href="{{ url('#') }}">USD</a></li>
                        <li><a class="dropdown-item" href="{{ url('#') }}">EUR</a></li>
                        <li><a class="dropdown-item" href="{{ url('#') }}">AUD</a></li>
                        <li><a class="dropdown-item" href="{{ url('#') }}">SGP</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo"><a class="d-flex" href="{{ route('main.index') }}"><img alt="Ecom"
                                src="{{ asset('/assets/imgs/template/logo.svg') }}"></a></div>
                    <div class="header-search">
                        <div class="box-header-search">
                            <form class="form-search" method="post" action="#">
                                <div class="box-category">
                                    <select class="select-active select2-hidden-accessible">
                                        <option>All categories</option>
                                        <option value="Computers Accessories">Computers Accessories</option>
                                        <option value="Cell Phones">Cell Phones</option>
                                        <option value="Gaming Gatgets">Gaming Gatgets</option>
                                        <option value="Smart watches">Smart watches</option>
                                        <option value="Wired Headphone">Wired Headphone</option>
                                        <option value="Mouse &amp; Keyboard">Mouse Keyboard</option>
                                        <option value="Headphone">Headphone</option>
                                        <option value="Bluetooth devices">Bluetooth devices</option>
                                        <option value="Cloud Software">Cloud Software</option>
                                    </select>
                                </div>
                                <div class="box-keysearch">
                                    <input class="form-control font-xs" type="text" value=""
                                        placeholder="Search for items">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <li class="has-children"><a class="active" href="{{ route('main.index') }}">Home</a>
                                    <ul class="sub-menu two-col">
                                        <li><a href="{{ route('main.index') }}">Homepage - 1</a></li>
                                        <li><a href="{{ route('main.index-2') }}">Homepage - 2</a></li>
                                        <li><a href="{{ route('main.index-3') }}">Homepage - 3</a></li>
                                        <li><a href="{{ route('main.index-4') }}">Homepage - 4</a></li>
                                        <li><a href="{{ route('main.index-5') }}">Homepage - 5</a></li>
                                        <li><a href="{{ route('main.index-6') }}">Homepage - 6</a></li>
                                        <li><a href="{{ route('main.index-7') }}">Homepage - 7</a></li>
                                        <li><a href="{{ route('main.index-8') }}">Homepage - 8</a></li>
                                        <li><a href="{{ route('main.index-9') }}">Homepage - 9</a></li>
                                        <li><a href="{{ route('main.index-10') }}">Homepage - 10</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.shop-grid') }}">Shop</a>
                                    <ul class="sub-menu two-col">
                                        <li><a href="{{ route('main.shop-grid') }}">Shop Grid</a></li>
                                        <li><a href="{{ route('main.shop-grid-2') }}">Shop Grid 2</a></li>
                                        <li><a href="{{ route('main.shop-list') }}">Shop list - Left sidebar</a></li>
                                        <li><a href="{{ route('main.shop-list-2') }}">Shop list - Right sidebar</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-fullwidth') }}">Shop Fullwidth</a></li>
                                        <li><a href="{{ route('main.shop-single-product') }}">Single Product</a></li>
                                        <li><a href="{{ route('main.shop-single-product-2') }}">Single Product 2</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-single-product-3') }}">Single Product 3</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-single-product-4') }}">Single Product 4</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-cart') }}">Shop Cart</a></li>
                                        <li><a href="{{ route('main.shop-checkout') }}">Shop Checkout</a></li>
                                        <li><a href="{{ route('main.shop-compare') }}">Shop Compare</a></li>
                                        <li><a href="{{ route('main.shop-wishlist') }}">Shop Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.shop-vendor-list') }}">Vendors</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.shop-vendor-list') }}">Vendors Listing</a></li>
                                        <li><a href="{{ route('main.shop-vendor-single') }}">Vendor Single</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ url('#') }}">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.page-about-us') }}">About Us</a></li>
                                        <li><a href="{{ route('main.page-contact') }}">Contact Us</a></li>
                                        <li><a href="{{ route('main.page-careers') }}">Careers</a></li>
                                        <li><a href="{{ route('main.page-term') }}">Term and Condition</a></li>
                                        <li><a href="{{ route('main.page-register') }}">Register</a></li>
                                        <li><a href="{{ route('main.page-login') }}">Login</a></li>
                                        <li><a href="{{ route('main.page-404') }}">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.blog') }}">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.blog') }}">Blog - No Sidebar</a></li>
                                        <li><a href="{{ route('main.blog-2') }}">Blog - Right Sidebar</a></li>
                                        <li><a href="{{ route('main.blog-list') }}">Blog List</a></li>
                                        <li><a href="{{ route('main.blog-big') }}">Blog category big</a></li>
                                        <li><a href="{{ route('main.blog-single') }}">Blog Single - Left sidebar</a>
                                        </li>
                                        <li><a href="{{ route('main.blog-single-2') }}">Blog Single - Right
                                                sidebar</a>
                                        </li>
                                        <li><a href="{{ route('main.blog-single-3') }}">Blog Single - No sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('main.page-contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                                class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                    </div>
                    <div class="header-shop">
                        <div class="d-inline-block box-dropdown-cart"><span
                                class="font-lg icon-list icon-account"><span>Account</span></span>
                            <div class="dropdown-account">
                                <ul>
                                    <li><a href="{{ route('main.page-account') }}">My Account</a></li>
                                    <li><a href="{{ route('main.page-account') }}">Order Tracking</a></li>
                                    <li><a href="{{ route('main.page-account') }}">My Orders</a></li>
                                    <li><a href="{{ route('main.page-account') }}">My Wishlist</a></li>
                                    <li><a href="{{ route('main.page-account') }}">Setting</a></li>
                                    <li><a href="{{ route('main.page-login') }}">Sign out</a></li>
                                </ul>
                            </div>
                        </div><a class="font-lg icon-list icon-wishlist"
                            href="{{ route('main.shop-wishlist') }}"><span>Wishlist</span><span
                                class="number-item font-xs">5</span></a>
                        <div class="d-inline-block box-dropdown-cart"><span
                                class="font-lg icon-list icon-cart"><span>Cart</span><span
                                    class="number-item font-xs">2</span></span>
                            <div class="dropdown-cart">
                                <div class="item-cart mb-20">
                                    <div class="cart-image"><img
                                            src="{{ asset('/assets/imgs/page/homepage1/imgsp5.png') }}"
                                            alt="Ecom"></div>
                                    <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                            href="{{ route('main.shop-single-product') }}">2022 Apple iMac with Retina
                                            5K Display 8GB
                                            RAM, 256GB SSD</a>
                                        <p><span class="color-brand-2 font-sm-bold">1 x $2856.4</span></p>
                                    </div>
                                </div>
                                <div class="item-cart mb-20">
                                    <div class="cart-image"><img
                                            src="{{ asset('/assets/imgs/page/homepage1/imgsp4.png') }}"
                                            alt="Ecom"></div>
                                    <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                            href="{{ route('main.shop-single-product-2') }}">2022 Apple iMac with
                                            Retina
                                            5K Display
                                            8GB RAM, 256GB SSD</a>
                                        <p><span class="color-brand-2 font-sm-bold">1 x $2856.4</span></p>
                                    </div>
                                </div>
                                <div class="border-bottom pt-0 mb-15"></div>
                                <div class="cart-total">
                                    <div class="row">
                                        <div class="col-6 text-start"><span
                                                class="font-md-bold color-brand-3">Total</span></div>
                                        <div class="col-6"><span class="font-md-bold color-brand-1">$2586.3</span>
                                        </div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-6 text-start"><a class="btn btn-cart w-auto"
                                                href="{{ route('main.shop-cart') }}">View cart</a></div>
                                        <div class="col-6"><a class="btn btn-buy w-auto"
                                                href="{{ route('main.shop-checkout') }}">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><a class="font-lg icon-list icon-compare"
                            href="{{ route('main.shop-compare') }}"><span>Compare</span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="mobile-logo"><a class="d-flex" href="{{ route('main.index') }}"><img alt="Ecom"
                            src="{{ asset('/assets/imgs/template/logo.svg') }}"></a></div>
                <div class="perfect-scroll">
                    <div class="mobile-menu-wrap mobile-header-border">
                        <nav class="mt-15">
                            <ul class="mobile-menu font-heading">
                                <li class="has-children"><a class="active" href="{{ route('main.index') }}">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.index') }}">Homepage - 1</a></li>
                                        <li><a href="{{ route('main.index-2') }}">Homepage - 2</a></li>
                                        <li><a href="{{ route('main.index-3') }}">Homepage - 3</a></li>
                                        <li><a href="{{ route('main.index-4') }}">Homepage - 4</a></li>
                                        <li><a href="{{ route('main.index-5') }}">Homepage - 5</a></li>
                                        <li><a href="{{ route('main.index-6') }}">Homepage - 6</a></li>
                                        <li><a href="{{ route('main.index-7') }}">Homepage - 7</a></li>
                                        <li><a href="{{ route('main.index-8') }}">Homepage - 8</a></li>
                                        <li><a href="{{ route('main.index-9') }}">Homepage - 9</a></li>
                                        <li><a href="{{ route('main.index-10') }}">Homepage - 10</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.shop-grid') }}">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.shop-grid') }}">Shop Grid</a></li>
                                        <li><a href="{{ route('main.shop-grid-2') }}">Shop Grid 2</a></li>
                                        <li><a href="{{ route('main.shop-list') }}">Shop List</a></li>
                                        <li><a href="{{ route('main.shop-list-2') }}">Shop List 2</a></li>
                                        <li><a href="{{ route('main.shop-fullwidth') }}">Shop Fullwidth</a></li>
                                        <li><a href="{{ route('main.shop-single-product') }}">Single Product</a></li>
                                        <li><a href="{{ route('main.shop-single-product-2') }}">Single Product 2</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-single-product-3') }}">Single Product 3</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-single-product-4') }}">Single Product 4</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-cart') }}">Shop Cart</a></li>
                                        <li><a href="{{ route('main.shop-checkout') }}">Shop Checkout</a></li>
                                        <li><a href="{{ route('main.shop-compare') }}">Shop Compare</a></li>
                                        <li><a href="{{ route('main.shop-wishlist') }}">Shop Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.shop-vendor-list') }}">Vendors</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.shop-vendor-list') }}">Vendors Listing</a></li>
                                        <li><a href="{{ route('main.shop-vendor-single') }}">Vendor Single</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ url('#') }}">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.page-about-us') }}">About Us</a></li>
                                        <li><a href="{{ route('main.page-contact') }}">Contact Us</a></li>
                                        <li><a href="{{ route('main.page-careers') }}">Careers</a></li>
                                        <li><a href="{{ route('main.page-term') }}">Term and Condition</a></li>
                                        <li><a href="{{ route('main.page-register') }}">Register</a></li>
                                        <li><a href="{{ route('main.page-login') }}">Login</a></li>
                                        <li><a href="{{ route('main.page-404') }}">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.blog') }}">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.blog') }}">Blog Grid</a></li>
                                        <li><a href="{{ route('main.blog-2') }}">Blog Grid 2</a></li>
                                        <li><a href="{{ route('main.blog-list') }}">Blog List</a></li>
                                        <li><a href="{{ route('main.blog-big') }}">Blog Big</a></li>
                                        <li><a href="{{ route('main.blog-single') }}">Blog Single - Left sidebar</a>
                                        </li>
                                        <li><a href="{{ route('main.blog-single-2') }}">Blog Single - Right
                                                sidebar</a>
                                        </li>
                                        <li><a href="{{ route('main.blog-single-3') }}">Blog Single - No sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('main.page-contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-account">
                        <div class="mobile-header-top">
                            <div class="user-account"><a href="{{ route('main.page-account') }}"><img
                                        src="{{ asset('/assets/imgs/template/ava_1.png') }}" alt="Ecom"></a>
                                <div class="content">
                                    <h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
                                    <p class="font-xs text-muted">You have 3 new messages</p>
                                </div>
                            </div>
                        </div>
                        <ul class="mobile-menu">
                            <li><a href="{{ route('main.page-account') }}">My Account</a></li>
                            <li><a href="{{ route('main.page-account') }}">Order Tracking</a></li>
                            <li><a href="{{ route('main.page-account') }}">My Orders</a></li>
                            <li><a href="{{ route('main.page-account') }}">My Wishlist</a></li>
                            <li><a href="{{ route('main.page-account') }}">Setting</a></li>
                            <li><a href="{{ route('main.page-login') }}">Sign out</a></li>
                        </ul>
                    </div>
                    <div class="mobile-banner">
                        <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from
                                $899</span>
                            <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                            <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                href="{{ route('main.shop-grid') }}">learn more</a>
                        </div>
                    </div>
                    <div class="site-copyright color-gray-400 mt-30">Copyright 2022 &copy; Ecom - Marketplace
                        Template.<br>Designed by<a href="http://alithemes.com" target="_blank">&nbsp; AliThemes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-left"><a class="btn btn-open" href="{{ url('#') }}"></a>
        <ul class="menu-icons hidden">
            <li><a href="('javascript:void(0)') "><img src="{{ asset('/assets/imgs/template/monitor.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="('javascript:void(0)')"><img src="{{ asset('/assets/imgs/template/mobile.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/game.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/clock.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/airpod.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/airpods.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/mouse.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/music-play.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/bluetooth.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/clound.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/electricity.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/cpu.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/devices.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/driver.svg') }}"
                        alt="Ecom"></a></li>
            <li><a href="{{ url('#') }}"><img src="{{ asset('/assets/imgs/template/lamp.svg') }}"
                        alt="Ecom"></a></li>
        </ul>
        <ul class="menu-texts menu-close">
            <li class="has-children"><a href="{{ route('main.shop-grid-2') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/monitor.svg') }}" alt="Ecom"></span><span
                        class="text-link">Computers &amp; Accessories</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Computer Accessories</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Computer Cases</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Laptop</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">HDD</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">RAM</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Headphone</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ url('#') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/mobile.svg') }}" alt="Ecom"></span><span
                        class="text-link">Cell
                        Phones</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Phone Accessories</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Phone Cases</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Postpaid Phones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Unlocked Phones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Prepaid Phones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Prepaid Plans</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Refurbished Phones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Straight Talk</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">iPhone</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Samsung Galaxy</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Samsung Galaxy</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Samsung Galaxy</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Samsung Galaxy</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Samsung Galaxy</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/game.svg') }}" alt="Ecom"></span><span
                        class="text-link">Gaming
                        Gatgets</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Wireless Routers</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Cool New Gadgets</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Tech and Gadgets</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Geek Gifts and Gadgets</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Xbox Accessories</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">PlayStation Accessories</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/clock.svg') }}" alt="Ecom"></span><span
                        class="text-link">Smart
                        watches</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Smart Watches</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Fashion Smart Watches</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Smart Bracelets</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Pocket Watches</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Smart Rings</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Other Watches</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/airpods.svg') }}" alt="Ecom"></span><span
                        class="text-link">Wired Headphone</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">On-Ear Headphones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Earbud & In-Ear</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">DJ Headphones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">PC Accessories</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">PC Game Headsets</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/mouse.svg') }}" alt="Ecom"></span><span
                        class="text-link">Mouse
                        &amp; Keyboard</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Logitech</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Redragon</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Amazon Basics</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Microsoft</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">MageGee</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/music-play.svg') }}" alt="Ecom"></span><span
                        class="text-link">Headphone</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Car Audio Systems</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Cellphones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Desktops</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Gaming Consoles</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Telephones</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/bluetooth.svg') }}" alt="Ecom"></span><span
                        class="text-link">Bluetooth devices</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Player Accessories</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Computer Accessories</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Speakers & Audio</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Computer Networking</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Movies & Films</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/clound.svg') }}" alt="Ecom"></span><span
                        class="text-link">Cloud
                        Software</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Android</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Linux & Unix</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Macintosh</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Windows</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">iPhone & iOS</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/electricity.svg') }}" alt="Ecom"></span><span
                        class="text-link">Electric accessories</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Antenna Toppers</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Automotive Body Armor</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Power Inverter</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Gas Tank Doors</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Hood Scoops & Vents</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/cpu.svg') }}" alt="Ecom"></span><span
                        class="text-link">Mainboard &amp; CPU</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Computer CPU Processors</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Internal Fans & Cooling</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Graphics Cards</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Network I/O Port Cards</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Internal Memory Card</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/devices.svg') }}" alt="Ecom"></span><span
                        class="text-link">Desktop PC</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Graphic PC</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Office PC</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Gaming PC</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Server</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/driver.svg') }}" alt="Ecom"></span><span
                        class="text-link">Speaker</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">JBL</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Anker</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Pyle</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Bose</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Logitech</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/airpod.svg') }}" alt="Ecom"></span><span
                        class="text-link">Bluetooth Headphone</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">On-Ear Headphones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">In-Ear Headphones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Earbud</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Over-Ear Headphones</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Other</a></li>
                </ul>
            </li>
            <li class="has-children"><a href="{{ route('main.shop-grid') }}"><span class="img-link"><img
                            src="{{ asset('/assets/imgs/template/lamp.svg') }}" alt="Ecom"></span><span
                        class="text-link">Computer Decor</span></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('main.shop-grid') }}">Copyholders</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Office Bookends</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Business Card Holders</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Lap Desks</a></li>
                    <li><a href="{{ route('main.shop-grid') }}">Mouse Pads</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="mobile-logo"><a class="d-flex" href="{{ route('main.index') }}"><img alt="Ecom"
                            src="{{ asset('/assets/imgs/template/logo.svg') }}"></a></div>
                <div class="perfect-scroll">
                    <div class="mobile-menu-wrap mobile-header-border">
                        <nav class="mt-15">
                            <ul class="mobile-menu font-heading">
                                <li class="has-children"><a class="active"
                                        href="{{ route('main.index') }}">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.index') }}">Homepage - 1</a></li>
                                        <li><a href="{{ route('main.index-2') }}">Homepage - 2</a></li>
                                        <li><a href="{{ route('main.index-3') }}">Homepage - 3</a></li>
                                        <li><a href="{{ route('main.index-4') }}">Homepage - 4</a></li>
                                        <li><a href="{{ route('main.index-5') }}">Homepage - 5</a></li>
                                        <li><a href="{{ route('main.index-6') }}">Homepage - 6</a></li>
                                        <li><a href="{{ route('main.index-7') }}">Homepage - 7</a></li>
                                        <li><a href="{{ route('main.index-8') }}">Homepage - 8</a></li>
                                        <li><a href="{{ route('main.index-9') }}">Homepage - 9</a></li>
                                        <li><a href="{{ route('main.index-10') }}">Homepage - 10</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.shop-grid') }}">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.shop-grid') }}">Shop Grid</a></li>
                                        <li><a href="{{ route('main.shop-grid-2') }}">Shop Grid 2</a></li>
                                        <li><a href="{{ route('main.shop-list') }}">Shop List</a></li>
                                        <li><a href="{{ route('main.shop-list-2') }}">Shop List 2</a></li>
                                        <li><a href="{{ route('main.shop-fullwidth') }}">Shop Fullwidth</a></li>
                                        <li><a href="{{ route('main.shop-single-product') }}">Single Product</a></li>
                                        <li><a href="{{ route('main.shop-single-product-2') }}">Single Product 2</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-single-product-3') }}">Single Product 3</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-single-product-4') }}">Single Product 4</a>
                                        </li>
                                        <li><a href="{{ route('main.shop-cart') }}">Shop Cart</a></li>
                                        <li><a href="{{ route('main.shop-checkout') }}">Shop Checkout</a></li>
                                        <li><a href="{{ route('main.shop-compare') }}">Shop Compare</a></li>
                                        <li><a href="{{ route('main.shop-wishlist') }}">Shop Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.shop-vendor-list') }}">Vendors</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.shop-vendor-list') }}">Vendors Listing</a></li>
                                        <li><a href="{{ route('main.shop-vendor-single') }}">Vendor Single</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ url('#') }}">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.page-about-us') }}">About Us</a></li>
                                        <li><a href="{{ route('main.page-contact') }}">Contact Us</a></li>
                                        <li><a href="{{ route('main.page-careers') }}">Careers</a></li>
                                        <li><a href="{{ route('main.page-term') }}">Term and Condition</a></li>
                                        <li><a href="{{ route('main.page-register') }}">Register</a></li>
                                        <li><a href="{{ route('main.page-login') }}">Login</a></li>
                                        <li><a href="{{ route('main.page-404') }}">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a href="{{ route('main.blog') }}">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('main.blog') }}">Blog Grid</a></li>
                                        <li><a href="{{ route('main.blog-2') }}">Blog Grid 2</a></li>
                                        <li><a href="{{ route('main.blog-list') }}">Blog List</a></li>
                                        <li><a href="{{ route('main.blog-big') }}">Blog Big</a></li>
                                        <li><a href="{{ route('main.blog-single') }}">Blog Single - Left sidebar</a>
                                        </li>
                                        <li><a href="{{ route('main.blog-single-2') }}">Blog Single - Right
                                                sidebar</a>
                                        </li>
                                        <li><a href="{{ route('main.blog-single-3') }}">Blog Single - No sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('main.page-contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-account">
                        <div class="mobile-header-top">
                            <div class="user-account"><a href="{{ route('main.page-account') }}"><img
                                        src="{{ asset('/assets/imgs/template/ava_1.png') }}" alt="Ecom"></a>
                                <div class="content">
                                    <h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
                                    <p class="font-xs text-muted">You have 3 new messages</p>
                                </div>
                            </div>
                        </div>
                        <ul class="mobile-menu">
                            <li><a href="{{ route('main.page-account') }}">My Account</a></li>
                            <li><a href="{{ route('main.page-account') }}">Order Tracking</a></li>
                            <li><a href="{{ route('main.page-account') }}">My Orders</a></li>
                            <li><a href="{{ route('main.page-account') }}">My Wishlist</a></li>
                            <li><a href="{{ route('main.page-account') }}">Setting</a></li>
                            <li><a href="{{ route('main.page-login') }}">Sign out</a></li>
                        </ul>
                    </div>
                    <div class="mobile-banner">
                        <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from
                                $899</span>
                            <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                            <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                href="{{ route('main.shop-grid') }}">learn more</a>
                        </div>
                    </div>
                    <div class="site-copyright color-gray-400 mt-30">Copyright 2022 &copy; Ecom - Marketplace
                        Template.<br>Designed by<a href="http://alithemes.com" target="_blank">&nbsp; AliThemes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
