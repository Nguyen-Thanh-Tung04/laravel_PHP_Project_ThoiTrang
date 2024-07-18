
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Furns </title>
    <meta name="description"
        content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/furns/" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Furns - Responsive eCommerce HTML Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Furns - Responsive eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Furns - Responsive eCommerce HTML Template" />
    <meta name="robots" content="noindex, follow" />
    <!-- Add site Favicon -->

    {{-- <link rel="icon" href="{{asset('theme/client/assets/images/favicon/favicon.png')}}" sizes="32x32" />
    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" /> --}}
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <!-- Structured Data  -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
    }
    </script>

    <!-- vendor css (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css" />
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/venobox.css" />  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link href="{{asset('theme/client/assets/css/vendor/vendor.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/client/assets/css/plugins/plugins.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/client/assets/css/style.min.css')}}" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="assets/css/css.css"> -->
    <link href="{{asset('theme/client/assets/css/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Main Style -->
    <link href="{{asset('theme/client/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/client/assets/css/css.css')}}" rel="stylesheet" type="text/css">
    <style></style>

</head>

<body>
    <!-- Header Area start  -->
    <div class="header section">
        <!-- Header Bottom  Start -->
        <div class=" align-self-center m-2" >
            <marquee behavior="scroll" class="fw-bold" direction="left">🚛Nguyễn Thanh Tùng đẹp zai phải không mọi người!</marquee>
        </div>
        <!-- Header Bottom  End -->

        <!-- Main Menu Start -->
        <div class="bg-dark d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-3 align-self-center">
                        <div class="col-auto align-self-center">
                            <div class="header-logo">
                                {{-- <a href="index.php"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a> --}}
                                <p class="text-warning">TungStore</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="main-menu text-white">
                            <ul>
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="index.php?act=about">Giới thiệu</a></li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?act=sanpham"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        Cửa Hàng
                                    </a>
                                    <ul>
                                        <li class="dropdown-submenu">
                                            <ul class="dropdown-menu sub-menu">
                                              <li>Áo</li>
                                              <li>Quần</li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href=" index.php?act=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="col align-self-center">
                            <div class="header-actions">
                                <div class="header_account_list">
                                    <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                            class="icon-magnifier"></i></a>
                                    <div class="dropdown_search">
                                        <form class="action-form" action="index.php?act=sanpham" method="POST">
                                            <input class="form-control" placeholder="Nhập sản phẩm bạn muốn tìm" type="text"
                                                name="kyw">
                                            <button class="submit" type="submit"><i class="icon-magnifier" style="background-color: brown;"></i></button>
                                        </form>
                                    </div>
                                </div>
    
                                <!-- Single Wedge Start -->
                                <div class="header-bottom-set dropdown">
                                    <button class="dropdown-toggle hcol-md-12 align-self-centereader-action-btn" data-bs-toggle="dropdown">
    
                                        <i class="icon-user"></i>
    
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
    
                                       
                                        <li><a class="dropdown-item" href="index.php?act=account">Tài khoản</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=trangthaidon">Đơn mua</a></li>                            
                                        <li><a class="dropdown-item" href="index.php?act=login">Đăng nhập / Đăng ký</a></li>
    
                                    </ul>
                                </div>
                                <!-- Single Wedge End -->
    
    
                                <a href="" class="header-action-btn header-action-btn-cart pr-0">
                                    <i class="icon-handbag"></i>
                                    <span class="header-action-num">0</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                <a href="index.php?act=viewcart" class="header-action-btn header-action-btn-menu d-lg-none">
                                    <i class="icon-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu End -->
    </div>
    <!-- Header Area End  -->