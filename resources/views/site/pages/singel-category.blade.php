@include('site.layouts.header')

{{-- @push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('back') }}/vendors/styles/core.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('back') }}/vendors/styles/style.css" />
@endpush --}}




{{-- <section class="section investors">
    <div class="container">
        <div class="row">

            @foreach ($sin as $cat)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="block text-center">
                    <!-- Investor Image -->
                    <div class="image shadow hover-zoom">
                        <img class="img-fluid" src="{{ asset('images/site/product') }}/{{ $cat->photo }}" alt="investor">
                        <span>${{ $cat->price }}</span> /  <span>ريال يمني{{ $cat->price *512 }}</span>
                    </div>
                    <h3> {{ $cat->title }}</h3>
                    <!--  -->
                    <p> {{ $cat->summary }} </p>
                </div>
            </div>
            @endforeach


        </div>
    </div>

</section> --}}


<!-- Product Style -->

<!--/ End Product Style 1  -->


<style>
    p {
        font-weight: bold;
        font-family: 'Cairo', sans-serif;
    }

    .blog-single .single-post .post-body .post-image {
        width: 90%
    }

</style>
<div class="col-12 m-auto text-center"style="direction: ltr;">
    <div class="quote-slider">
        <div class="item mb-4"  style=" background-size:cover; color: #fff;  background-color: #202bbc;">
            <!-- Quote -->
            <h2 style="color: #fff;  font-weight: bold;">شحن الالعاب </h2>
        <p style="color: #fff;  font-weight: bold; font-family: 'Cairo', sans-serif;"> يمكنك شحن كافة الالعاب وتزويد العابك بالعملات الافتراضبة </p>
            <!-- Company -->
            <cite class="ml-0"> الالعاب</cite>
        </div>
        <div class="item mb-4"style="color: #000000; background-color: #ffb005;">
            <!-- Quote -->
            <h2 style="color: #000;  font-weight: bold;"> شحن تطبيقات الشات</h2>
            <p style="color: #000;  font-weight: bold; font-family: 'Cairo', sans-serif;"> يمكنك شحن حسابك والدخول بالتحديات       </p>

            <!-- Company -->
            <cite class="ml-0" style="color: #000; ">برامج الشات</cite>
        </div>

    </div>
</div>
<!--====================================
=            Single Article            =
=====================================-->
@foreach ($category as $categores)
    {{-- <section class="section blog-single" style="    background: #fff;direction: rtl;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">



                    <!-- Single Post -->
                    <article class="single-post">
                        <!-- Post title -->
                        <div class="post-title text-center"
                            style="background-color: #f4f4f48c;
                    border-top-left-radius: 13px;
                    border-top-right-radius: 13px;
                    padding-bottom: 1px;
                ">
                            <h1 style="    font-weight: bold;">{{ $categores->name }}</h1>
                            <!-- Tags -->
                            <ul class="list-inline post-tag"> --}}
    {{-- <li class="list-inline-item">
								<img src="{{  asset('images/site') }}/{{  $categores->picture }}" alt="author-thumb">
							</li>
							<li class="list-inline-item">
								<a href="#">Thomas Johnson</a>
							</li>
							<li class="list-inline-item">
								<a href="#">August 8, 2017</a>
							</li>
                            </ul>
                        </div> --}}

    <!-- Post body -->
    {{-- <div class="post-body"
                            style="background-color: #f4f4f48c;
                    text-align: center;
                    padding: 10px;
                    border-bottom-left-radius: 13px;
                    border-bottom-right-radius: 13px;"> --}}
    <!-- Feature Image -->
    {{-- <div class="feature-image">
							<img class="img-fluid" src="{{  asset('images/site') }}/{{  $categores->picture }}" alt="feature-image">
						</div> --}}
    <!-- Paragrapgh -->
    {{-- <p>
                            شحن شدات ببجي موبايل هو عملية شراء العملة الافتراضية في اللعبة، والتي تسمى UC. يمكن استخدام UC لشراء عناصر مختلفة في اللعبة، مثل ملابس الشخصيات، والأسلحة، والعناصر التجميلية الأخرى..</p>
						<p>لشحن شدات ببجي موبايل، ستحتاج إلى معرف اللاعب الخاص بك، والذي يمكنك العثور عليه في إعدادات اللعبة. بمجرد الحصول على معرف اللاعب الخاص بك،.</p>
						<!-- Blockquote -->
						<div class="quote">
							<blockquote>
								Design is not just what it looks like and feels like. Design is how it works.
							</blockquote>
						</div>
						<!-- Paragrapgh -->
						<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
						<!-- Post Image --> --}}

    {{-- <div class="post-image text-center">
                                <img class="img-fluid" src="{{ asset('images/site') }}/{{ $categores->picture }}"
                                    alt="post-body-image" style=" opacity: 1;">

                            </div>

                            <!-- Paragrapgh -->
                            <p>
                                شحن شدات ببجي موبايل هو عملية شراء العملة الافتراضية في اللعبة، والتي تسمى UC. يمكن
                                استخدام UC لشراء عناصر مختلفة في اللعبة، مثل ملابس الشخصيات، والأسلحة،
                                والعناصر التجميلية الأخرى.</p>
                            <p>لشحن شدات ببجي موبايل، ستحتاج إلى معرف اللاعب الخاص بك،
                                والذي يمكنك العثور عليه في إعدادات اللعبة. بمجرد الحصول على معرف اللاعب الخاص بك،.</p>


                        </div>
                    </article> --}}
    <!-- About Author Widget -->
    {{-- <div class="about-author"> --}}
    {{-- <h2>بعض {{ $categores->isChildName($categores->parent_id) }} الاخرى </h2> --}}
    {{-- <div class="media">
                            <!-- Author Image -->
                            <div class="image">
                                <img class="d-flex justify-content-center align-self-center"
                                    src="images/team/marketing-team-03.jpg" alt="author-image">
                            </div>
                            <!-- About Author -->
                            <div class="media-body align-self-center">
                                <!-- Author Name -->
                                <h3>Jonathon Andrew</h3>
                                <!-- Bio -->
                                <p>Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet
                                    et, porttitor at sem. Proin eget tortor risus. Mauris blandit aliquet elit, </p>
                                <!-- Author Social links -->
                                <ul class="list-inline social-links">
                                    <li class="list-inline-item"><a href="https://themefisher.com/"><i
                                                class="ti-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://themefisher.com/"><i
                                                class="ti-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://themefisher.com/"><i
                                                class="ti-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://themefisher.com/"><i
                                                class="ti-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
    {{-- </div>
                </div>


            </div>
        </div>
    </section> --}}
    <!-- section -->
    {{-- <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!--  Product Details -->
                <div class="product product-details clearfix" style="text-align: right">
                    <div class="col-md-6" style="    float: left;">
                        <div id="product-main-view">

                        </div>
                        <div id="product-view">
                            <div class="product-view">
                                <img src="{{ asset('images/site') }}/{{ $categores->picture }}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6" style="    float: left; ">
                        <div class="product-body">
                            {{-- <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div> --}}
    {{-- <h2 class="product-name">{{ $categores->name }}</h2>

                            <p><strong>الحالة:</strong> {{ $categores->status }}</p>
                            <p><strong>القسم:</strong> {{ $categores->isChildName($categores->parent_id) }}</p>
                            <p>
                                شحن شدات ببجي موبايل هو عملية شراء العملة الافتراضية في اللعبة، والتي تسمى UC. يمكن
                                استخدام UC لشراء عناصر مختلفة في اللعبة، مثل ملابس الشخصيات، والأسلحة،
                                والعناصر التجميلية الأخرى.</p>
                            <p>لشحن شدات ببجي موبايل، ستحتاج إلى معرف اللاعب الخاص بك،
                                والذي يمكنك العثور عليه في إعدادات اللعبة. بمجرد الحصول على معرف اللاعب الخاص بك،.</p>



                        </div>
                    </div>


                </div> --}}
    <!-- /Product Details -->
    {{-- </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div> --}}
    <!-- /section -->
    <!--====  End of Single Article  ====-->

    <div class="blog-wrap" style="direction: rtl;     padding-top: 16px;">
        <div class="container pd-0">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="blog-detail card-box overflow-hidden mb-30"
                        style="text-align: center;     padding-top: 5px;">
                        <h2 class="mb-10">
                            {{ $categores->name }}
                        </h2>

                        <div class="blog-img">
                            <img src="{{ asset('images/site') }}/{{ $categores->picture }}" alt="" />
                        </div>
                        <div class="blog-caption" style="direction: rtl;">
                            {{-- <h2 class="mb-10">
                                {{ $categores->name }}
                            </h2> --}}
                            <p> {{ $categores->description }}</p>

                            <h5 class="mb-10">

                            </h5>
                            <p> {{ $categores->summary }}</p>


                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card-box mb-30" style="direction: rtl; ">
                        <h5 class="pd-20 h5 mb-0"
                            style="    text-align: right; font-family: 'Cairo', sans-serif;     font-weight: bold;">
                            الاقسام</h5>
                        <div class="list-group">
                            @foreach ($categores->tree() as $category)
                                <a style=" font-weight: bold;" href="{{ route('category',$category->id) }}"
                                    class="list-group-item d-flex align-items-center justify-content-between  {{ $category->id === $categores->parent_id ?'active' :'' }}">{{ $category->name }}
                                    <span
                                        class="badge badge-primary badge-pill">{{ $category->countCatogry($category->id) }}</span></a>
                            @endforeach
                            {{-- <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between">Css
                                <span class="badge badge-primary badge-pill">10</span></a>
                            <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between active">Bootstrap
                                <span class="badge badge-primary badge-pill">8</span></a>
                            <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between">jQuery
                                <span class="badge badge-primary badge-pill">15</span></a>
                            <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between">Design
                                <span class="badge badge-primary badge-pill">5</span></a> --}}
                        </div>
                    </div>
                    <div class="card-box mb-30">
                        <h3 class="pd-20 h5 mb-0"
                            style="    text-align: right; font-family: 'Cairo', sans-serif;     font-weight: bold;">بعض
                            {{ $categores->isChildName($categores->parent_id) }} الاخرى </h3>
                        <div class="latest-post"  style="    text-align: right; font-family: 'Cairo', sans-serif;  ">
                            <ul>

                            @foreach ($categores->getCatogryRondom($categores->parent_id) as $subcategory)
                                {{-- <li>

                                        <h3>
                                            <a href="{{route('category-singel', $subcategory->id) }}">

                                                <span class="user-icon">
                                                    <img style="    width: 50px;
                                                    margin-right: 50%;
                                                    border-radius: 9%;
                                                    height: auto;
                                                    float: none;"  src="{{ asset('images/site') }}/{{ $subcategory->picture }}" alt="">
                                                </span>
                                                <span style="     display: inline-block;
                                                vertical-align: middle;
                                                margin-top: 12px;
                                                color: #131e22;
                                                float: right;
                                                font-weight: bold;" class="user-name">{{ $subcategory->name }}</span>

                                            </a>
                                        </h3>

                                    <span>HTML</span>

                                </li>--}}
                                <li >
                                    <h4>
                                        <a style=" font-weight: bold;" href="{{route('category-singel', $subcategory->id) }}">
                                            {{ $subcategory->name }}
                                           </a>
                                    </h4>
                                    {{-- <span>Css</span> --}}
                                </li>
                                @endforeach
                                {{-- <li>
                                    <h4>
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit</a>
                                    </h4>
                                    <span>Css</span>
                                </li>
                                <li>
                                    <h4>
                                        <a href="#">Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco</a>
                                    </h4>
                                    <span>jQuery</span>
                                </li>
                                <li>
                                    <h4>
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit</a>
                                    </h4>
                                    <span>Bootstrap</span>
                                </li>
                                <li>
                                    <h4>
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit</a>
                                    </h4>
                                    <span>Design</span>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="card-box overflow-hidden">
                        <h5 class="pd-20 h5 mb-0">Archives</h5>
                        <div class="list-group">
                            <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between">January
                                2020</a>
                            <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between">February
                                2020</a>
                            <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between">March
                                2020</a>
                            <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between">April
                                2020</a>
                            <a href="#"
                                class="list-group-item d-flex align-items-center justify-content-between">May 2020</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    < @endforeach





        @include('site.layouts.footer')
