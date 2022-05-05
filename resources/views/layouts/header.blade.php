<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Moviebox')</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('tema') }}/assets/img/favcion.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('tema') }}/assets/css/bootstrap.min.css" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('tema') }}/assets/css/slicknav.min.css" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('tema') }}/assets/css/icofont.css" media="all" />
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('tema') }}/assets/css/owl.carousel.css">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('tema') }}/assets/css/magnific-popup.css">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('tema') }}/assets/css/style.css" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('tema') }}/assets/css/responsive.css" media="all" />
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    @yield('css')
    @toastr_css
</head>

<body>
    <!-- Page loader -->
    <div id="preloader"></div>
    <!-- header section start -->
    <header class="header">
        <div class="container">
            <div class="header-area">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('tema') }}/assets/img/logo.png"
                            alt="logo" /></a>
                </div>
                <div class="header-right">
                    <form action="#">
                        <select>
                            <option value="Movies">Filmler</option>
                            <option value="Movies">Filmler</option>
                            <option value="Movies">Filmler</option>
                        </select>
                        <input type="text" />
                        <button><i class="icofont icofont-search"></i></button>
                    </form>
                    <ul>
                        {{-- <li><a href="#">Welcome Guest!</a></li> --}}
                        @auth
                            <li><a href="{{ route('profil',Str::slug(Auth::user()->name)) }}" >{{ Auth::user()->name . ' ' . Auth::user()->lastname }}</a></li>
                            <li><a href="{{ route('logout') }}">Çıkış Yap</a></li>
                        @else
                            <li><a class="login-popup" href="#">Giriş Yap</a></li>
                        @endauth
                    </ul>
                </div>
                <div class="menu-area">
                    <div class="responsive-menu"></div>
                    <div class="mainmenu">
                        <ul id="primary-menu">
                            <li><a class="@if (Request::segment(1) == '') active @endif"
                                    href="{{ route('home') }}">Anasayfa</a></li>
                            <li><a class="@if (Request::segment(1) == 'movie') active @endif"
                                    href="{{ route('movie') }}">Videolar</a></li>
                            <li><a href="celebrities.html">Top Kullanıcı List</a></li>
                            <li><a href="top-movies.html">Top Video List</a></li>
                            <li><a href="blog.html">News</a></li>
                            {{-- <li><a href="#">Pages <i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="blog-details.html">Blog Details</a></li>
										<li><a href="movie-details.html">Movie Details</a></li>
									</ul>
								</li>
                                <li><a class="theme-btn" href="#"><i class="icofont icofont-ticket"></i> Tickets</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- //login --}}
    <div class="login-area">
        <div class="login-box rounded">
            <a href="#"><i class="icofont icofont-close rounded"></i></a>
            <h2>Giriş</h2>
            <form action="{{ route('loginPost') }}" method="POST">
                @csrf
                <h6>E-Posta Adresi</h6>
                <input type="email" required name="email" style="color: black" class="emailInput" />
                <h6>Şifre</h6>
                <input type="password" required name="password" style="color: black" class="passwordInput" />
                <button type="submit" class="theme-btn">Giriş</button>
                <span>Siteye kayıt olmak için referans kodu gereklidir?</span>
                <span class="text-center"></span>
                <br>
                <div class="login-social">
                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                    <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                    <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                    <a href="#"><i class="icofont icofont-camera"></i></a>
                </div>
            </form>

        </div>
        @include('layouts.alert')
    </div>
    {{-- //end login --}}
    <div class="buy-ticket">
        <div class="container">
            <div class="buy-ticket-area">
                <a href="#"><i class="icofont icofont-close"></i></a>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="buy-ticket-box">
                            <h4>Buy Tickets</h4>
                            <h5>Seat</h5>
                            <h6>Screen</h6>
                            <div class="ticket-box-table">
                                <table class="ticket-table-seat">
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                    </tr>
                                </table>
                                <table class="ticket-table-seat">
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td class="active">1</td>
                                        <td class="active">1</td>
                                        <td class="active">1</td>
                                        <td class="active">1</td>
                                        <td class="active">1</td>
                                        <td class="active">1</td>
                                        <td class="active">1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                    </tr>
                                </table>
                                <table class="ticket-table-seat">
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="ticket-box-available">
                                <input type="checkbox" />
                                <span>Available</span>
                                <input type="checkbox" checked />
                                <span>Unavailable</span>
                                <input type="checkbox" />
                                <span>Selected</span>
                            </div>
                            <a href="#" class="theme-btn">previous</a>
                            <a href="#" class="theme-btn">Next</a>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="buy-ticket-box mtr-30">
                            <h4>Your Information</h4>
                            <ul>
                                <li>
                                    <p>Location</p>
                                    <span>HB Cinema Box Corner</span>
                                </li>
                                <li>
                                    <p>TIME</p>
                                    <span>2018.07.09 20:40</span>
                                </li>
                                <li>
                                    <p>Movie name</p>
                                    <span>Home Alone</span>
                                </li>
                                <li>
                                    <p>Ticket number</p>
                                    <span>2 Adults, 2 Children, 2 Seniors</span>
                                </li>
                                <li>
                                    <p>Price</p>
                                    <span>89$</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- header section end -->
