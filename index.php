<?php

?>
<!DOCTYPE html>
<!-- saved from url=(0046)https://autobill.shop/bill/transfer/acb/create -->
<html class="dark-layout loaded" lang="en" data-textdirection="ltr" style="--vh: 6.19px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
<meta name="description" content="Trang web làm bill chuyển khoản ngân hàng vietcombank, mbbank, techcombank... bán giấy tờ kyc tài khoản, làm cmnd xác minh danh tính">
<meta name="keywords" content="tạo bill chuyển khoản, tạo bill ngân hàng vietcombank, mbbank, techcombank, agribank, bán kyc, làm bill ngân hàng, tạo bill vcb, tạo bill tpbank, làm bill chuyển khoản, tạo bill ảo, tạo bill chuyển khoản ngân hàng, bán kyc">
<meta name="author" content="Autobill">
<title>Tạo bill chuyển khoản Acb</title>
<link rel="shortcut icon" type="image/x-icon" href="https://autobill.shop/app-assets/images/ico/favicon.ico">
<link href="./includes/css2" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="./includes/vendors.min.css">
<link rel="stylesheet" type="text/css" href="./includes/toastr.min.css">
<link rel="stylesheet" type="text/css" href="./includes/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="./includes/select2.min.css">
<link rel="stylesheet" type="text/css" href="./includes/pickadate.css">
<link rel="stylesheet" type="text/css" href="./includes/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="./includes/bs-stepper.min.css">


<link rel="stylesheet" type="text/css" href="./includes/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./includes/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="./includes/colors.css">
<link rel="stylesheet" type="text/css" href="./includes/components.css">
<link rel="stylesheet" type="text/css" href="./includes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="./includes/bordered-layout.css">
<link rel="stylesheet" type="text/css" href="./includes/semi-dark-layout.css">

<link rel="stylesheet" type="text/css" href="./includes/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="./includes/ext-component-toastr.css">
<link rel="stylesheet" type="text/css" href="./includes/ext-component-sweet-alerts.css">
<link rel="stylesheet" type="text/css" href="./includes/form-validation.css">
<link rel="stylesheet" type="text/css" href="./includes/contact-buttons.min.css">
<link href="./includes/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./includes/form-flat-pickr.css">
<link rel="stylesheet" type="text/css" href="./includes/form-wizard.css">
<style>
        .background img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .image-scroll {
            max-width: 100px;
            display: flex;
            align-items: center;
            flex-flow: column;
        }

        .image-scroll img {
            margin-bottom: 10px;
            border-radius: 10px;
        }

        label {
            cursor: pointer;
        }
    </style>


<link rel="stylesheet" type="text/css" href="./includes/style.css">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular-route.min.js"></script> -->
<script type="text/javascript" async="" src="./includes/analytics.js.download"></script><script type="text/javascript" async="" src="./includes/js"></script><script type="text/javascript" async="" src="./includes/js(1)"></script><script async="" src="./includes/js(2)" type="text/javascript"></script>
<script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3FT38NKNBP');
    </script>
</head>


<body class="pace-running vertical-layout vertical-menu-modern navbar-floating footer-static menu-expanded" data-open="click" data-menu="vertical-menu-modern" data-col=""><div class="pace pace-active"><div class="pace-progress" data-progress-text="99%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
<div class="preloader" style="display: none;">
<div class="preloader-icon"></div>
<span>Vui lòng chờ...</span>
</div>
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
<div class="navbar-container d-flex content">
<div class="bookmark-wrapper d-flex align-items-center">
<ul class="nav navbar-nav d-xl-none">
<li class="nav-item"><a class="nav-link menu-toggle is-active" href="https://autobill.shop/bill/transfer/acb/create#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a></li>
</ul>
<ul class="nav navbar-nav bookmark-icons">
<li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://autobill.shop/profile" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Thông tin tài khoản" aria-label="Thông tin tài khoản"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user ficon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a></li>
<li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://autobill.shop/change-pass" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Đổi mật khẩu" aria-label="Đổi mật khẩu"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock ficon"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></a>
</li>
<li class="nav-item d-none d-lg-block"><a class="nav-link" href="https://autobill.shop/recharge" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Nạp tiền" aria-label="Nạp tiền"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card ficon"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
</li>
</ul>
</div>
<ul class="nav navbar-nav align-items-center ms-auto">
<li class="nav-item d-lg-block"><a class="nav-link nav-link-style"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun ficon"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></a></li>
<li class="nav-item nav-search"><a class="nav-link nav-link-search"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search ficon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></a>
<div class="search-input">
<div class="search-input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></div>
<input class="form-control input" type="text" placeholder="Nhập nội dung cần tìm..." tabindex="-1" data-search="search">
<div class="search-input-close"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
<ul class="search-list search-list-main ps"><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
</div>
</li>
<li class="nav-item dropdown dropdown-cart me-25"><a class="nav-link" href="https://autobill.shop/bill/transfer/acb/create#" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart ficon"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg><span class="badge rounded-pill bg-primary badge-up cart-item-count">0</span></a>
<ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
<li class="dropdown-menu-header">
<div class="dropdown-header d-flex">
<h4 class="notification-title mb-0 me-auto">My Cart</h4>
<div class="badge rounded-pill badge-light-primary">0 Items</div>
</div>
</li>
<li class="dropdown-menu-footer">
<div class="d-flex justify-content-between mb-1">
<h6 class="fw-bolder mb-0">Total:</h6>
<h6 class="text-primary fw-bolder mb-0">0</h6>
</div><a class="btn btn-primary w-100 waves-effect waves-float waves-light" href="https://autobill.shop/bill/transfer/acb/app-ecommerce-checkout.html">Checkout</a>
</li>
</ul>
</li>
<li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="https://autobill.shop/bill/transfer/acb/create#" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell ficon"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge rounded-pill bg-danger badge-up">0</span></a>
<ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
<li class="dropdown-menu-header">
<div class="dropdown-header d-flex">
<h4 class="notification-title mb-0 me-auto">Notifications</h4>
<div class="badge rounded-pill badge-light-primary">0 New</div>
</div>
</li>
<li class="scrollable-container media-list ps">
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
<li class="dropdown-menu-footer"><a class="btn btn-primary w-100 waves-effect waves-float waves-light" href="https://autobill.shop/bill/transfer/acb/create#">Read all
notifications</a></li>
</ul>
</li>
<li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="https://autobill.shop/bill/transfer/acb/create#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<div class="user-nav d-sm-flex d-none align-items-center me-0"><span class="user-name fw-bolder">0đ</span><span class="user-status">Số
dư ví</span>
</div>
</a>
</li>
<li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="https://autobill.shop/bill/transfer/acb/create#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<div class="user-nav d-sm-flex d-none align-items-center"><span class="user-name fw-bolder">minhtha1</span><span class="user-status">Người dùng</span>
</div><span class="avatar"><img class="round" src="./includes/6keh4zq.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span>
</span></a>
<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
<a class="dropdown-item" href="https://autobill.shop/profile"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
Thông tin</a>
<a class="dropdown-item" href="https://autobill.shop/buying-history"><i class="fal fa-history me-50"></i>
Lịch
sử</a>
<a class="dropdown-item" href="https://autobill.shop/recharge"><i class="fal fa-credit-card me-50"></i>
Nạp
tiền</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" onclick="if (!window.__cfRLUnblockHandlers) return false; logout()" href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power me-50"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg> Đăng xuất</a>
</div>
</li>
</ul>
</div>
</nav>
<ul class="main-search-list-defaultlist d-none">
<li class="d-flex align-items-center"><a href="https://autobill.shop/bill/transfer/acb/create#">
<h6 class="section-label mt-75 mb-0">Files</h6>
</a></li>
<li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="https://autobill.shop/bill/transfer/acb/app-file-manager.html">
<div class="d-flex">
<div class="me-75"><img src="./includes/xls.png" alt="png" height="32"></div>
<div class="search-data">
<p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
Manager</small>
</div>
</div><small class="search-data-size me-50 text-muted">'17kb</small>
</a></li>
<li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="https://autobill.shop/bill/transfer/acb/app-file-manager.html">
<div class="d-flex">
<div class="me-75"><img src="./includes/jpg.png" alt="png" height="32"></div>
<div class="search-data">
<p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
Developer</small>
</div>
</div><small class="search-data-size me-50 text-muted">'11kb</small>
</a></li>
<li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="https://autobill.shop/bill/transfer/acb/app-file-manager.html">
<div class="d-flex">
<div class="me-75"><img src="./includes/pdf.png" alt="png" height="32"></div>
<div class="search-data">
<p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
Marketing Manager</small>
</div>
</div><small class="search-data-size me-50 text-muted">'150kb</small>
</a></li>
<li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="https://autobill.shop/bill/transfer/acb/app-file-manager.html">
<div class="d-flex">
<div class="me-75"><img src="./includes/doc.png" alt="png" height="32"></div>
<div class="search-data">
<p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
Designer</small>
</div>
</div><small class="search-data-size me-50 text-muted">'256kb</small>
</a></li>
<li class="d-flex align-items-center"><a href="https://autobill.shop/bill/transfer/acb/create#">
<h6 class="section-label mt-75 mb-0">Members</h6>
</a></li>
<li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="https://autobill.shop/bill/transfer/acb/app-user-view-account.html">
<div class="d-flex align-items-center">
<div class="avatar me-75"><img src="./includes/avatar-s-8.jpg" alt="png" height="32"></div>
<div class="search-data">
<p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
</div>
</div>
</a></li>
<li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="https://autobill.shop/bill/transfer/acb/app-user-view-account.html">
<div class="d-flex align-items-center">
<div class="avatar me-75"><img src="./includes/avatar-s-1.jpg" alt="png" height="32"></div>
<div class="search-data">
<p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
Developer</small>
</div>
</div>
</a></li>
<li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="https://autobill.shop/bill/transfer/acb/app-user-view-account.html">
<div class="d-flex align-items-center">
<div class="avatar me-75"><img src="./includes/avatar-s-14.jpg" alt="png" height="32"></div>
<div class="search-data">
<p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
Manager</small>
</div>
</div>
</a></li>
<li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="https://autobill.shop/bill/transfer/acb/app-user-view-account.html">
<div class="d-flex align-items-center">
<div class="avatar me-75"><img src="./includes/avatar-s-6.jpg" alt="png" height="32"></div>
<div class="search-data">
<p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
Designer</small>
</div>
</div>
</a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
<li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
<div class="d-flex justify-content-start"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle me-75"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg><span>No results found.</span></div>
</a></li>
</ul>
<script type="text/javascript">
    function logout() {
        Swal.fire({
            title: 'Cảnh báo!',
            text: "Bạn có chắc chắn muốn đăng xuất không?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Có, tôi muốn!',
            cancelButtonText: 'Không',
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                Swal.fire({
                    icon: 'success',
                    title: 'Chúc mừng!',
                    text: 'Bạn đã đăng xuất thành công.',
                    customClass: {
                        confirmButton: 'btn btn-success'
                    }
                }).then(function() {
                    window.location = 'https://autobill.shop/logout'
                });
            }
        });
    }
</script>
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
<div class="navbar-header">
<ul class="nav navbar-nav flex-row">
<li class="nav-item me-auto">
<a class="navbar-brand" href="https://autobill.shop/">
<div class="logo-site">
<img src="./includes/logo.png" alt="logo site">
<span class="logo-text">Autobill<span class="text-alt">.shop</span></span>
</div>
</a>
</li>
<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg></a></li>
</ul>
</div>
<div class="shadow-bottom"></div>
<div class="main-menu-content ps ps--active-y">
<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
<li class="nav-item disabled "><a class="d-flex align-items-center" href="javascript:void(0)"><span class="menu-title text-truncate" data-i18n="Menu Levels">Số
dư ví:
0đ</span></a>
</li>
<li class=" navigation-header"><span data-i18n="Menu chức năng">Menu chức năng</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
</li><li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Dashboard</span></a>
</li>
<li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/account-package"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Gói
tài
khoản</span></a>
</li>
<li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/bill/transfer/acb/create#" data-bs-toggle="modal" data-bs-target="#price-list"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Bảng giá bill</span></a>
</li>
<li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/recharge"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Nạp tiền</span></a>
</li>
<li class=" navigation-header"><span data-i18n="Menu tạo bill">Menu tạo bill</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
</li><li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/bill/transfer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
<path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"></path>
</svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Bill chuyển
khoản</span></a>
</li>
<li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/bill/transaction"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
<path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"></path>
</svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Bill biến động</span></a>
</li>
<li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/bill/balance"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
<path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"></path>
</svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Bill số dư</span></a>
</li>
<li class=" navigation-header"><span data-i18n="Menu khác">Menu khác</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
</li><li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/ref"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Liên kết giới thiệu</span></a>
</li>
<li class="nav-item"><a class="d-flex align-items-center" href="https://autobill.shop/faq"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Câu
hỏi thường gặp</span></a>
</li>
</ul>
<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 557px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 494px;"></div></div></div>
</div>

<div class="app-content content ">
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper container-xxl p-0">
<div class="content-header row">
<div class="content-header-left col-md-9 col-12 mb-2">
<div class="row breadcrumbs-top">
<div class="col-12">
<h2 class="content-header-title float-start mb-0">Tạo bill chuyển khoản Acb</h2>
<div class="breadcrumb-wrapper">
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="https://autobill.shop/">
Home
</a>
</li>
<li class="breadcrumb-item">
<a href="javascript:void(0)">
Bill
</a>
</li>
<li class="breadcrumb-item">
<a href="javascript:void(0)">
Transfer
</a>
</li>
<li class="breadcrumb-item">
<a href="javascript:void(0)">
Acb
</a>
</li>
<li class="breadcrumb-item">
Create
</li>
</ol>
</div>
</div>
</div>
</div>
</div>
<div class="content-body">
<div class="row match-height">
<div class="col-md-8 col-12">
<div class="col-12">
<div class="card bg-danger text-white mb-2">
<div class="card-body">
<p class="card-text">Nếu bạn có nhu cầu làm nhiều hãy đăng ký <a href="https://autobill.shop/account-package" class="badge rounded-pill bg-warning draggable">gói
tài
khoản</a> để tiết kiệm hơn chi
phí</p>
</div>
</div>
</div>
<div class="card bs-stepper horizontal-wizard-example linear">
<div class="bs-stepper-header" role="tablist">
<div class="step active" data-target="#info" role="tab" id="info-trigger">
<button type="button" class="step-trigger" aria-selected="true">
<span class="bs-stepper-box">1</span>
<span class="bs-stepper-label">
<span class="bs-stepper-title">Thông tin</span>
<span class="bs-stepper-subtitle">Điền thông tin bill</span>
</span>
</button>
</div>
<div class="line">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2"><polyline points="9 18 15 12 9 6"></polyline></svg>
</div>
<div class="step" data-target="#setup" role="tab" id="setup-trigger">
<button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
<span class="bs-stepper-box">2</span>
<span class="bs-stepper-label">
<span class="bs-stepper-title">Cấu hình giao diện</span>
<span class="bs-stepper-subtitle">Chọn giao diện bill</span>
</span>
</button>
</div>
</div>
<div class="bs-stepper-content"  ng-app="myApp" ng-controller="myController">
<div id="info" class="content active dstepper-block" role="tabpanel" aria-labelledby="info-trigger">
<form novalidate="novalidate">
<input type="hidden" name="_token" value="IKMXzlsn3QuOhIh2piYp4TQu1DwuyhM9NZinNtkU">
<div class="row">
<div class="col-12">
<div class="mb-1">
<label class="form-label" for="money">Số tiền</label>
<input type="text" id="money" format-number="" class="form-control" placeholder="Nhập số tiền cần chuyển" name="money">
</div>
</div>
<div class="col-md-6 col-12">
<div class="mb-1">
<label class="form-label" for="name-account-source">Tên tài khoản nguồn</label>
<input type="text" id="name-account-source" class="form-control" name="name_account_source" placeholder="Nhập tên tài khoản ACB của bạn">
</div>
</div>
<div class="col-md-6 col-12">
<div class="mb-1">
<label class="form-label" for="number-account-source">Số tài khoản nguồn</label>
<input type="text" id="number-account-source" class="form-control" name="number_account_source" placeholder="Nhập số tài khoản ACB của bạn">
</div>
</div>
<div class="col-md-6 col-12">
<div class="mb-1">
<label class="form-label" for="name-account">Tên người nhận</label>
<input type="text" id="name-account" class="form-control" name="name_account" placeholder="Nhập tên người nhận">
</div>
</div>
<div class="col-md-6 col-12">
<div class="mb-1">
<label class="form-label" for="number-account">Số tài khoản nhận</label>
<input type="text" id="number-account" class="form-control" name="number_account" placeholder="Nhập số tài khoản người nhận">
</div>
</div>
<div class="col-md-6 col-12">
<div class="mb-1">
<label class="form-label" for="time">Giờ</label>
<input type="text" id="time" class="form-control flatpickr-time flatpickr-input" name="time" placeholder="Nhập giờ" readonly="readonly">
</div>
</div>

<div class="col-md-6 col-12 position-relative">
<div class="mb-1">
<label class="form-label" for="date">Ngày</label>
<input type="text" id="date" class="form-control flatpickr-date flatpickr-input" name="date" placeholder="Nhập ngày" readonly="readonly">
</div>


</div>


<div class="col-12">
<div class="mb-1">
<label class="form-label" for="content">Nội dung giao dịch</label>
<textarea type="text" id="content" class="form-control" name="content" rows="3" maxlength="177" placeholder="Nhập nội dung chuyển khoản"></textarea>
</div>
</div>
<div class="col-12">
<div class="mb-1">
<label class="form-label">Thành tiền:</label> <span class="badge rounded-pill bg-danger draggable">100,000 VND / 1 bill</span>
</div>
</div>
</div>
</form>
<div class="d-flex justify-content-between">
<button class="btn btn-submit btn-primary waves-effect waves-float waves-light" onclick="createImage()">
<span class="align-middle d-sm-inline-block d-none" >create bill</span>

<script>
  function createImage() {
      var money = document.getElementById('money').value;
      var name_account_source = document.getElementById('name-account-source').value;
      var number_account_source = document.getElementById('number-account-source').value;
      var name_account = document.getElementById('name-account').value;
      var number_account = document.getElementById('number-account').value;
      var time = document.getElementById('time').value;
      var date = document.getElementById('date').value;
      var content = document.getElementById('content').value;
      // Gửi request tới API
      fetch('apiCreateImage.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify({
              money: money,
              name_account_source: name_account_source,
              number_account_source:number_account_source,
              name_account: name_account,
              number_account: number_account,
              time: time,
              date: date,
              content: content
          })
      })
      .then(response => response.blob())
      .then(blob => {
          // Tạo URL cho blob dữ liệu
          var url = URL.createObjectURL(blob);

          // Tạo và cấu hình thẻ a để tải về
          var link = document.createElement('a');
          link.href = url;
          link.download = 'generated_image.jpeg';
          link.click();

          // Giải phóng URL
          URL.revokeObjectURL(url);
      })
      .catch(error => {
          console.error('Đã xảy ra lỗi:', error);
      });
  }
</script>

<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle ms-sm-25 ms-0"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
</button>
</div>
</div>
<div id="setup" class="content" role="tabpanel" aria-labelledby="setup-trigger">
<form novalidate="novalidate">
<div class="row">
<div class="mb-1 col-md-3 col-sm-6">
<label class="form-label" for="google">Giao diện điện thoại</label>
<div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="phone" id="iphone" value="iphone" checked="">
<label class="form-check-label" for="iphone">Iphone (11 Pro)</label>
</div>
</div>
</div>
<div class="mb-1 col-md-3 col-sm-6">
<label class="form-label" for="scroll">Chụp ảnh cuộn trang <span class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Nội dung bill quá dài nên bị ẩn một phần phía dưới, nếu tích vào đây hệ thống sẽ chụp lại nội dung phía dưới bị ẩn" aria-label="Nội dung bill quá dài nên bị ẩn một phần phía dưới, nếu tích vào đây hệ thống sẽ chụp lại nội dung phía dưới bị ẩn"><i class="fas fa-info-circle"></i></span></label>
<div class="d-flex flex-column">
<div class="form-check form-switch form-check-success">
<input type="checkbox" name="scroll" class="form-check-input" id="scroll" value="scroll">
<label class="form-check-label" for="scroll">
<span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
<span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
</label>
</div>
</div>
</div>
<div class="mb-1 col-md-3 col-sm-6">
<label class="form-label" for="low">Chế độ nguồn điện thấp</label>
<div class="d-flex flex-column">
<div class="form-check form-switch form-check-success">
<input type="checkbox" name="low" class="form-check-input" id="low" value="true">
<label class="form-check-label" for="low">
<span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
<span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
</label>
</div>
</div>
</div>
<div class="mb-1 col-md-3 col-sm-6">
<label class="form-label" for="pin">Phần trăm pin</label>
<div class="input-group">
<input type="number" id="pin" name="pin" min="1" max="100" class="form-control" value="11">
</div>
</div>
<div class="mb-1 col-md-6">
<label class="form-label">Chế độ mạng</label>
<div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="network" id="wifi" value="wifi" checked="">
<label class="form-check-label" for="wifi">Wifi</label>
</div><div class="form-check-inline touchspin" style="margin-left:-10px;"><div class="input-group input-group-sm bootstrap-touchspin"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-down" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span><input type="number" class="touchspin-min-max form-control" name="options[wave_wifi]" value="3"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-up" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span></div></div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="network" id="lte" value="lte">
<label class="form-check-label" for="lte">4G</label>
</div>
</div>
</div>
<div class="mb-1 col-md-6 sim">
<label class="form-label" for="google">Sim</label>
<div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="sim" id="sim1" value="sim1" checked="">
<label class="form-check-label" for="sim1">1 sim</label>
</div><div class="form-check-inline touchspin1" style="margin-left:-10px;"><div class="input-group input-group-sm bootstrap-touchspin"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-down" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span><input type="number" class="touchspin-min-max form-control" name="options[wave_sim1]" value="4"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-up" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span></div></div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="sim" id="sim2" value="sim2">
<label class="form-check-label" for="sim2">2 sim</label>
</div>
</div>
</div>
</div>
</form>
<div class="d-flex justify-content-between">
<button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle me-sm-25 me-0"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
<span class="align-middle d-sm-inline-block d-none">Trước đó</span>
</button>
<button class="btn btn-success btn-submit waves-effect waves-float waves-light"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Tạo ảnh</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-12">
<div class="card">
<img class="img-fluid rounded" src="./includes/demo.png" alt="Demo bill">
</div>
</div>
</div>
</div>
</div>
</div>

<div class="sidenav-overlay" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
<div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>

<footer class="footer footer-static footer-light">
<p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT ©
2023<a class="ms-25" href="https://autobill.shop/" target="_blank">Autobill</a><span class="d-none d-sm-inline-block">, All
rights
Reserved</span></span><span class="float-md-end d-none d-md-block">Tạo Bill chuyển khoản ngân hàng, bán giấy tờ KYC<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top waves-effect waves-float waves-light" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></button>

<div class="modal fade" id="price-list" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle">Bảng giá bill</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body table-responsive">
<ul class="nav nav-pills nav-fill">
<li class="nav-item">
<a class="nav-link active" id="home-tab-fill" data-bs-toggle="pill" href="https://autobill.shop/bill/transfer/acb/create#bill-transfer" aria-expanded="true">Chuyển khoản</a>
</li>
<li class="nav-item">
<a class="nav-link" id="profile-tab-fill" data-bs-toggle="pill" href="https://autobill.shop/bill/transfer/acb/create#bill-transaction" aria-expanded="false">Biến động</a>
</li>
<li class="nav-item">
<a class="nav-link" id="about-tab-fill" data-bs-toggle="pill" href="https://autobill.shop/bill/transfer/acb/create#bill-balance" aria-expanded="false">Số dư</a>
</li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="bill-transfer" aria-labelledby="home-tab-fill" aria-expanded="true">
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>STT</th>
<th>Tên bill</th>
<th>Giá tiền</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Vietcombank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>2</td>
<td>Tpbank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>3</td>
<td>Mbbank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>4</td>
<td>Techcombank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>5</td>
<td>Acb</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>6</td>
<td>Vietinbank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>7</td>
<td>Bidv</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>8</td>
<td>Agribank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>9</td>
<td>Vpbank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>10</td>
<td>Momo</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>11</td>
<td>Sacombank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>12</td>
<td>Msb</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>13</td>
<td>Ocb</td>
<td>100,000 VND/1 bill</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane" id="bill-transaction" role="tabpanel" aria-labelledby="profile-tab-fill" aria-expanded="false">
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>STT</th>
<th>Tên bill</th>
<th>Giá tiền</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Vietcombank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>2</td>
<td>Techcombank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>3</td>
<td>Tpbank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>4</td>
<td>Acb</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>5</td>
<td>Mbbank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>6</td>
<td>Momo</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>7</td>
<td>Vietinbank</td>
<td>100,000 VND/1 bill</td>
</tr>
<tr>
<td>8</td>
<td>Agribank</td>
<td>100,000 VND/1 bill</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane" id="bill-balance" role="tabpanel" aria-labelledby="about-tab-fill" aria-expanded="false">
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>STT</th>
<th>Tên bill</th>
<th>Giá tiền</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Vietcombank</td>
<td>20,000 VND/1 bill</td>
</tr>
<tr>
<td>2</td>
<td>Mbbank</td>
<td>20,000 VND/1 bill</td>
</tr>
<tr>
<td>3</td>
<td>Vietinbank</td>
<td>20,000 VND/1 bill</td>
</tr>
<tr>
<td>4</td>
<td>Tpbank</td>
<td>20,000 VND/1 bill</td>
</tr>
<tr>
<td>5</td>
<td>Vpbank</td>
<td>20,000 VND/1 bill</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary waves-effect waves-float waves-light" data-bs-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>

<script src="./includes/vendors.min.js.download" type="text/javascript"></script>


<script src="./includes/sweetalert2.all.min.js.download" type="text/javascript"></script>
<script src="./includes/toastr.min.js.download" type="text/javascript"></script>
<script src="./includes/flatpickr.min.js.download" type="text/javascript"></script>
<script src="./includes/select2.full.min.js.download" type="text/javascript"></script>
<script src="./includes/jquery.validate.min.js.download" type="text/javascript"></script>
<script src="./includes/bs-stepper.min.js.download" type="text/javascript"></script>


<script src="./includes/app-menu.js.download" type="text/javascript"></script>
<script src="./includes/app.js.download" type="text/javascript"></script>


<script src="./includes/contact-buttons.min.js.download" type="text/javascript"></script>
<script type="text/javascript">
        function touchspin(min, max) {
            let touchspinValue = $('.touchspin-min-max');
            if (touchspinValue.length > 0) {
                touchspinValue
                    .TouchSpin({
                        min: min,
                        max: max,
                        buttondown_txt: feather.icons['minus'].toSvg(),
                        buttonup_txt: feather.icons['plus'].toSvg()
                    })
                    .on('touchspin.on.startdownspin', function() {
                        var $this = $(this);
                        $('.bootstrap-touchspin-up').removeClass('disabled-max-min');
                        if ($this.val() == min) {
                            $(this).siblings().find('.bootstrap-touchspin-down').addClass('disabled-max-min');
                        }
                    })
                    .on('touchspin.on.startupspin', function() {
                        var $this = $(this);
                        $('.bootstrap-touchspin-down').removeClass('disabled-max-min');
                        if ($this.val() == max) {
                            $(this).siblings().find('.bootstrap-touchspin-up').addClass('disabled-max-min');
                        }
                    });
            }
        }

        function getWifi() {
            let network = $('input[name="network"]:checked').val();
            if (network == 'wifi') {
                $('#wifi').parent().after(
                    `<div class="form-check-inline touchspin" style="margin-left:-10px;"><div class="input-group input-group-sm"><input type="number" class="touchspin-min-max" name="options[wave_wifi]" value="3" /></div></div>`
                );
                touchspin(0, 3);
            } else {
                $('.touchspin').remove();
            }
        }

        function getSim() {
            let sim = $('input[name="sim"]:checked').val();
            if (sim == 'sim1') {
                $('.touchspin2').remove();
                if ($('.touchspin1').length === 0) {
                    $('#sim1').parent().after(
                        `<div class="form-check-inline touchspin1" style="margin-left:-10px;"><div class="input-group input-group-sm"><input type="number" class="touchspin-min-max" name="options[wave_sim1]" value="4" /></div></div>`
                    );
                    touchspin(0, 4);
                }
            } else {
                $('#sim2').parent().after(
                    `<div class="form-check-inline touchspin2" style="margin-left:-10px;"><div class="input-group input-group-sm"><input type="number" class="touchspin-min-max" name="options[wave_sim2]" value="4" /></div></div>`
                );
                touchspin(0, 4);
            }
        }
        getWifi();
        getSim();
        $('input[name="network"]').on('change', getWifi);
        $('input[name="sim"]').on('change', getSim);
        let sim_html = $('.sim').html();
        $('input[name=phone]').on('change', function() {
            if ($(this).is(':checked')) {
                let phone = $(this).val();
                let link_img = $('.img-fluid').attr('src');
                if (phone == 'iphone') {
                    $('.sim').removeClass('hidden').html(sim_html);
                    $('.img-fluid').attr('src', link_img.replace('android', 'iphone'));
                } else if (phone == 'android') {
                    $('.sim').addClass('hidden').html('');
                    $('.img-fluid').attr('src', link_img.replace('iphone', 'android'));
                }
            }
        });
        var value = $('.badge.rounded-pill.bg-danger.draggable').text(),
            text = $('.badge.rounded-pill.bg-danger.draggable').siblings('.form-label').text();
        $('#trials').on('change', function() {
            $('.modal').modal('hide');
            let $this = $(this);
            if ($this.is(':checked')) {
                Swal.fire({
                    title: 'Cảnh báo!',
                    text: "Khi tích vào tạo thử bạn sẽ bị dính bản quyền khi tạo bill.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Vâng, tôi muốn tạo thử',
                    cancelButtonText: 'Hủy',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-outline-danger ms-1'
                    },
                    buttonsStyling: false
                }).then(function(result) {
                    if (result.value) {
                        $('.badge.rounded-pill.bg-danger.draggable').text('0 VND');
                        $('.badge.rounded-pill.bg-danger.draggable').siblings('.form-label')
                            .text('Thành tiền:');
                    } else {
                        $('#trials').prop('checked', false);
                    }
                });
            } else {
                $('.badge.rounded-pill.bg-danger.draggable').text(value);
                $('.badge.rounded-pill.bg-danger.draggable').siblings('.form-label')
                    .text(text)
            }
        });

        var horizontalWizard = document.querySelector('.horizontal-wizard-example');
        if (typeof horizontalWizard !== undefined && horizontalWizard !== null) {
            var numberedStepper = new Stepper(horizontalWizard),
                form = $(horizontalWizard).find('form');
            form.each(function() {
                var $this = $(this);
                $this.validate({
                    rules: {
                        money: {
                            required: true,
                        },
                        phone: {
                            required: true,
                        },
                        time: {
                            required: true,
                        },
                        date: {
                            required: true,
                        },
                        name_account_source: {
                            required: true,
                        },
                        number_account_source: {
                            required: true,
                        },
                        name_account: {
                            required: true,
                        },
                        number_account: {
                            required: true,
                        },
                        bank: {
                            required: true,
                        },
                        content: {
                            required: true,
                            maxlength: 177,
                        },
                        background: {
                            required: true,
                        },
                        network: {
                            required: true,
                        },
                        sim: {
                            required: true,
                        },
                        pin: {
                            required: true,
                            min: 1,
                            max: 100,
                        },
                    },
                    messages: {
                        money: {
                            required: "Vui lòng nhập số tiền",
                        },
                        phone: {
                            required: "Vui lòng chọn giao diện điện thoại",
                        },
                        time: {
                            required: "Vui lòng chọn giờ",
                        },
                        date: {
                            required: "Vui lòng chọn ngày",
                        },
                        name_account_source: {
                            required: "Vui lòng nhập tên tài khoản nguồn",
                        },
                        number_account_source: {
                            required: "Vui lòng nhập số tài khoản nguồn",
                        },
                        name_account: {
                            required: "Vui lòng nhập tên người nhận",
                        },
                        number_account: {
                            required: "Vui lòng nhập số tài khoản người nhận",
                        },
                        bank: {
                            required: "Vui lòng chọn ngân hàng",
                        },
                        content: {
                            required: "Vui lòng nhập nội dung chuyển tiền",
                            maxlength: "Vui lòng nhập tối đa 177 kí tự",
                        },
                        background: {
                            required: "Vui lòng chọn hình nền",
                        },
                        network: {
                            required: "Vui lòng chọn mạng",
                        },
                        sim: {
                            required: "Vui lòng chọn sim",
                        },
                        pin: {
                            required: "Vui lòng điền phần trăm pin",
                            min: "Không được nhập giá trị nhỏ hơn 1",
                            max: "Không được nhập giá trị lớn hơn 100",
                        },
                    },
                });
            });

            // $(horizontalWizard)
            //     .find('.btn-next')
            //     .each(function() {
            //         $(this).on('click', function(e) {
            //             var isValid = $(this).parent().siblings('form').valid();
            //             if (isValid) {
            //                 numberedStepper.next();
            //             } else {
            //                 e.preventDefault();
            //             }
            //         });
            //     });

            $(horizontalWizard)
                .find('.btn-prev')
                .on('click', function() {
                    numberedStepper.previous();
                });

            $(horizontalWizard)
                .find('.btn-submit')
                .on('click', function() {
                    // isValid = $(this).parent().siblings('form').valid();
                    // if (isValid) {
                    //     $(".content-body").html(
                    //         `<div class=text-center> <div class=checkmark><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block; shape-rendering: auto" width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    // <g transform="rotate(0 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(36 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(72 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.7s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(108 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(144 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(180 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(216 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(252 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.2s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(288 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.1s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g><g transform="rotate(324 50 50)">
                    //   <rect x="45" y="15" rx="4.8" ry="4.8" width="10" height="10" fill="#348cd4">
                    //     <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
                    //   </rect>
                    // </g>
                    // </svg></div> <h4>Đang tạo ảnh nè...</h4> </div>`
                    //     );
                        // $.ajax({
                        //     url: 'createBill.php',
                        //     type: 'POST',
                        //     dataType: "json",
                        //     data: $(form).serialize(),
                        //     success: function(response) { console.log(response);
                        //         if (response.icon == "success") {
                        //             $(".content-body").html(
                        //                 `<div class="d-flex justify-content-center"><div class="text-center col-md-6"> <div class=checkmark> <svg version="1.1" id=Layer_1 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x=0px y=0px viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space=preserve> <path class=path fill=none stroke="#32c861" stroke-miterlimit=10 d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4 c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5 c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z"></path> <circle class=path fill=none stroke="#32c861" stroke-width=4 stroke-miterlimit=10 cx="80.6" cy="80.6" r="62.1"></circle> <polyline class=path fill=none stroke="#32c861" stroke-width=6 stroke-linecap=round stroke-miterlimit=10 points="113,52.8 74.1,108.4 48.2,86.4 "></polyline> <circle class=spin fill=none stroke="#32c861" stroke-width=4 stroke-miterlimit=10 stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9"></circle> </svg> </div> <h4>` +
                        //                 response.title +
                        //                 `</h4><p class="text-muted font-14 mb-0">` +
                        //                 response.text +
                        //                 `</p><a target="_blank" href="` +
                        //                 response.link +
                        //                 `" class="btn btn-outline-success round waves-effect mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="8 12 12 16 16 12"></polyline><line x1="12" y1="8" x2="12" y2="16"></line></svg> Tải bill đi nè</a> </div></div>`
                        //             );
                        //         } else {
                        //             swal.fire(response).then(function() {
                        //                 window.location = "";
                        //             });
                        //         }
                        //     },
                        //     error: function(response) {
                        //         Swal.fire(
                        //             "Lỗi rồi!",
                        //             "Lỗi tạo ảnh, vui lòng thử lại.",
                        //             "error"
                        //         ).then(function() {
                        //             window.location = "";
                        //         });
                        //     },
                        // });
                    //}
                });
        }
    </script>


<script src="./includes/scripts.js.download" type="text/javascript"></script>


<!-- <script>
  angular.module('myApp', [])
    .controller('myController', function($scope) {
      $scope.title = 'My Angular App';
      $scope.message = 'This is a demo Angular app.';
    });
</script> -->


<div><div class="b24-widget-button-shadow"></div><div class="b24-widget-button-wrapper b24-widget-button-position-bottom-right b24-widget-button-visible"><div class="b24-widget-button-social b24-widget-button-hide"><a aria-label="Chat Telegram" class="b24-widget-button-social-item connector-icon connector-icon-telegrambot" href="https://t.me/autobillshop" rel="noopener nofollow" role="button" target="_blank"><span class="b24-widget-button-social-tooltip">Chat Telegram</span></a></div><div class="b24-widget-button-inner-container"><div class="b24-widget-button-inner-mask"></div><div class="b24-widget-button-block"><div class="b24-widget-button-pulse b24-widget-button-pulse-animate"></div><div class="b24-widget-button-inner-block"><div class="b24-widget-button-icon-container"><div class="b24-widget-button-inner-item"><svg height="28" viewBox="0 0 24 28" width="28"><path d="M815.406703,961 L794.305503,961 C793.586144,961 793,961.586144 793,962.305503 L793,983.406703 C793,984.126062 793.586144,984.712206 794.305503,984.712206 L815.406703,984.712206 C816.126062,984.712206 816.712206,984.126062 816.712206,983.406703 L816.712206,962.296623 C816.703325,961.586144 816.117181,961 815.406703,961 L815.406703,961 Z M806.312583,979.046143 C806.312583,979.454668 805.975106,979.783264 805.575462,979.783264 L796.898748,979.783264 C796.490224,979.783264 796.161627,979.445787 796.161627,979.046143 L796.161627,977.412044 C796.161627,977.003519 796.499105,976.674923 796.898748,976.674923 L805.575462,976.674923 C805.983987,976.674923 806.312583,977.0124 806.312583,977.412044 L806.312583,979.046143 L806.312583,979.046143 Z M813.55946,973.255747 C813.55946,973.664272 813.221982,973.992868 812.822339,973.992868 L796.889868,973.992868 C796.481343,973.992868 796.152746,973.655391 796.152746,973.255747 L796.152746,971.621647 C796.152746,971.213122 796.490224,970.884526 796.889868,970.884526 L812.813458,970.884526 C813.221982,970.884526 813.550579,971.222003 813.550579,971.621647 L813.550579,973.255747 L813.55946,973.255747 Z M813.55946,967.45647 C813.55946,967.864994 813.221982,968.193591 812.822339,968.193591 L796.889868,968.193591 C796.481343,968.193591 796.152746,967.856114 796.152746,967.45647 L796.152746,965.82237 C796.152746,965.413845 796.490224,965.085249 796.889868,965.085249 L812.813458,965.085249 C813.221982,965.085249 813.550579,965.422726 813.550579,965.82237 L813.550579,967.45647 L813.55946,967.45647 Z" fill="#fff" fill-rule="evenodd" transform="translate(-793 -961)"></path></svg></div><div class="b24-widget-button-inner-item b24-widget-button-icon-animation"><svg height="28" viewBox="0 0 28 30" width="28"><path d="M940.872414,978.904882 C939.924716,977.937215 938.741602,977.937215 937.79994,978.904882 C937.08162,979.641558 936.54439,979.878792 935.838143,980.627954 C935.644982,980.833973 935.482002,980.877674 935.246586,980.740328 C934.781791,980.478121 934.286815,980.265859 933.840129,979.97868 C931.757607,978.623946 930.013117,976.882145 928.467826,974.921839 C927.701216,973.947929 927.019115,972.905345 926.542247,971.731659 C926.445666,971.494424 926.463775,971.338349 926.6509,971.144815 C927.36922,970.426869 927.610672,970.164662 928.316918,969.427987 C929.300835,968.404132 929.300835,967.205474 928.310882,966.175376 C927.749506,965.588533 927.206723,964.77769 926.749111,964.14109 C926.29156,963.50449 925.932581,962.747962 925.347061,962.154875 C924.399362,961.199694 923.216248,961.199694 922.274586,962.161118 C921.55023,962.897794 920.856056,963.653199 920.119628,964.377388 C919.437527,965.045391 919.093458,965.863226 919.021022,966.818407 C918.906333,968.372917 919.274547,969.840026 919.793668,971.269676 C920.856056,974.228864 922.473784,976.857173 924.43558,979.266977 C927.085514,982.52583 930.248533,985.104195 933.948783,986.964613 C935.6148,987.801177 937.341181,988.444207 939.218469,988.550339 C940.510236,988.625255 941.632988,988.288132 942.532396,987.245549 C943.148098,986.533845 943.842272,985.884572 944.494192,985.204083 C945.459999,984.192715 945.466036,982.969084 944.506265,981.970202 C943.359368,980.777786 942.025347,980.091055 940.872414,978.904882 Z M940.382358,973.54478 L940.649524,973.497583 C941.23257,973.394635 941.603198,972.790811 941.439977,972.202844 C940.97488,970.527406 940.107887,969.010104 938.90256,967.758442 C937.61538,966.427182 936.045641,965.504215 934.314009,965.050223 C933.739293,964.899516 933.16512,965.298008 933.082785,965.905204 L933.044877,966.18514 C932.974072,966.707431 933.297859,967.194823 933.791507,967.32705 C935.117621,967.682278 936.321439,968.391422 937.308977,969.412841 C938.23579,970.371393 938.90093,971.53815 939.261598,972.824711 C939.401641,973.324464 939.886476,973.632369 940.382358,973.54478 Z M942.940854,963.694228 C940.618932,961.29279 937.740886,959.69052 934.559939,959.020645 C934.000194,958.902777 933.461152,959.302642 933.381836,959.8878 L933.343988,960.167112 C933.271069,960.705385 933.615682,961.208072 934.130397,961.317762 C936.868581,961.901546 939.347628,963.286122 941.347272,965.348626 C943.231864,967.297758 944.53673,969.7065 945.149595,972.360343 C945.27189,972.889813 945.766987,973.232554 946.285807,973.140969 L946.55074,973.094209 C947.119782,972.993697 947.484193,972.415781 947.350127,971.835056 C946.638568,968.753629 945.126778,965.960567 942.940854,963.694228 Z" fill="#fff" fill-rule="evenodd" transform="translate(-919 -959)"></path></svg></div><div class="b24-widget-button-inner-item"><svg height="28" viewBox="0 0 28 29" width="28"><path d="M878.289968,975.251189 L878.289968,964.83954 C878.289968,963.46238 876.904379,962 875.495172,962 L857.794796,962 C856.385491,962 855,963.46238 855,964.83954 L855,975.251189 C855,976.924031 856.385491,978.386204 857.794796,978.090729 L860.589592,978.090729 L860.589592,981.876783 L860.589592,983.76981 L861.521191,983.76981 C861.560963,983.76981 861.809636,982.719151 862.45279,982.823297 L866.179185,978.090729 L875.495172,978.090729 C876.904379,978.386204 878.289968,976.924031 878.289968,975.251189 Z M881.084764,971.465135 L881.084764,976.197702 C881.43316,978.604561 879.329051,980.755508 876.426771,980.93027 L868.042382,980.93027 L866.179185,982.823297 C866.400357,983.946455 867.522357,984.94992 868.973981,984.716324 L876.426771,984.716324 L879.221567,988.502377 C879.844559,988.400361 880.153166,989.448891 880.153166,989.448891 L881.084764,989.448891 L881.084764,987.555864 L881.084764,984.716324 L882.947962,984.716324 C884.517696,984.949819 885.742758,983.697082 885.742758,981.876783 L885.742758,974.304675 C885.742659,972.717669 884.517597,971.465135 882.947962,971.465135 L881.084764,971.465135 Z" fill="#fff" fill-rule="evenodd" transform="translate(-855 -962)"></path></svg></div></div><div class="b24-widget-button-inner-item b24-widget-button-close"><svg height="29" viewBox="0 0 29 29" width="29"><path d="M18.866 14.45l9.58-9.582L24.03.448l-9.587 9.58L4.873.447.455 4.866l9.575 9.587-9.583 9.57 4.418 4.42 9.58-9.577 9.58 9.58 4.42-4.42" fill="#fff" fill-rule="evenodd"></path></svg></div></div></div></div></div></div><div class="flatpickr-calendar animate" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month" tabindex="-1"><option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option><option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option><option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option><option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option><option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option><option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option><option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option><option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option><option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option><option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option><option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option><option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option></select><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
      </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="June 25, 2023" tabindex="-1">25</span><span class="flatpickr-day prevMonthDay" aria-label="June 26, 2023" tabindex="-1">26</span><span class="flatpickr-day prevMonthDay" aria-label="June 27, 2023" tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="June 28, 2023" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="June 29, 2023" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="June 30, 2023" tabindex="-1">30</span><span class="flatpickr-day " aria-label="July 1, 2023" tabindex="-1">1</span><span class="flatpickr-day " aria-label="July 2, 2023" tabindex="-1">2</span><span class="flatpickr-day " aria-label="July 3, 2023" tabindex="-1">3</span><span class="flatpickr-day " aria-label="July 4, 2023" tabindex="-1">4</span><span class="flatpickr-day " aria-label="July 5, 2023" tabindex="-1">5</span><span class="flatpickr-day " aria-label="July 6, 2023" tabindex="-1">6</span><span class="flatpickr-day " aria-label="July 7, 2023" tabindex="-1">7</span><span class="flatpickr-day " aria-label="July 8, 2023" tabindex="-1">8</span><span class="flatpickr-day " aria-label="July 9, 2023" tabindex="-1">9</span><span class="flatpickr-day " aria-label="July 10, 2023" tabindex="-1">10</span><span class="flatpickr-day " aria-label="July 11, 2023" tabindex="-1">11</span><span class="flatpickr-day " aria-label="July 12, 2023" tabindex="-1">12</span><span class="flatpickr-day " aria-label="July 13, 2023" tabindex="-1">13</span><span class="flatpickr-day today selected" aria-label="July 14, 2023" aria-current="date" tabindex="-1">14</span><span class="flatpickr-day " aria-label="July 15, 2023" tabindex="-1">15</span><span class="flatpickr-day " aria-label="July 16, 2023" tabindex="-1">16</span><span class="flatpickr-day " aria-label="July 17, 2023" tabindex="-1">17</span><span class="flatpickr-day " aria-label="July 18, 2023" tabindex="-1">18</span><span class="flatpickr-day " aria-label="July 19, 2023" tabindex="-1">19</span><span class="flatpickr-day " aria-label="July 20, 2023" tabindex="-1">20</span><span class="flatpickr-day " aria-label="July 21, 2023" tabindex="-1">21</span><span class="flatpickr-day " aria-label="July 22, 2023" tabindex="-1">22</span><span class="flatpickr-day " aria-label="July 23, 2023" tabindex="-1">23</span><span class="flatpickr-day " aria-label="July 24, 2023" tabindex="-1">24</span><span class="flatpickr-day " aria-label="July 25, 2023" tabindex="-1">25</span><span class="flatpickr-day " aria-label="July 26, 2023" tabindex="-1">26</span><span class="flatpickr-day " aria-label="July 27, 2023" tabindex="-1">27</span><span class="flatpickr-day " aria-label="July 28, 2023" tabindex="-1">28</span><span class="flatpickr-day " aria-label="July 29, 2023" tabindex="-1">29</span><span class="flatpickr-day " aria-label="July 30, 2023" tabindex="-1">30</span><span class="flatpickr-day " aria-label="July 31, 2023" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="August 1, 2023" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="August 2, 2023" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="August 3, 2023" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="August 4, 2023" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="August 5, 2023" tabindex="-1">5</span></div></div></div></div></div><div class="flatpickr-calendar hasTime noCalendar animate" tabindex="-1"><div class="flatpickr-time time24hr" tabindex="-1"><div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour" tabindex="-1" step="1" min="0" max="23" maxlength="2"><span class="arrowUp"></span><span class="arrowDown"></span></div><span class="flatpickr-time-separator">:</span><div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute" tabindex="-1" step="5" min="0" max="59" maxlength="2"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div></body></html>
