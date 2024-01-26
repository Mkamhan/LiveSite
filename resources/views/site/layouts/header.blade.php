<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>لايف تك  | {{ isset($title) ? $title : 'title'; }} </title>
    <meta property="og:title" content="لايف تك">
    <!-- theme meta
  <meta name="theme-name" content="small-apps" />-->
    <meta name="keywords"
        content="يمن موبايل, خدمات يمن موبايل, رصيد يمن موبايل, باقات يمن موبايل, اليمن, خدمات الباقات,خدمات الرصيد, جميع خدمات يمن موبايل,ارقام جديدة, ارقام برمجة,ارقام مميزة,
  اليمن,شبكات الاتصالات اليمن,اتصالات اليمن,
   فروع يمن موبايل,وكلاء يمن موبايل,شرايح, تسديد باقات يمن موبايل, موقع خدمات يمن موبايل,تطبيق خدمات يمن موبايل">
    <meta name="description"
        content="نظام خدمات يمن موبايل، خدمات الرصيد والباقات والشرايح, رصيد
    وشحن فوري، باقات يمن موبايل، باقات يو ، باقات سبافون">
    <!-- Mobile Specific Metas
  ================================================== -->
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0"> --}}


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('images/site') }}/{{ get_settings()->site_favicon }}" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="{{ asset('site') }}/plugins/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('site') }}/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('site') }}/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('site') }}/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('site') }}/plugins/aos/aos.css">
    {{-- //////////////////////e shope/////////////////////////////// --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('site') }}/css/main_styles.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('site') }}/css/main_styles.css"> --}}
    {{-- //////////////////////e shope/////////////////////////////// --}}
    @if(Route::is('category-singel'))
    <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/vendors/styles/style.css" />
    @endif

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('site') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('site') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('site') }}/plugins/OwlCarousel2-2.2.1/animate.css"> --}}

    <!-- CUSTOM CSS -->
    <link href="{{ asset('site') }}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
			href="{{ asset('back') }}/vendors/styles/icon-font.min.css"
		/>
    <link rel="stylesheet" href="{{ asset('site') }}/plugins/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="{{ asset('site') }}/font/Cairo-VariableFont_slnt,wght.ttf"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <!--<script src="js/codehtml.js"></script> -->
</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav" style="     font-weight: 600;">

    {{-- <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="site/images/logo3.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
          </button>
          <div class="collapse navbar-collapse" style="margin-right: 30%;" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="index.html" data-toggle="">الرئيسية
                  <!--<span><i class="ti-angle-down"></i></span>-->
                </a>
                <!-- Dropdown list -->
               <!-- <ul class="dropdown-menu">
                  <li><a class="dropdown-item active" href="index.html">Homepage</a></li>
                  <li><a class="dropdown-item" href="homepage-2.html">Homepage 2</a></li>
                  <li><a class="dropdown-item active3" href="homepage-3.html">Homepage 3</a></li>

                  <li class="dropdown dropdown-submenu dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                      <li><a class="dropdown-item" href="index.html">Submenu 11</a></li>
                      <li><a class="dropdown-item" href="index.html">Submenu 12</a></li>
                    </ul>
                  </li>
                </ul>-->
              </li>
              <li class="nav-item dropdown @@pages">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">خدماتنا
                  <span><i class="ti-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <ul class="dropdown-menu" style="text-align: right;">
                  <li><a class="dropdown-item @@team" href="carts.html">بطائق الدفع الالكتروني</a></li>
                  <li><a class="dropdown-item @@career" href="career.html">قسم الالعاب</a></li>
                  <li><a class="dropdown-item @@blogSingle" href="blog-single.html">شحن تطبيقات الشات </a></li>
                   <li><a class="dropdown-item @@blog" href="blog.html">المدونة</a></li>
                  <li><a class="dropdown-item @@privacy" href="privacy-policy.html">سياسة الخصوصية</a></li>
                  <!--<li><a class="dropdown-item @@faq" href="FAQ.html">FAQ</a></li>
                  <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                  <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                  <li><a class="dropdown-item" href="404.html">404</a></li>
                  <li><a class="dropdown-item" href="comming-soon.html">Coming Soon</a></li>

                  <li class="dropdown dropdown-submenu dropleft">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                      <li><a class="dropdown-item" href="index.html">Submenu 21</a></li>
                      <li><a class="dropdown-item" href="index.html">Submenu 22</a></li>
                    </ul>
                  </li>-->
                </ul>
              </li>
              <li class="nav-item @@about">
                <a class="nav-link" href="about.html">من نحن</a>
              </li>
              <li class="nav-item @@contact">
                <a class="nav-link" href="contact.html">تواصل معنا</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}
    <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
        <div class="container">
            <a class="navbar-brand" href="/"><img
                    src="{{ asset('images/site') }}/{{ get_settings()->site_logo }}" alt="logo"
                    width="160px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse" style="margin-right: 25%;" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown  {{ Route::is('home') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="{{ route('home') }}" data-toggle="">الرئيسية
                            <!--<span><i class="ti-angle-down"></i></span>-->
                        </a>
                    </li>
                    {{-- foreach (App\Models\Categorie::tree() as $navcategory) --}}
                    @foreach (get_catogry(0)  as $navcategory)
                        <li
                            class="nav-item dropdown  {{ request()->path() == 'category/' . $navcategory->id . '/secion' ? 'active' : '' }}   ">
                            <a class="nav-link dropdown-toggle " href="{{ route('category', $navcategory->id) }}"
                                data-toggle="">{{ $navcategory->name }}
                                <!--<span><i class="ti-angle-down"></i></span>-->

                            </a>

                        </li>
                    @endforeach


                    {{-- <li class="nav-item dropdown  {{ Route::is('game') ?'active' :'' }}   ">
                        <a class="nav-link dropdown-toggle " href="/game" data-toggle="">الالعاب
                            <!--<span><i class="ti-angle-down"></i></span>-->
                        </a>
                    </li>
                    <li class="nav-item dropdown {{ Route::is('chat') ?'active' :'' }}   ">
                        <a class="nav-link dropdown-toggle " href="/chat" data-toggle="">برامج الشات
                            <!--<span><i class="ti-angle-down"></i></span>-->
                        </a>
                    </li>
                    <li class="nav-item dropdown   {{ Route::is('card') ?'active' :'' }}  ">
                        <a class="nav-link dropdown-toggle" href="/card" data-toggle="">بطائق الدفع الالكتروني
                            <!--<span><i class="ti-angle-down"></i></span>-->
                        </a>
                    </li> --}}
                    <style>
                        .dropleft .dropdown-toggle::before {
                            content: "";
                            margin-right: 5px;
                        }

                        .nav-item .nav-link:hover {
                            background-color: #fafafa;
                        }

                        .main-nav .navbar-nav .nav-item .nav-link {

                            text-align: center;
                            font-size: 15px;
                            text-transform: uppercase;
                            font-weight: 600;
                            color: #000;
                            padding-left: 10px;
                            padding-right: 5px;
                            line-height: 45px;
                        }

                        ul.social-links li a i {

                            color: #f5f4f4;
                        }
                    </style>
                    {{-- <li class="nav-item dropdown @@pages">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">خدماتنا
                            <span><i class="ti-angle-down"></i></span>
                        </a>





                        <!-- Dropdown list -->
                        <ul class="dropdown-menu" style="text-align: right;">
                            @foreach ($categories as $categorie)
                                {{-- <li><a class="dropdown-item @@team" href="{{ $categorie->id }}">{{ $categorie->name }}</a></li> --}}
                    {{-- <li class="dropdown dropdown-submenu dropleft">
                                    <a class="dropdown-item dropdown-toggle" href="{{ $categorie->id }}"
                                        id="dropdown050{{ $categorie->id }}" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        -
                                            </i>{{ $categorie->name }}</a>

                                    @if ($categorie->isChild1($categorie->id))
                                        <ul class="dropdown-menu" aria-labelledby="dropdown050{{ $categorie->id }}" style="text-align: right;">

                                            @foreach ($categorie->isChild1($categorie->id) as $child)
                                                {{-- <li><a href="#">{{ $child->name }}</a></li> --}}
                    {{-- <li><a class="dropdown-item dropdown-toggle" href="{{ $child->id }}"
                                                        id="dropdown050{{ $child->id }}" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="true">- {{ $child->name }}
                                                    <img class="left" style="float: left;" src="{{  asset('images/site') }}/{{  $child->picture  }}" width="30px">
                                                    </a>
                                                </li>

                                                @if ($child->isChild1($child->id))
                                                    <ul class="dropdown-menu"aria-labelledby="dropdown050{{ $child->id }}">
                                                        @foreach ($child->isChild1($child->id) as $child2)
                                                            <li><a class="dropdown-item"
                                                                    href="{{ $child2->id }}">{{ $child2->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                            @endforeach
                        </ul> --}}

                    {{-- </li> --}}




                    {{-- <li class="nav-item dropdown {{ Route::is('privacy-policy') ?'active' :'' }} ">
                        <a class="nav-link" href="/privacy-policy">سياسة الخصوصية</a>
                    </li> --}}
                    <li class="nav-item dropdown  {{ Route::is('privacy-policy') || Route::is('contact') ||Route::is('about')  ? 'active' : '' }} ">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="">اخرى
                            <span><i class="ti-angle-down"></i></span>
                          <!--<span><i class="ti-angle-down"></i></span>-->
                        </a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu"  style="text-align: center;">
                            <li class=" ">
                                <a class="dropdown-item {{ Route::is('about') ? 'active' : '' }} " href="{{ route('about') }}">من نحن</a>
                            </li>
                            <li class=" ">
                                <a class="dropdown-item  {{ Route::is('contact') ?'active' :'' }}" href="{{ route('contact') }}">تواصل معنا</a>
                            </li>
                            <li class="  ">
                                <a class="dropdown-item {{ Route::is('privacy-policy') ?'active' :'' }}" href="{{ route('privacy-policy') }}">سياسة الخصوصية</a>
                            </li>
                        </ul>
                      </li>
                    {{-- <li class="nav-item dropdown {{ Route::is('about') ? 'active' : '' }} ">
                        <a class="nav-link" href="about.html">من نحن</a>
                    </li> --}}

                </ul>
            </div>
        </div>
    </nav>
