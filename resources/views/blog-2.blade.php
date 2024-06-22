@extends('Layout.master')
@section('content')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="index">Home</a></li>
                        <li><a class="font-xs color-gray-500" href="blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-0 text-lg-start text-center">
                                    <h5 class="color-brand-3 text-uppercase">NEWS &amp; BLOGS</h5>
                                </div>
                                <div class="col-xl-10 col-lg-9 mb-0 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Showing 1&ndash;16 of
                                        17 results</span>
                                    <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Sort
                                            by:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Latest posts</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item active" href="#">Latest posts</a></li>
                                                <li><a class="dropdown-item" href="#">Oldest posts</a></li>
                                                <li><a class="dropdown-item" href="#">Comments posts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Show</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort2" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-display="static"><span>30
                                                    items</span></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                                <li><a class="dropdown-item active" href="#">30 items</a></li>
                                                <li><a class="dropdown-item" href="#">50 items</a></li>
                                                <li><a class="dropdown-item" href="#">100 items</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-inline-block"><a class="view-type-grid mr-5 active" href="blog"></a><a
                                            class="view-type-list" href="blog-list"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12 mb-50 display-list">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"><img
                                                src="assets/imgs/page/homepage1/img-1.png" alt="Ecom"></a></div>
                                    <div class="blog-info"><a class="tag-dot font-xs" href="#">Technology</a><a
                                            class="color-gray-1100" href="blog-single">
                                            <h4 class="mb-15">Augmented and Virtual Reality Challenges and Future Trends
                                                Virtual Reality Shopping</h4>
                                        </a>
                                        <p class="font-md color-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <div class="row mt-20">
                                            <div class="col-8"><span class="color-gray-500 font-sm mr-30">August 30,
                                                    2022</span><span class="color-gray-500 font-sm">4<span>Mins
                                                        read</span></span></div>
                                            <div class="col-4 text-end"><a class="btn btn-arrow-2">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-13.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">The latest technologies to be used for VR in 2022</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-14.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">The fate of Elon Musks deal to buy Twitter</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-15.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">Binance blockchain hit by $570 million crypto</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-16.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">The Twitter-Musk trial is now on pause</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-17.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">The latest technologies to be used for VR in 2022</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-9.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">Apple unveils iPhone 14 at far out even</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-8.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">Walmart enters the metaverse with Roblox</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-7.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">Take no prisoners: In the Feds inflation fight</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-6.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">Amazon raising hourly pay for warehouse </h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-5.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">Who is who: Meet the Murdoch Family </h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-4.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">NFL has a new halftime show sponsor</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-40">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single"></a><img
                                            src="assets/imgs/page/blog/blog-3.jpg" alt="Ecom"></div><a
                                        class="tag-dot font-xs" href="blog">Technology</a><a class="color-gray-1100"
                                        href="blog-single">
                                        <h4 class="mb-10">Actress details sexual harassment on sitcom set</h4>
                                    </a>
                                    <p class="font-xs color-gray-500">Donec rhoncus quis diam sit amet faucibus. Vivamus
                                        pellentesque, sem sed convallis ultricies, ante eros laoreet libero, vitae suscipit
                                        lorem turpis sit amet lectus.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a class="btn btn-gray font-xs font-medium">Read
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link page-prev" href="#"></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link page-next" href="#"></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-border">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Blog Categories</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    <li><a href="blog">Technology Trending<span class="number">09</span></a></li>
                                    <li><a href="blog">Entertainment<span class="number">12</span></a></li>
                                    <li><a href="blog">Tech Reviews<span class="number">24</span></a></li>
                                    <li><a href="blog">Gaming Blog<span class="number">34</span></a></li>
                                    <li><a href="blog">Crypto news<span class="number">65</span></a></li>
                                    <li><a href="blog">Software Development<span class="number">15</span></a></li>
                                    <li><a href="blog">FinTech<span class="number">76</span></a></li>
                                    <li><a href="blog">Health Tech<span class="number">89</span></a></li>
                                    <li><a href="blog">Tips and Tricks<span class="number">23</span></a></li>
                                    <li><a href="blog">Make money online<span class="number">98</span></a></li>
                                </ul>
                                <div>
                                    <div class="collapse" id="moreMenu">
                                        <ul class="list-nav-arrow">
                                            <li><a href="blog-2">Home theater<span class="number">98</span></a></li>
                                            <li><a href="blog-2">Cameras & drones<span class="number">124</span></a>
                                            </li>
                                            <li><a href="blog-2">PC gaming<span class="number">56</span></a></li>
                                        </ul>
                                    </div><a class="link-see-more mt-5" data-bs-toggle="collapse" href="#moreMenu"
                                        role="button" aria-expanded="false" aria-controls="moreMenu">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="box-slider-item mb-30">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Trending News</h5>
                            </div>
                            <div class="content-slider">
                                <div class="box-swiper slide-shop">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single"><img
                                                                src="assets/imgs/page/blog/blog-1.jpg" alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single">The latest technologies to be used for
                                                            VR in 2022</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">3<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single"><img
                                                                src="assets/imgs/page/blog/blog-2.jpg" alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single">The fate of Elon Musks deal to buy
                                                            Twitter</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">4<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single"><img
                                                                src="assets/imgs/page/blog/blog-3.jpg" alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single">Binance blockchain hit by $570 million
                                                            crypto</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">5<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single"><img
                                                                src="assets/imgs/page/blog/blog-4.jpg" alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single">The Twitter-Musk trial is now on
                                                            pause</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">6<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single"><img
                                                                src="assets/imgs/page/blog/blog-5.jpg" alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single">Apple unveils iPhone 14 at far out
                                                            event</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">3<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single"><img
                                                                src="assets/imgs/page/blog/blog-6.jpg" alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single">Walmart enters the metaverse with
                                                            Roblox</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">4<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single"><img
                                                                src="assets/imgs/page/blog/blog-7.jpg" alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single">Take no prisoners: In the Feds
                                                            inflation
                                                            fight</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">5<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single"><img
                                                                src="assets/imgs/page/blog/blog-8.jpg" alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single">Who is who: Meet the Murdoch Family</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">6<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller">
                                    </div>
                                    <div
                                        class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-slider-item">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Popular Tags</h5>
                            </div>
                            <div class="content-slider mb-50"><a class="btn btn-border mr-5" href="blog">Games</a><a
                                    class="btn btn-border mr-5" href="blog">Electronics</a><a
                                    class="btn btn-border mr-5" href="blog">Video</a><a class="btn btn-border mr-5"
                                    href="blog">Cellphone</a><a class="btn btn-border mr-5"
                                    href="blog">Indoor</a><a class="btn btn-border mr-5" href="blog">VGA
                                    Card</a><a class="btn btn-border mr-5" href="blog">USB</a><a
                                    class="btn btn-border mr-5" href="blog">Lightning</a><a
                                    class="btn btn-border mr-5" href="blog">Camera</a><a class="btn btn-border"
                                    href="blog">Window</a><a class="btn btn-border mr-5" href="blog">Air
                                    Vent</a><a class="btn btn-border mr-5" href="blog">Bedroom</a><a
                                    class="btn btn-border mr-5" href="blog">Laptop</a><a class="btn btn-border mr-5"
                                    href="blog">Dashboard</a><a class="btn btn-border mr-5"
                                    href="blog">Keyboard</a></div>
                        </div>
                        <div class="banner-right h-500 text-center mb-30"><span class="text-no font-11">No.9</span>
                            <h5 class="font-23 mt-20">Sensitive Touch<br class="d-none d-lg-block">without fingerprint
                            </h5>
                            <p class="text-desc font-16 mt-15">Smooth handle and accurate click</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-90 mb-50">
            <div class="container">
                <ul class="list-col-5">
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="assets/imgs/template/delivery.svg" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                                <p class="font-sm color-gray-500">From all orders over $10</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="assets/imgs/template/support.svg" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                                <p class="font-sm color-gray-500">Shop with an expert</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="assets/imgs/template/voucher.svg" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                                <p class="font-sm color-gray-500">Refer a friend</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="assets/imgs/template/return.svg" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                                <p class="font-sm color-gray-500">Free return over $200</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="assets/imgs/template/secure.svg" alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                                <p class="font-sm color-gray-500">100% Protected</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section-box box-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
                        <p class="font-lg color-white">Get E-mail updates about our latest shop and <span
                                class="font-lg-bold">special offers.</span></p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <div class="box-form-newsletter mt-15">
                            <form class="form-newsletter">
                                <input class="input-newsletter font-xs" value="" placeholder="Your email Address">
                                <button class="btn btn-brand-2">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
