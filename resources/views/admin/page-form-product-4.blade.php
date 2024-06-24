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
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-5">
                                <aside class="col-lg-3 border-end">
                                    <nav class="nav nav-pills flex-column mb-4"><a class="nav-link active"
                                            aria-current="page" href="#">General</a><a class="nav-link"
                                            href="#">Catgeory info</a><a class="nav-link"
                                            href="#">Pricing</a><a class="nav-link" href="#">Images</a><a
                                            class="nav-link" href="#">SEO keywords</a><a class="nav-link"
                                            href="#">Related items</a></nav>
                                </aside>
                                <div class="col-lg-9">
                                    <section class="content-body p-xl-4">
                                        <form>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Product name*</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Description*</label>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control" placeholder="Type here" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Brand</label>
                                                <div class="col-lg-4"><small class="text-muted font-sm mb-10">Multiselect:
                                                        Cmd+click</small>
                                                    <select class="form-control select-multiple" multiple=""
                                                        size="4">
                                                        <option>Adidas</option>
                                                        <option>Puma</option>
                                                        <option>Apple</option>
                                                        <option>Toyota</option>
                                                        <option>Toshiba</option>
                                                        <option>Artel</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Tax ID</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control" type="number" placeholder="012345678">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Related tags</label>
                                                <div class="col-lg-4">
                                                    <input class="form-control" type="text" placeholder="Type">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-lg-3 col-form-label">Status</label>
                                                <div class="col-lg-9">
                                                    <label class="form-check my-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            checked=""><span class="form-check-label">Enable this
                                                            product</span>
                                                    </label>
                                                </div>
                                            </div><br>
                                            <button class="btn btn-primary" type="submit"> Continue to next</button>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
