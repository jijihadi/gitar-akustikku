<!DOCTYPE html>
<html lang="zxx">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="robots" content="index, follow" />
  <meta name="description"
    content="Pronia plant store bootstrap 5 template is an awesome website template for any home plant shop.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/assets/images/favicon.ico" />

  <!-- CSS
    ============================================ -->

  <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/Pe-icon-7-stroke.css" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/nice-select.css">
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/magnific-popup.min.css" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/ion.rangeSlider.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">

</head>

<body>
  <div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
      <div class="spinner d-flex justify-content-center align-items-center h-100">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
  </div>
  <div class="main-wrapper">

    <!-- Begin Main Header Area -->
    <header class="main-header-area">
      <div class="header-top bg-pronia-primary d-none d-lg-block">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6  mt-1 mb-1">
              <div class="header-top-left">
                <span class="pronia-offer">Selamat menggunakan website saya. with &#9829; Yuni</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-middle py-30">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="header-middle-wrap position-relative">
                <div class="header-contact d-none d-lg-flex">
                  {{-- <i class="pe-7s-call"></i>
                  <a href="tel://+00-123-456-789">+00 123 456 789</a> --}}
                </div>

                <a href="index.html" class="header-logo">
                  <img src="{{ url('/') }}/assets/images/logo/dark.png" alt="Header Logo">
                </a>

                <div class="header-right">
                  <ul>
                    <li>
                      <button class="btn ht-btn p-0" type="button">
                        <i class="pe-7s-bell"></i>
                      </button>
                    </li>
                    <li class="dropdown d-none d-lg-block">
                      <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton"
                        data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                        <i class="pe-7s-user"></i>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="settingButton">
                        @if (!Auth::guest())
                        <li><a class="dropdown-item" href="#">My account</a></li>
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                        @else
                        <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                          @endif
                        </li>
                      </ul>
                    </li>
                    {{-- <li class="d-none d-lg-block">
                      <a href="wishlist.html">
                        <i class="pe-7s-like"></i>
                      </a>
                    </li>
                    <li class="minicart-wrap me-3 me-lg-0">
                      <a href="#miniCart" class="minicart-btn toolbar-btn">
                        <i class="pe-7s-shopbag"></i>
                        <span class="quantity">3</span>
                      </a>
                    </li> --}}
                    <li class="mobile-menu_wrap d-block d-lg-none">
                      <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                        <i class="pe-7s-menu"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom d-none d-lg-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-menu position-relative">
                <nav class="main-nav">
                  <ul>
                    <li class="disabled"> <a href="{{ url('/') }}">Home</a> </li>
                    <li> <a href="{{ url('/gitar') }}">Katalog</a> </li>
                    <li> <a href="{{ url('/stem') }}">Tune up</a> </li>
                    <li> <a href="{{ url('/about') }}">About</a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-sticky py-4 py-lg-0">
        <div class="container">
          <div class="header-nav position-relative">
            <div class="row align-items-center">
              <div class="col-lg-3 col-6">

                <a href="{{'/'}}" class="header-logo">
                  <img src="{{ url('/') }}/assets/images/logo/dark.png" alt="Header Logo">
                </a>

              </div>
              <div class="col-lg-6 d-none d-lg-block">
                <div class="main-menu">
                  <nav class="main-nav">
                    <ul>
                      <li> <a href="{{ url('/') }}">Home</a> </li>
                      <li> <a href="{{ url('/gitar') }}">Katalog</a> </li>
                      <li> <a href="{{ url('/stem') }}">Tune up</a> </li>
                      <li> <a href="{{ url('/about') }}">About</a> </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="header-right">
                  <ul>
                    {{-- <li>
                      <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="pe-7s-search"></i>
                      </a>
                    </li> --}}
                    <li class="dropdown d-lg-block">
                      <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="stickysettingButton"
                        data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                        <i class="pe-7s-user"></i>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="stickysettingButton">
                        @if (!Auth::guest())
                        <li><a class="dropdown-item" href="#">My account</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        @else
                        <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                          @endif


                        </li>
                      </ul>
                    </li>
                    {{-- <li class="d-none d-lg-block">
                      <a href="wishlist.html">
                        <i class="pe-7s-like"></i>
                      </a>
                    </li>
                    <li class="minicart-wrap me-3 me-lg-0">
                      <a href="#miniCart" class="minicart-btn toolbar-btn">
                        <i class="pe-7s-shopbag"></i>
                        <span class="quantity">3</span>
                      </a>
                    </li> --}}
                    <li class="mobile-menu_wrap d-block d-lg-none">
                      <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                        <i class="pe-7s-menu"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-body">
          <div class="inner-body">
            <div class="offcanvas-top">
              <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
            </div>
            <div class="header-contact offcanvas-contact">
              {{-- <i class="pe-7s-call"></i>
              <a href="tel://+00-123-456-789">+00 123 456 789</a> --}}
              <img src="{{ url('/') }}/assets/images/logo/dark.png" alt="Header Logo">
            </div>
            {{-- <div class="offcanvas-user-info">
              <ul class="dropdown-wrap">
                <li class="dropdown dropdown-left">
                  <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButtonTwo"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    English
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                    <li><a class="dropdown-item" href="#">French</a></li>
                    <li><a class="dropdown-item" href="#">Italian</a></li>
                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button" id="currencyButtonTwo"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    USD
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                    <li><a class="dropdown-item" href="#">GBP</a></li>
                    <li><a class="dropdown-item" href="#">ISO</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="pe-7s-user"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                    <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                    <li><a class="dropdown-item" href="{{ url('/login') }}">Login | Register</a></li>
            </ul>
            </li>
            <li>
              <a href="wishlist.html">
                <i class="pe-7s-like"></i>
              </a>
            </li>
            </ul>
          </div> --}}
          <div class="offcanvas-menu_area">
            <nav class="offcanvas-navigation">
              <ul class="mobile-menu">
                <ul>
                  <li> <a href="{{ url('/') }}">Home</a> </li>
                  <li> <a href="{{ url('/gitar') }}">Katalog</a> </li>
                  <li> <a href="{{ url('/stem') }}">Tune up</a> </li>
                  <li> <a href="{{ url('/about') }}">About</a> </li>
                  <li> <a href="{{ url('/#') }}">Login</a> </li>
                </ul>
              </ul>
            </nav>
          </div>
        </div>
      </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content modal-bg-dark">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close"
            data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
            data-tippy-theme="sharpborder">
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-search">
            <span class="searchbox-info">Start typing and press Enter to search or ESC to
              close</span>
            <form action="#" class="hm-searchbox">
              <input type="text" name="Search..." value="Search..." onblur="if(this.value==''){this.value='Search...'}"
                onfocus="if(this.value=='Search...'){this.value=''}" autocomplete="off">
              <button class="search-btn" type="submit" aria-label="searchbtn">
                <i class="pe-7s-search"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas-minicart_wrapper" id="miniCart">
    <div class="offcanvas-body">
      <div class="minicart-content">
        <div class="minicart-heading">
          <h4 class="mb-0">Shopping Cart</h4>
          <a href="#" class="button-close"><i class="pe-7s-close" data-tippy="Close" data-tippy-inertia="true"
              data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
              data-tippy-theme="sharpborder"></i></a>
        </div>
        <ul class="minicart-list">
          <li class="minicart-product">
            <a class="product-item_remove" href="#"><i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                data-tippy-theme="sharpborder"></i></a>
            <a href="single-product-variable.html" class="product-item_img">
              <img class="img-full" src="{{ url('/') }}/assets/images/product/small-size/2-1-70x78.png" alt="Product Image">
            </a>
            <div class="product-item_content">
              <a class="product-item_title" href="single-product-variable.html">American
                Marigold</a>
              <span class="product-item_quantity">1 x $23.45</span>
            </div>
          </li>
          <li class="minicart-product">
            <a class="product-item_remove" href="#"><i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
                data-tippy-theme="sharpborder"></i></a>
            <a href="single-product-variable.html" class="product-item_img">
              <img class="img-full" src="{{ url('/') }}/assets/images/product/small-size/2-2-70x78.png" alt="Product Image">
            </a>
            <div class="product-item_content">
              <a class="product-item_title" href="single-product-variable.html">Black Eyed
                Susan</a>
              <span class="product-item_quantity">1 x $25.45</span>
            </div>
          </li>
          <li class="minicart-product">
            <a class="product-item_remove" href="#">
              <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away"
                data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
            </a>
            <a href="single-product-variable.html" class="product-item_img">
              <img class="img-full" src="{{ url('/') }}/assets/images/product/small-size/2-3-70x78.png" alt="Product Image">
            </a>
            <div class="product-item_content">
              <a class="product-item_title" href="single-product-variable.html">Bleeding Heart</a>
              <span class="product-item_quantity">1 x $30.45</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="minicart-item_total">
        <span>Subtotal</span>
        <span class="ammount">$79.35</span>
      </div>
      <div class="group-btn_wrap d-grid gap-2">
        <a href="cart.html" class="btn btn-dark">View Cart</a>
        <a href="checkout.html" class="btn btn-dark">Checkout</a>
      </div>
    </div>
  </div>
  <div class="global-overlay"></div>
  </header>

  @yield('container')

  <!-- Begin Footer Area -->
  <div class="footer-area" data-bg-image="assets/images/footer/bg/1-1920x465.jpg">
    <div class="footer-top section-space-top-100 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <div class="footer-widget-item">
              <div class="footer-widget-logo">
                <a href="index.html">
                  <img src="{{ url('/') }}/assets/images/logo/dark.png" alt="Logo">
                </a>
              </div>
              <p class="footer-widget-desc">Lorem ipsum dolor sit amet, consec adipisl elit, sed do eiusmod
                tempor
                <br>
                incidio ut labore et dolore magna.
              </p>
              <div class="social-link with-border">
                <ul>
                  <li>
                    <a href="#" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away"
                      data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away"
                      data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away"
                      data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away"
                      data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                      <i class="fa fa-dribbble"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 pt-40">
            <div class="footer-widget-item">
              <h3 class="footer-widget-title">Our Service</h3>
              <ul class="footer-widget-list-item">
                <li>
                  <a href="#">Payment Methods</a>
                </li>
                <li>
                  <a href="#">Money Guarantee!</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright">
              <span class="copyright-text">© {{ date('Y') }} Made with <i class="fa fa-heart text-danger"></i> by Me
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Area End Here -->

  <!-- Begin Modal Area -->
  <div class="modal quick-view-modal fade" id="quickModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close"
            data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
            data-tippy-theme="sharpborder">
          </button>
        </div>
        <div class="modal-body">
          <div class="modal-wrap row">
            <div class="col-lg-6">
              <div class="modal-img">
                <div class="swiper-container modal-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a href="#" class="single-img">
                        <img class="img-full" src="{{ url('/') }}/assets/images/product/large-size/1-1-570x633.jpg"
                          alt="Product Image">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="#" class="single-img">
                        <img class="img-full" src="{{ url('/') }}/assets/images/product/large-size/1-2-570x633.jpg"
                          alt="Product Image">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="#" class="single-img">
                        <img class="img-full" src="{{ url('/') }}/assets/images/product/large-size/1-3-570x633.jpg"
                          alt="Product Image">
                      </a>
                    </div>
                    <div class="swiper-slide">
                      <a href="#" class="single-img">
                        <img class="img-full" src="{{ url('/') }}/assets/images/product/large-size/1-4-570x633.jpg"
                          alt="Product Image">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
              <div class="single-product-content">
                <h2 class="title">American Marigold</h2>
                <div class="price-box">
                  <span class="new-price">$23.45</span>
                </div>
                <div class="rating-box-wrap">
                  <div class="rating-box">
                    <ul>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                      <li><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                  <div class="review-status">
                    <a href="#">( 1 Review )</a>
                  </div>
                </div>
                <div class="selector-wrap color-option">
                  <span class="selector-title border-bottom-0">Color</span>
                  <select class="nice-select wide border-bottom-0 rounded-0">
                    <option value="default">Black & White</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                    <option value="red">Red</option>
                  </select>
                </div>
                <div class="selector-wrap size-option">
                  <span class="selector-title">Size</span>
                  <select class="nice-select wide rounded-0">
                    <option value="medium">Medium Size & Poot</option>
                    <option value="large">Large Size With Poot</option>
                    <option value="small">Small Size With Poot</option>
                  </select>
                </div>
                <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod
                  tempo incid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                  dolor
                  in reprehenderit in voluptate</p>
                <ul class="quantity-with-btn">
                  <li class="quantity">
                    <div class="cart-plus-minus">
                      <input class="cart-plus-minus-box" value="1" type="text">
                    </div>
                  </li>
                  <li class="add-to-cart">
                    <a class="btn btn-custom-size lg-size btn-pronia-primary" href="cart.html">Add to
                      cart</a>
                  </li>
                  <li class="wishlist-btn-wrap">
                    <a class="custom-circle-btn" href="wishlist.html">
                      <i class="pe-7s-like"></i>
                    </a>
                  </li>
                  <li class="compare-btn-wrap">
                    <a class="custom-circle-btn" href="compare.html">
                      <i class="pe-7s-refresh-2"></i>
                    </a>
                  </li>
                </ul>
                <ul class="service-item-wrap pb-0">
                  <li class="service-item">
                    <div class="service-img">
                      <img src="{{ url('/') }}/assets/images/shipping/icon/car.png" alt="Shipping Icon">
                    </div>
                    <div class="service-content">
                      <span class="title">Free <br> Shipping</span>
                    </div>
                  </li>
                  <li class="service-item">
                    <div class="service-img">
                      <img src="{{ url('/') }}/assets/images/shipping/icon/card.png" alt="Shipping Icon">
                    </div>
                    <div class="service-content">
                      <span class="title">Safe <br> Payment</span>
                    </div>
                  </li>
                  <li class="service-item">
                    <div class="service-img">
                      <img src="{{ url('/') }}/assets/images/shipping/icon/service.png" alt="Shipping Icon">
                    </div>
                    <div class="service-content">
                      <span class="title">Safe <br> Payment</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Area End Here -->

  <!-- Begin Scroll To Top -->
  <a class="scroll-to-top" href="">
    <i class="fa fa-angle-double-up"></i>
  </a>
  <!-- Scroll To Top End Here -->

  </div>

  <!-- Global Vendor, plugins JS -->

  <!-- JS Files
    ============================================ -->

  <script src="{{ url('/') }}/assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="{{ url('/') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="{{ url('/') }}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
  <script src="{{ url('/') }}/assets/js/vendor/jquery.waypoints.js"></script>
  <script src="{{ url('/') }}/assets/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/wow.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/swiper-bundle.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/jquery.nice-select.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/parallax.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/tippy.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/ion.rangeSlider.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/mailchimp-ajax.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/jquery.counterup.js"></script>

  <!--Main JS (Common Activation Codes)-->
  <script src="{{ url('/') }}/assets/js/main.js"></script>

</body>

</html>
{{-- 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
<a class="nav-link" href="{{ url('/about') }}">About</a>
<a class="nav-link" href="{{ url('/gitar') }}">Data Gitar</a>
</div>
</div>
</div>
</nav>

@yield('container')
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html> --}}