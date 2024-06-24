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
                <div>
                    <h2 class="content-title card-title">Invoice</h2>
                    <p>Details for Order ID: 3453012</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <header class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 mb-lg-0 mb-15"><span><i
                                            class="material-icons md-calendar_today"></i><b>Wed, Aug 13, 2022,
                                            4:34PM</b></span><br><small class="text-muted">Order ID: 3453012</small></div>
                                <div class="col-lg-6 col-md-6 ms-auto text-md-end"><a class="btn btn-primary"
                                        href="#"><i class="icon material-icons md-cloud_download mr-5"></i>Save
                                        PDF</a><a class="btn btn-secondary print ms-2" href="#"><i
                                            class="icon material-icons md-print mr-5"></i>Print</a></div>
                            </div>
                        </header>
                        <div class="card-body">
                            <div class="receipt-content">
                                <div class="container bootstrap snippets bootdey">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="invoice-wrapper">
                                                <div class="intro">Hi<strong> Steven Jobs</strong>,<br> This is the
                                                    receipt for a payment of<strong> $312.00</strong> (USD) for your works
                                                </div>
                                                <div class="payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-6"><span>Payment
                                                                No.</span><strong>434334343</strong></div>
                                                        <div class="col-sm-6 text-end"><span>Payment Date</span><strong>Jul
                                                                09, 2022 - 12:20 pm</strong></div>
                                                    </div>
                                                </div>
                                                <div class="payment-details">
                                                    <div class="row">
                                                        <div class="col-sm-6"><span>Client</span><strong>Andres felipe
                                                                posada</strong>
                                                            <p>989 5th Avenue<br>City of monterrey<br>55839<br>USA<br><a
                                                                    href="#">jonnydeff@gmail.com</a></p>
                                                        </div>
                                                        <div class="col-sm-6 text-end"><span>Payment To</span><strong>Juan
                                                                fernando arias</strong>
                                                            <p>344 9th Avenue<br>San Francisco<br>99383<br>USA<br><a
                                                                    href="#">juanfer@gmail.com</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="line-items">
                                                    <div class="headers clearfix">
                                                        <div class="row">
                                                            <div class="col-md-4">Description</div>
                                                            <div class="col-md-3">Quantity</div>
                                                            <div class="col-md-5 text-end">Amount</div>
                                                        </div>
                                                    </div>
                                                    <div class="items">
                                                        <div class="row item">
                                                            <div class="col-md-4 desc">T-shirt blue, XXL size</div>
                                                            <div class="col-md-3 qty">3</div>
                                                            <div class="col-md-5 amount text-end">$60.00</div>
                                                        </div>
                                                        <div class="row item">
                                                            <div class="col-md-4 desc">Winter jacket for men</div>
                                                            <div class="col-md-3 qty">1</div>
                                                            <div class="col-md-5 amount text-end">$20.00</div>
                                                        </div>
                                                        <div class="row item">
                                                            <div class="col-md-4 desc">Jeans wear for men</div>
                                                            <div class="col-md-3 qty">2</div>
                                                            <div class="col-md-5 amount text-end">$18.00</div>
                                                        </div>
                                                    </div>
                                                    <div class="total text-end">
                                                        <p class="extra-notes"><strong>Extra Notes</strong>Please send all
                                                            items at the same time to shipping address by next week.
                                                            Thanks a lot.
                                                        </p>
                                                        <div class="field">Subtotal<span>$379.00</span></div>
                                                        <div class="field">Shipping<span>$0.00</span></div>
                                                        <div class="field">Discount<span>4.5%</span></div>
                                                        <div class="field grand-total">Total<span>$312.00</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer">Copyright © 2022. company name</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
