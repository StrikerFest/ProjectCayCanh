<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon"
        href="{{ asset('assets/images/logo-img.png+++++++++++++++++') }}"
        type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    @livewireStyles
        <title>Minh - Mộc</title>
</head>

<body class="bg-theme bg-theme2">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon"
                        alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Minh - Mộc</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/admin">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div>Trang Chủ</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-cart'></i>
                        </div>
                        <div class="menu-title">Sản Phẩm</div>
                    </a>
                    <ul>
                        <li> <a href="/admin/product"><i class="bx bx-right-arrow-alt"></i>Sản Phẩm</a>
                        </li>
                        <li> <a href="/admin/category"><i class="bx bx-right-arrow-alt"></i>Loại Sản Phẩm</a>
                        </li>
                        <li> <a href="/allorder"><i class="bx bx-right-arrow-alt"></i>Hóa Đơn</a>
                        </li>
                        <li> <a href="/admin/post"><i class="bx bx-right-arrow-alt"></i>blog</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="user-profile.html">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">Quản lý Admin</div>
                    </a>
                </li>

                <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative search-bar-box">
                            <input type="text" class="form-control search-control" placeholder="Type to search...">
                            <span class="position-absolute top-50 search-show translate-middle-y"><i
                                    class='bx bx-search'></i></span>
                            <span class="position-absolute top-50 search-close translate-middle-y"><i
                                    class='bx bx-x'></i></span>
                        </div>
                    </div>
                    <di class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                                    <i class='bx bx-bell'></i>
                                </a> -->
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Notifications</p>
                                            <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                    </a> -->
                                    <div class="header-notifications-list">

                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Notifications</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">

                                <div class="dropdown-menu dropdown-menu-end">

                                    <div class="header-message-list">

                                    </div>

                                </div>
                            </li>
                        </ul>
                    </di>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/images/avatars/avatar-2.png') }}"
                                class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Pauline Seitz</p>
                                <p class="designattion mb-0">Web Designer</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Số lượng sản phẩm</p>
                                        <h4 class="my-1">{{ $countProduct }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Tổng số khác hàng</p>
                                        <h4 class="my-1">{{ $countCustomer }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Tổng số đơn hàng</p>
                                        <h4 class="my-1">{{ $countOrder }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <div class="row row-cols-1 row-cols-xl-2">
                    <div class="col d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-1">Doanh Thu Theo Tháng</h5>
                                        <p class="mb-0 font-13"><i class='bx bxs-calendar'></i>in last 30 days revenue
                                        </p>
                                    </div>
                                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-3 mt-4">
                                    <div class="col">
                                        <div>
                                            <p class="mb-0">Revenue</p>
                                            <h4 class="my-1 text-white">$4805</h4>
                                            <p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i>$1458
                                                Since last month</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <p class="mb-0">Total Customers</p>
                                            <h4 class="my-1 text-white">8.4K</h4>
                                            <p class="mb-0 font-13"><i class='bx bxs-up-arrow align-middle'></i>12.3%
                                                Since last month</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <p class="mb-0">Store Visitors</p>
                                            <h4 class="my-1 text-white">59K</h4>
                                            <p class="mb-0 font-13"><i class='bx bxs-down-arrow align-middle'></i>2.4%
                                                Since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-1">Top Bán chạy</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list p-3 mb-3">
                                @foreach($top10Product as $top)
                                    <div class="row border mx-0 py-2 radius-10 cursor-pointer">
                                        <div class="col-sm-6">
                                            <div class="d-flex align-items-center">
                                                <div class="product-img">
                                                    <img src="http://127.0.0.1:8000/storage/images/{{ $top->image }}"
                                                        alt="" />
                                                </div>
                                                <div class="ms-2">
                                                    <h6 class="mb-1">{{ $top->name }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <!-- <div class="row">
                    <div class="col-xl-8 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-1">Transaction History</h5>
                                        <p class="mb-0 font-13"><i class='bx bxs-calendar'></i>in last 30 days revenue
                                        </p>
                                    </div>
                                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                    </div>
                                </div>
                                <div class="table-responsive mt-4">
                                    <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Payment Name</th>
                                                <th>Date & Time</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-1.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                                            <p class="mb-0 font-13">Refrence Id #8547846</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 10, 2021</td>
                                                <td>+256.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Completed
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-2.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
                                                            <p class="mb-0 font-13">Refrence Id #9653248</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 12, 2021</td>
                                                <td>+566.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">In
                                                        Progress</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-3.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
                                                            <p class="mb-0 font-13">Refrence Id #7689524</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 14, 2021</td>
                                                <td>+636.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Declined
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-4.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from John Roman</h6>
                                                            <p class="mb-0 font-13">Refrence Id #8335884</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 15, 2021</td>
                                                <td>+246.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Completed
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-7.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                            <p class="mb-0 font-13">Refrence Id #7865986</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 16, 2021</td>
                                                <td>+876.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">In
                                                        Progress</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-8.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                            <p class="mb-0 font-13">Refrence Id #8576420</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 18, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Completed
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-9.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from James Caviness</h6>
                                                            <p class="mb-0 font-13">Refrence Id #3775420</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 18, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Completed
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-10.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
                                                            <p class="mb-0 font-13">Refrence Id #3768920</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 19, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Completed
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-11.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
                                                            <p class="mb-0 font-13">Refrence Id #9673520</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 20, 2021</td>
                                                <td>+86.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Declined
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-12.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
                                                            <p class="mb-0 font-13">Refrence Id #8576420</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 18, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Completed
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-13.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from David Buckley</h6>
                                                            <p class="mb-0 font-13">Refrence Id #8576420</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 22, 2021</td>
                                                <td>+854.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">In
                                                        Progress</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <img src="assets/images/avatars/avatar-14.png"
                                                                class="rounded-circle" width="46" height="46" alt="" />
                                                        </div>
                                                        <div class="ms-2">
                                                            <h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
                                                            <p class="mb-0 font-13">Refrence Id #4278620</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Jan 18, 2021</td>
                                                <td>+536.00</td>
                                                <td>
                                                    <div class="badge rounded-pill bg-light text-white w-100">Completed
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card radius-10 overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-1">Bounce Rate</p>
                                        <h4 class="mb-0">48.32%</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 font-13 text-white">+12.34 Increase</p>
                                        <p class="mb-0 font-13">From Last Week</p>
                                    </div>
                                </div>
                            </div>
                            <div id="chart12"></div>
                        </div>
                        <div class="card radius-10 overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-1">Pageviews</p>
                                        <h4 class="mb-0">52.64%</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 font-13 text-white">+21.34 Increase</p>
                                        <p class="mb-0 font-13">From Last Week</p>
                                    </div>
                                </div>
                            </div>
                            <div id="chart13"></div>
                        </div>
                        <div class="card radius-10 overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-1">New Sessions</p>
                                        <h4 class="mb-0">68.23%</h4>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="mb-0 font-13 text-white">+18.42 Increase</p>
                                        <p class="mb-0 font-13">From Last Week</p>
                                    </div>
                                </div>
                            </div>
                            <div id="chart14"></div>
                        </div>
                    </div>
                </div> -->
                <!--end row-->
                <div class="row row-cols-1 row-cols-lg-3">

                    <div class="col-12 col-xl-12 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Tổng Hợp Đơn Hàng</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                    </div>
                                </div>
                                <hr />
                                <div class="row m-0 row-cols-1 row-cols-md-4">
                                    <div class="col border-end">
                                        <div id="chart16"></div>
                                        <input type="hidden" id="percentOrderCancel" value="{{ $percentOrderCancel }}">
                                    </div>
                                    <div class="col border-end">
                                        <div id="chart17"></div>
                                        <input type="hidden" id="percentOrderSuccess"
                                            value="{{ $percentOrderSuccess }}">
                                    </div>
                                    <div class="col">
                                        <div id="chart18"></div>
                                        <input type="hidden" id="percentOrderPending"
                                            value="{{ $percentOrderPending }}">
                                    </div>
                                    <div class="col">
                                        <div id="chart30">
                                            <input type="hidden" id="percentOrderProcessing"
                                                value="{{ $percentOrderProcessing }}">
                                        </div>
                                    </div>
                                </div>
                                <div id="chart19"></div>
                                <input type="hidden" id="countorder" value="{{ $countorder }}">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-12 col-xl-6 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Khách Hàng Mới</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="customers-list p-3 mb-3">
                                @foreach($newCustomer as $cus)
                                    <div
                                        class="customers-list-item d-flex align-items-center border-bottom p-2 cursor-pointer">
                                        <div class="">
                                            <img src="assets/images/avatars/avatar-7.png" class="rounded-circle"
                                                width="46" height="46" alt="" />
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-1 font-14">{{ $cus->name }}</h6>
                                            <p class="mb-0 font-13">{{ $cus->email }}</p>
                                        </div>
                                        <div class="list-inline d-flex customers-contacts ms-auto"> <a
                                                href="mailto:{{ $cus->email }}" class="list-inline-item"><i
                                                    class='bx bxs-envelope'></i></a>
                                            <a href="javascript:;" class="list-inline-item"><i
                                                    class='bx bxs-microphone'></i></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-0">Số lượng sản phẩm</h5>
                                    </div>
                                    <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                                    </div>
                                </div>
                                <div class="mt-5" id="chart15"></div>
                                <input type="hidden" id="countProductHasCategoryId1"
                                    value="{{ $countProductHasCategoryId1 }}">
                                <input type="hidden" id="countProductHasCategoryId2"
                                    value="{{ $countProductHasCategoryId2 }}">
                            </div>
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    Sen đá <span
                                        class="badge bg-light-white-2 rounded-pill">{{ $countProductHasCategoryId1 }}</span>
                                </li>
                                <li
                                    class="list-group-item d-flex bg-transparent justify-content-between align-items-center">
                                    Cây Xương rồng <span
                                        class="badge bg-light-white-3 rounded-pill">{{ $countProductHasCategoryId2 }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!--end row-->

            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--><a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <p class="mb-0">Gaussian Texture</p>
            <hr>
            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>
            <hr>
            <p class="mb-0">Gradient Background</p>
            <hr>
            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}">
    </script>
    <script>
        $(document).ready(function () {
            $('#Transaction-History').DataTable({
                lengthMenu: [
                    [6, 10, 20, -1],
                    [6, 10, 20, 'Todos']
                ]
            });
        });
        var percentOrderCancel = document.getElementById('percentOrderCancel').value;

        e = {
            chart: {
                height: 180,
                type: "radialBar",
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "78%",
                        background: "transparent",
                        image: void 0,
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: "front",
                        dropShadow: {
                            enabled: !1,
                            top: 3,
                            left: 0,
                            blur: 4,
                            color: "rgba(0, 169, 255, 0.85)",
                            opacity: .65
                        }
                    },
                    track: {
                        background: "rgba(255, 255, 255, 0.12)",
                        margin: 0,
                        dropShadow: {
                            enabled: !1,
                            top: -3,
                            left: 0,
                            blur: 4,
                            color: "rgba(0, 169, 255, 0.85)",
                            opacity: .65
                        }
                    },
                    dataLabels: {
                        showOn: "always",
                        name: {
                            offsetY: -8,
                            show: !0,
                            color: "#fff",
                            fontSize: "15px"
                        },
                        value: {
                            formatter: function (e) {
                                return e + "%"
                            },
                            color: "#fff",
                            fontSize: "25px",
                            show: !0,
                            offsetY: 10
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "horizontal",
                    shadeIntensity: .5,
                    gradientToColors: ["#fff"],
                    inverseColors: !1,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                }
            },
            colors: ["#fff"],
            series: [percentOrderCancel],
            stroke: {
                lineCap: "round",
                width: "5"
            },
            labels: ["Đơn Hủy"]

        };
        new ApexCharts(document.querySelector("#chart16"), e).render();

    </script>
    <script>
        var percentOrderSuccess = document.getElementById('percentOrderSuccess').value;
        var percentOrderPending = document.getElementById('percentOrderPending').value;
        var percentOrderProcessing = document.getElementById('percentOrderProcessing').value;

        var countorder = document.getElementById('countorder').value;
        var countProductHasCategoryId1 = parseInt(document.getElementById('countProductHasCategoryId1').value);
        var countProductHasCategoryId2 = parseInt(document.getElementById('countProductHasCategoryId2').value);
        var sum = parseInt(countProductHasCategoryId1) + parseInt(countProductHasCategoryId2);
        var myArray = countorder.split(",");
        e = {
            chart: {
                height: 180,
                type: "radialBar",
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "78%",
                        background: "transparent",
                        image: void 0,
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: "front",
                        dropShadow: {
                            enabled: !1,
                            top: 3,
                            left: 0,
                            blur: 4,
                            color: "rgba(0, 169, 255, 0.85)",
                            opacity: .65
                        }
                    },
                    track: {
                        background: "rgba(255, 255, 255, 0.12)",
                        margin: 0,
                        dropShadow: {
                            enabled: !1,
                            top: -3,
                            left: 0,
                            blur: 4,
                            color: "rgba(0, 169, 255, 0.85)",
                            opacity: .65
                        }
                    },
                    dataLabels: {
                        showOn: "always",
                        name: {
                            offsetY: -8,
                            show: !0,
                            color: "#fff",
                            fontSize: "15px"
                        },
                        value: {
                            formatter: function (e) {
                                return e + "%"
                            },
                            color: "#fff",
                            fontSize: "25px",
                            show: !0,
                            offsetY: 10
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "horizontal",
                    shadeIntensity: .5,
                    gradientToColors: ["#fff"],
                    inverseColors: !1,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                }
            },
            colors: ["#fff"],
            series: [percentOrderSuccess],
            stroke: {
                lineCap: "round"
            },
            labels: ["Đã Giao"]
        };
        new ApexCharts(document.querySelector("#chart17"), e).render();

        e = {
            chart: {
                height: 180,
                type: "radialBar",
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "78%",
                        background: "transparent",
                        image: void 0,
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: "front",
                        dropShadow: {
                            enabled: !1,
                            top: 3,
                            left: 0,
                            blur: 4,
                            color: "rgba(0, 169, 255, 0.85)",
                            opacity: .65
                        }
                    },
                    track: {
                        background: "rgba(255, 255, 255, 0.12)",
                        margin: 0,
                        dropShadow: {
                            enabled: !1,
                            top: -3,
                            left: 0,
                            blur: 4,
                            color: "rgba(0, 169, 255, 0.85)",
                            opacity: .65
                        }
                    },
                    dataLabels: {
                        showOn: "always",
                        name: {
                            offsetY: -8,
                            show: !0,
                            color: "#fff",
                            fontSize: "15px"
                        },
                        value: {
                            formatter: function (e) {
                                return e + "%"
                            },
                            color: "#fff",
                            fontSize: "25px",
                            show: !0,
                            offsetY: 10
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "horizontal",
                    shadeIntensity: .5,
                    gradientToColors: ["#fff"],
                    inverseColors: !1,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                }
            },
            colors: ["#fff"],
            series: [percentOrderPending],
            stroke: {
                lineCap: "round"
            },
            labels: ["Đợi Xử Lý"]
        };
        new ApexCharts(document.querySelector("#chart18"), e).render();
        e = {
            chart: {
                height: 180,
                type: "radialBar",
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "78%",
                        background: "transparent",
                        image: void 0,
                        imageOffsetX: 0,
                        imageOffsetY: 0,
                        position: "front",
                        dropShadow: {
                            enabled: !1,
                            top: 3,
                            left: 0,
                            blur: 4,
                            color: "rgba(0, 169, 255, 0.85)",
                            opacity: .65
                        }
                    },
                    track: {
                        background: "rgba(255, 255, 255, 0.12)",
                        margin: 0,
                        dropShadow: {
                            enabled: !1,
                            top: -3,
                            left: 0,
                            blur: 4,
                            color: "rgba(0, 169, 255, 0.85)",
                            opacity: .65
                        }
                    },
                    dataLabels: {
                        showOn: "always",
                        name: {
                            offsetY: -8,
                            show: !0,
                            color: "#fff",
                            fontSize: "15px"
                        },
                        value: {
                            formatter: function (e) {
                                return e + "%"
                            },
                            color: "#fff",
                            fontSize: "25px",
                            show: !0,
                            offsetY: 10
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "horizontal",
                    shadeIntensity: .5,
                    gradientToColors: ["#fff"],
                    inverseColors: !1,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                }
            },
            colors: ["#fff"],
            series: [percentOrderProcessing],
            stroke: {
                lineCap: "round"
            },
            labels: ["Đang giao hàng"]
        };
        new ApexCharts(document.querySelector("#chart30"), e).render();



        e = {
            series: [{
                name: "Đơn Hàng",
                data: myArray
            }],
            chart: {
                foreColor: "rgba(255, 255, 255, 0.65)",
                type: "bar",
                height: 270,
                toolbar: {
                    show: !1
                },
                zoom: {
                    enabled: !1
                },
                dropShadow: {
                    enabled: 0,
                    top: 3,
                    left: 14,
                    blur: 4,
                    opacity: .12,
                    color: "#0d6efd"
                },
                sparkline: {
                    enabled: !1
                }
            },
            markers: {
                size: 0,
                colors: ["#0d6efd"],
                strokeColors: "#fff",
                strokeWidth: 2,
                hover: {
                    size: 7
                }
            },
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: "30%",
                    endingShape: "rounded"
                }
            },
            dataLabels: {
                enabled: !1
            },
            stroke: {
                show: !0,
                width: 3,
                curve: "smooth"
            },
            grid: {
                borderColor: 'rgba(255, 255, 255, 0.12)',
                show: true,
            },
            colors: ["#fff"],
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                theme: "dark",
                fixed: {
                    enabled: !1
                },
                x: {
                    show: !0
                },
                y: {
                    formatter: function (e) {
                        return " " + e + " "
                    }
                },
                marker: {
                    show: !1
                }
            }
        };
        new ApexCharts(document.querySelector("#chart19"), e).render();

        e = {
            series: [countProductHasCategoryId1, countProductHasCategoryId2],
            chart: {
                height: 240,
                type: "donut"
            },
            legend: {
                position: "bottom",
                show: !1
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "80%"
                    }
                }
            },
            colors: ["rgba(255, 255, 255, 0.70)", "#000", "rgba(255, 255, 255, 0.55)", "rgba(255, 255, 255, 0.25)"],
            xaxis: {
                categories: ["sen đá", "Cây xương rồng"]
            },
            dataLabels: {
                enabled: !1
            },
            
            tooltip: {
                enabled: true,
                theme: "dark",
                y: {
                    formatter: function (e) {
                        return "$ " + e + " thousands"
                    }
                }
            },
            labels: ["sen đá ($" + (countProductHasCategoryId1 / sum * 100).toFixed(1) + "%)", "Cây xương rồng ($" +
                (countProductHasCategoryId2 / sum * 100).toFixed(1) + "%)"
            ],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 200
                    },
                    legend: {
                        position: "bottom"
                    }
                }
            }]
        };
        new ApexCharts(document.querySelector("#chart15"), e).render();


        e = {
        series: [{
            name: "Total Sales",
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: "Customers",
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: "Store Visitores",
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
        chart: {
            foreColor: "#9ba7b2",
            type: "bar",
            height: 300,
            toolbar: {
                show: !1
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "55%",
                endingShape: "rounded"
            }
        },
        grid: {
            borderColor: 'rgba(255, 255, 255, 0.12)',
            show: true,
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2,
            colors: ["transparent"]
        },
        colors: ["rgba(255, 255, 255, 0.60)", "#fff", "rgba(255, 255, 255, 0.25)"],
        xaxis: {
            categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"]
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
            y: {
                formatter: function(e) {
                    return "$ " + e + " thousands"
                }
            }
        }
    };
    new ApexCharts(document.querySelector("#chart4"), e).render();

    </script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar('.product-list');
        new PerfectScrollbar('.customers-list');

    </script>
    @livewireScripts
</body>

</html>
