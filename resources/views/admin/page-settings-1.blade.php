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
            <div class="content-header">
                <h2 class="content-title">Profile setting</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row gx-5">
                        <aside class="col-lg-3 border-end">
                            <nav class="nav nav-pills flex-lg-column mb-4"><a class="nav-link active" aria-current="page"
                                    href="#">General</a><a class="nav-link" href="#">Moderators</a><a
                                    class="nav-link" href="#">Admin account</a><a class="nav-link"
                                    href="#">SEO settings</a><a class="nav-link" href="#">Mail settings</a><a
                                    class="nav-link" href="#">Newsletter</a></nav>
                        </aside>
                        <div class="col-lg-9">
                            <section class="content-body p-xl-4">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row gx-3">
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">First name</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <!-- col .//-->
                                                <div class="col-6 mb-3">
                                                    <label class="form-label">Last name</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <!-- col .//-->
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control" type="email"
                                                        placeholder="example@mail.com">
                                                </div>
                                                <!-- col .//-->
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label">Phone</label>
                                                    <input class="form-control" type="tel" placeholder="+1234567890">
                                                </div>
                                                <!-- col .//-->
                                                <div class="col-lg-12 mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <!-- col .//-->
                                                <div class="col-lg-6 mb-3">
                                                    <label class="form-label">Birthday</label>
                                                    <input class="form-control" type="date">
                                                </div>
                                                <!-- col .//-->
                                                <!-- row.//-->
                                                <!-- col.//-->
                                            </div>
                                        </div>
                                        <aside class="col-lg-4">
                                            <figure class="text-lg-center"><img class="img-lg mb-3 img-avatar"
                                                    src="assets/imgs/people/avatar1.jpg" alt="User Photo">
                                                <figcaption><a class="btn btn-light rounded font-md" href="#"><i
                                                            class="icons material-icons md-backup font-md"></i> Upload</a>
                                                </figcaption>
                                            </figure>
                                        </aside>
                                        <!-- col.//-->
                                        <!-- row.//-->
                                    </div><br>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </form>
                                <hr class="my-5">
                                <div class="row" style="max-width:920px">
                                    <div class="col-md">
                                        <article class="box mb-3 bg-light"><a
                                                class="btn float-end btn-light btn-sm rounded font-md"
                                                href="#">Change</a>
                                            <h6>Password</h6><small class="text-muted d-block" style="width:70%">You can
                                                reset or change your password by clicking here</small>
                                        </article>
                                    </div>
                                    <!-- col.//-->
                                    <div class="col-md">
                                        <article class="box mb-3 bg-light"><a
                                                class="btn float-end btn-light rounded btn-sm font-md"
                                                href="#">Deactivate</a>
                                            <h6>Remove account</h6><small class="text-muted d-block"
                                                style="width:70%">Once you delete your account, there is no going
                                                back.</small>
                                        </article>
                                    </div>
                                    <!-- col.//-->
                                    <!-- row.//-->
                                    <!-- content-body .//-->
                                    <!-- col.//-->
                                    <!-- row.//-->
                                    <!-- card body end//-->
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
