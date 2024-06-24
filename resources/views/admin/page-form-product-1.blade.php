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
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Add New Product</h2>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                            <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Basic</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-4">
                                    <label class="form-label" for="product_name">Product title</label>
                                    <input class="form-control" id="product_name" type="text"
                                        placeholder="Type here">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Full description</label>
                                    <textarea class="form-control" placeholder="Type here" rows="4"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Regular price</label>
                                            <div class="row gx-2"></div>
                                            <input class="form-control" placeholder="$" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label">Promotional price</label>
                                            <input class="form-control" placeholder="$" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">Currency</label>
                                        <select class="form-select">
                                            <option> USD</option>
                                            <option> EUR</option>
                                            <option> RUBL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tax rate</label>
                                    <input class="form-control" id="product_name" type="text" placeholder="%">
                                </div>
                                <label class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value=""><span
                                        class="form-check-label"> Make a template</span>
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Shipping</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label" for="product_name">Width</label>
                                            <input class="form-control" id="product_name" type="text"
                                                placeholder="inch">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label" for="product_name">Height</label>
                                            <input class="form-control" id="product_name" type="text"
                                                placeholder="inch">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="product_name">Weight</label>
                                        <input class="form-control" id="product_name" type="text" placeholder="gam">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="product_name">Shipping fees</label>
                                        <input class="form-control" id="product_name" type="text" placeholder="$">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Media</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload"><img src="assets/imgs/theme/upload.svg" alt="">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Organization</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gx-2">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="form-select">
                                        <option> Automobiles</option>
                                        <option> Home items</option>
                                        <option> Electronics</option>
                                        <option> Smartphones</option>
                                        <option> Sport items</option>
                                        <option> Baby and Tous</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label">Sub-category</label>
                                    <select class="form-select">
                                        <option> Nissan</option>
                                        <option> Honda</option>
                                        <option> Mercedes</option>
                                        <option> Chevrolet</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="product_name">Tags</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
