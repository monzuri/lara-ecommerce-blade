@extends('admin.Layout.master')
@section('content')
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input class="form-control" list="search_terms" type="text" placeholder="Search term">
                        <button class="btn btn-light bg" type="button"><i class="material-icons md-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products"></option>
                        <option value="New orders"></option>
                        <option value="Apple iphone"></option>
                        <option value="Ahmed Hassan"></option>
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i
                        class="material-icons md-apps"></i></button>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link btn-icon" href="#"><i
                                class="material-icons md-notifications animation-shake"></i><span
                                class="badge rounded-pill">3</span></a></li>
                    <li class="nav-item"><a class="nav-link btn-icon darkmode" href="#"><i
                                class="material-icons md-nights_stay"></i></a></li>
                    <li class="nav-item"><a class="requestfullscreen nav-link btn-icon" href="#"><i
                                class="material-icons md-cast"></i></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownLanguage" data-bs-toggle="dropdown"
                            href="#" aria-expanded="false"><i class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage"><a
                                class="dropdown-item text-brand" href="#"><img src="assets/imgs/theme/flag-us.png"
                                    alt="English">English</a><a class="dropdown-item" href="#"><img
                                    src="assets/imgs/theme/flag-fr.png" alt="Français">Fran&ccedil;ais</a><a
                                class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-jp.png"
                                    alt="Français">&#x65E5;&#x672C;&#x8A9E;</a><a class="dropdown-item" href="#"><img
                                    src="assets/imgs/theme/flag-cn.png" alt="Français">&#x4E2D;&#x56FD;&#x4EBA;</a></div>
                    </li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownAccount" data-bs-toggle="dropdown"
                            href="#" aria-expanded="false"><img class="img-xs rounded-circle"
                                src="assets/imgs/people/avatar2.jpg" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount"><a
                                class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit
                                Profile</a><a class="dropdown-item" href="#"><i
                                    class="material-icons md-settings"></i>Account Settings</a><a class="dropdown-item"
                                href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a><a
                                class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a><a
                                class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help
                                center</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#"><i
                                    class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="content-main">
            <div class="content-header"><a href="javascript:history.back()"><i class="material-icons md-arrow_back"></i> Go
                    back</a></div>
            <div class="card mb-4">
                <div class="card-header bg-primary" style="height:150px"></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl col-lg flex-grow-0" style="flex-basis:230px">
                            <div class="img-thumbnail shadow w-100 bg-white position-relative text-center"
                                style="height:190px; width:200px; margin-top:-120px"><img class="center-xy img-fluid"
                                    src="assets/imgs/brands/brand-3.jpg" alt="Logo Brand"></div>
                        </div>
                        <!-- col.//-->
                        <div class="col-xl col-lg">
                            <h3>Cocorico sports shop</h3>
                            <p>3891 Ranchview Dr. Richardson, California 62639</p>
                        </div>
                        <!-- col.//-->
                        <div class="col-xl-4 text-md-end">
                            <select class="form-select w-auto d-inline-block">
                                <option>Actions</option>
                                <option>Disable shop</option>
                                <option>Analyze</option>
                                <option>Something</option>
                            </select><a class="btn btn-primary" href="#">View live<i
                                    class="material-icons md-launch"></i></a>
                        </div>
                        <!-- col.//-->
                        <!-- card-body.//-->
                        <hr class="my-4">
                        <div class="row g-4">
                            <div class="col-md-12 col-lg-4 col-xl-2">
                                <article class="box">
                                    <p class="mb-0 text-muted">Total sales:</p>
                                    <h5 class="text-success">238</h5>
                                    <p class="mb-0 text-muted">Revenue:</p>
                                    <h5 class="text-success mb-0">$2380</h5>
                                </article>
                            </div>
                            <!-- col.//-->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <h6>Contacts</h6>
                                <p>Manager: Jerome Bell<br> info@example.com<br> (229) 555-0109, (808) 555-0111</p>
                            </div>
                            <!-- col.//-->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <h6>Address</h6>
                                <p>Country: California<br> Address: Ranchview Dr. Richardson<br> Postal code: 62639</p>
                            </div>
                            <!-- col.//-->
                            <div class="col-sm-6 col-xl-4 text-xl-end"><map
                                    class="mapbox position-relative d-inline-block"><img class="rounded2"
                                        src="assets/imgs/misc/map.jpg" alt="map" height="120"><span
                                        class="map-pin" style="top:50px; left: 100px"></span>
                                    <button
                                        class="btn btn-sm btn-brand position-absolute bottom-0 end-0 mb-15 mr-15 font-xs">
                                        Large</button></map></div>
                            <!-- col.//-->
                            <!-- row.//-->
                            <!-- card-body.//-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- card.//-->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Products by seller</h5>
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/1.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/2.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/3.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Jeans short new model</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/4.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Travel Bag XL</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/5.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/6.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/7.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/8.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Apple Airpods CB-133</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/9.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/10.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/11.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Jeans short new model</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/12.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Travel Bag XL</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/1.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/2.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/3.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Jeans short new model</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/4.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Travel Bag XL</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/5.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/6.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/7.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/8.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Apple Airpods CB-133</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/9.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/10.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Product name</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/11.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Jeans short new model</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6">
                            <div class="card card-product-grid"><a class="img-wrap" href="#"><img
                                        src="assets/imgs/items/12.jpg" alt="Product"></a>
                                <div class="info-wrap"><a class="title" href="#">Travel Bag XL</a>
                                    <div class="price mt-1">$179.00</div>
                                    <!-- price-wrap.//-->
                                    <!-- card-product  end//-->
                                    <!-- col.//-->
                                    <!-- row.//-->
                                    <!-- card-body.//-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card.//-->
            <div class="pagination-area mt-30 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>
    @endsection
