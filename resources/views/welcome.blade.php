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
    <title>لايف تك</title>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bootstrap App Landing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Small Apps Template v1.0">


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="site/images/favicon1.png" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="site/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="site/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="site/plugins/slick/slick.css">
    <link rel="stylesheet" href="site/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="site/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="site/plugins/aos/aos.css">

    <!-- CUSTOM CSS -->
    <link href="site/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <!--<script src="js/codehtml.js"></script> -->
</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

    <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
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
                    </li>
                    <li class="nav-item dropdown @@pages">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">خدماتنا
                            <span><i class="ti-angle-down"></i></span>
                        </a>





                        <!-- Dropdown list -->
                        <ul class="dropdown-menu" style="text-align: right;">
                            @foreach ($categories as $categorie)
                                {{-- <li><a class="dropdown-item @@team" href="{{ $categorie->id }}">{{ $categorie->name }}</a></li> --}}
                                <li class="dropdown dropdown-submenu dropleft">
                                    <a class="dropdown-item dropdown-toggle" href="{{ $categorie->id }}"
                                        id="dropdown050{{ $categorie->id }}" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">{{ $categorie->name }}</a>

                                    @if ($categorie->isChild1($categorie->id))
                                        <ul class="dropdown-menu" aria-labelledby="dropdown050{{ $categorie->id }}">

                                            @foreach ($categorie->isChild1($categorie->id) as $child)
                                                {{-- <li><a href="#">{{ $child->name }}</a></li> --}}
                                                <li><a class="dropdown-item dropdown-toggle" href="{{ $child->id }}"
                                                        id="dropdown050{{ $child->id }}" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="true">{{ $child->name }}</a>
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
                        </ul>

                    </li>




                     <li class="nav-item @@about">
                        <a class="nav-link" href="privacy-policy.html">سياسة الخصوصية</a>
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
    </nav>







    @include('site.layouts.footer')
