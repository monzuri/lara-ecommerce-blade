@extends('main.Layout.master')
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
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-0 text-lg-start text-center">
                                    <h5 class="color-brand-3 text-uppercase">BLOGS</h5>
                                </div>
                                <div class="col-xl-10 col-lg-9 mb-0 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Showing
                                        1&ndash;16 of 17 results</span>
                                    <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Sort
                                            by:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Latest posts</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item active" href="#">Latest posts</a>
                                                </li>
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
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="col-lg-12 mb-80">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single"></a><img class="w-100"
                                        src="assets/imgs/page/blog/img-big.png" alt="Ecom"></div>
                                <div class="info-blog"><a class="tag-dot font-xs" href="blog">Technology</a><a
                                        class="color-gray-1100" href="blog-single">
                                        <h3 class="mt-5 mb-10">Actress details sexual harassment on sitcom set</h3>
                                    </a>
                                    <p class="font-sm color-gray-500">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a
                                                class="btn btn-arrow-2 btn-arrow-2-reverse font-sm-bold">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-80">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single"></a><img class="w-100"
                                        src="assets/imgs/page/blog/img-big2.png" alt="Ecom"></div>
                                <div class="info-blog"><a class="tag-dot font-xs" href="blog">Technology</a><a
                                        class="color-gray-1100" href="blog-single">
                                        <h3 class="mt-5 mb-10">The FTC Is Closing in on Runaway AI</h3>
                                    </a>
                                    <p class="font-sm color-gray-500">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a
                                                class="btn btn-arrow-2 btn-arrow-2-reverse font-sm-bold">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-80">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single"></a><img class="w-100"
                                        src="assets/imgs/page/blog/img-big3.png" alt="Ecom"></div>
                                <div class="info-blog"><a class="tag-dot font-xs" href="blog">Technology</a><a
                                        class="color-gray-1100" href="blog-single">
                                        <h3 class="mt-5 mb-10">Who Will Own the Art of the Future?</h3>
                                    </a>
                                    <p class="font-sm color-gray-500">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a
                                                class="btn btn-arrow-2 btn-arrow-2-reverse font-sm-bold">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-80">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single"></a><img class="w-100"
                                        src="assets/imgs/page/blog/img-big4.png" alt="Ecom"></div>
                                <div class="info-blog"><a class="tag-dot font-xs" href="blog">Technology</a><a
                                        class="color-gray-1100" href="blog-single">
                                        <h3 class="mt-5 mb-10">To Fix Tech, Democracy Needs to Grow Up</h3>
                                    </a>
                                    <p class="font-sm color-gray-500">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a
                                                class="btn btn-arrow-2 btn-arrow-2-reverse font-sm-bold">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-80">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single"></a><img class="w-100"
                                        src="assets/imgs/page/blog/img-big5.png" alt="Ecom"></div>
                                <div class="info-blog"><a class="tag-dot font-xs" href="blog">Technology</a><a
                                        class="color-gray-1100" href="blog-single">
                                        <h3 class="mt-5 mb-10">The latest technologies to be used for VR in 2022</h3>
                                    </a>
                                    <p class="font-sm color-gray-500">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="row mt-20">
                                        <div class="col-8"><span class="color-gray-500 font-xs mr-30">August 30,
                                                2022</span><span class="color-gray-500 font-xs">4<span>Mins
                                                    read</span></span></div>
                                        <div class="col-4 text-end"><a
                                                class="btn btn-arrow-2 btn-arrow-2-reverse font-sm-bold">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-center">
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
                        <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount
                        </h3>
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
