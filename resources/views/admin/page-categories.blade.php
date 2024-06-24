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
                    <h2 class="content-title card-title">Categories</h2>
                    <p>Add, edit or delete a category</p>
                </div>
                <div>
                    <input class="form-control bg-white" type="text" placeholder="Search Categories">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form></form>
                            <div class="mb-4">
                                <label class="form-label" for="product_name">Name</label>
                                <input class="form-control" id="product_name" type="text" placeholder="Type here">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="product_slug">Slug</label>
                                <input class="form-control" id="product_slug" type="text" placeholder="Type here">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Parent</label>
                                <select class="form-select">
                                    <option>Clothes</option>
                                    <option>T-Shirts</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" placeholder="Type here"></textarea>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary">Create category</button>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Slug</th>
                                            <th>Order</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>21</td>
                                            <td><b>Men clothes</b></td>
                                            <td>Men clothes</td>
                                            <td>/men</td>
                                            <td>1</td>
                                            <td class="text-end">
                                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                        href="#" data-bs-toggle="dropdown"><i
                                                            class="material-icons md-more_horiz"></i></a>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">View detail</a><a class="dropdown-item"
                                                            href="#">Edit info</a><a
                                                            class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td><b>Women fashion</b></td>
                                            <td>Fashions for Women</td>
                                            <td>/women</td>
                                            <td>2</td>
                                            <td class="text-end">
                                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                        href="#" data-bs-toggle="dropdown"><i
                                                            class="material-icons md-more_horiz"></i></a>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">View detail</a><a class="dropdown-item"
                                                            href="#">Edit info</a><a
                                                            class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>3</td>
                                            <td><b>Kids clothes</b></td>
                                            <td>Clothes for kids</td>
                                            <td>/kids</td>
                                            <td>3</td>
                                            <td class="text-end">
                                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                        href="#" data-bs-toggle="dropdown"><i
                                                            class="material-icons md-more_horiz"></i></a>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">View detail</a><a class="dropdown-item"
                                                            href="#">Edit info</a><a
                                                            class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><i
                                                    class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                            <td>4</td>
                                            <td><b>Hot Gifts</b></td>
                                            <td>Hot Gifts</td>
                                            <td>/gifts</td>
                                            <td>4</td>
                                            <td class="text-end">
                                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                        href="#" data-bs-toggle="dropdown"><i
                                                            class="material-icons md-more_horiz"></i></a>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">View detail</a><a class="dropdown-item"
                                                            href="#">Edit info</a><a
                                                            class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><i
                                                    class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                            <td>5</td>
                                            <td><b>Electronics</b></td>
                                            <td>Electronics</td>
                                            <td>/electr</td>
                                            <td>5</td>
                                            <td class="text-end">
                                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                        href="#" data-bs-toggle="dropdown"><i
                                                            class="material-icons md-more_horiz"></i></a>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">View detail</a><a class="dropdown-item"
                                                            href="#">Edit info</a><a
                                                            class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>6</td>
                                            <td><b>Accessories</b></td>
                                            <td>Accessories</td>
                                            <td>/accessories</td>
                                            <td>6</td>
                                            <td class="text-end">
                                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                        href="#" data-bs-toggle="dropdown"><i
                                                            class="material-icons md-more_horiz"></i></a>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">View detail</a><a class="dropdown-item"
                                                            href="#">Edit info</a><a
                                                            class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>7</td>
                                            <td><b>Jewellery</b></td>
                                            <td>Jewellery</td>
                                            <td>/jewel</td>
                                            <td>7</td>
                                            <td class="text-end">
                                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                        href="#" data-bs-toggle="dropdown"><i
                                                            class="material-icons md-more_horiz"></i></a>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">View detail</a><a class="dropdown-item"
                                                            href="#">Edit info</a><a
                                                            class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>8</td>
                                            <td><b>Interiors</b></td>
                                            <td>Interiors</td>
                                            <td>/interior</td>
                                            <td>8</td>
                                            <td class="text-end">
                                                <div class="dropdown"><a class="btn btn-light rounded btn-sm font-sm"
                                                        href="#" data-bs-toggle="dropdown"><i
                                                            class="material-icons md-more_horiz"></i></a>
                                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                            href="#">View detail</a><a class="dropdown-item"
                                                            href="#">Edit info</a><a
                                                            class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
