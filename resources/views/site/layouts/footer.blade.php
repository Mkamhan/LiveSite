@include('site.layouts.footercon')

<style>
    .list-inline-item:not(:last-child) {
    margin-right: auto;
}
.call-to-action-app ul li:first-child {
    margin-left: 20px;
}
</style>
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 m-md-auto align-self-center">

                    <div class="block" style="display: table;">
                        <a href="{{ route('home') }}"><img src="{{ asset('site') }}/images/1.png" alt="footer-logo"
                                width="160px"></a>
                        <!-- Social Site Icons -->
                        <ul class="social-icon list-inline">
                            <li class="list-inline-item">
                                <a data-bgcolor="#00b489" data-color="#ffffff"
                                    style="color: rgb(255, 255, 255); background-color: rgb(0, 180, 137);"
                                    href="{{ get_social_network()->whatsapp_url }}">
                                    <i class="icon-copy bi bi-whatsapp"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a data-color="#ffffff"
                                    style="color: rgb(255, 255, 255); background-color: rgb(59, 89, 152);"
                                    href="{{ get_social_network()->facebook_url }}"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a data-bgcolor="#1da1f2" data-color="#ffffff"
                                    style="color: rgb(255, 255, 255); background-color: rgb(29, 161, 242);"
                                    href="{{ get_social_network()->x_url }}"><i class="ti-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a data-bgcolor="#f46f30" data-color="#ffffff"
                                    style="color: rgb(255, 255, 255); background-color: rgb(244, 111, 48);"
                                    href="{{ get_social_network()->instagram_url }}"><i class="ti-instagram"></i></a>
                            </li>



                            {{-- <li class="list-inline-item">
                      <a href="{{ get_social_network()->facebook_url }}"><i class="ti-facebook"></i></a>
                    </li> --}}

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2 text-center">
                        <!-- heading -->
                        <h6>لايف تك</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="{{ route('about') }}">من نحن</a></li>
                            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                            <li><a href="team.html"></a></li>
                            <li><a href="{{ route('privacy-policy') }}">سياية الخصوصية </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2 text-center">
                        <!-- heading -->
                        <h6>خدماتنا</h6>
                        <!-- links -->
                        <ul>
                            @foreach (get_catogry(3) as $foot_catogres)
                                {{-- <li><a href="carts.html">بطائق الدفع الالكتروني</a></li> --}}
                                <li><a
                                        class=""href="{{ route('category', $foot_catogres->id) }}">{{ $foot_catogres->name }}</a>
                                </li>
                                {{-- <li><a href="career.html">قسم الالعاب</a></li>
                    <li><a href="blog-single.html">شحن تطبيقات الشات  </a></li>
                    <li><a href="privacy.html"></a></li> --}}
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                <div class="block-2 text-center">
                  <!-- heading -->
                  <h6>لايف  تك </h6>
                  <!-- links -->
                  <ul>


                  </ul>
                </div>
              </div> --}}
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2 text-center">
                        <!-- heading -->
                        <h6>لايف تك </h6>
                        <!-- links -->
                        <ul>
                            <li><a href="https://livetach.yemoney.net/register">انشاء حساب</a></li>
                            <li><a href="https://livetachw.yemoney.net/#/">تسجيل دخول</a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="text-center bg-dark py-4">
        <small class="text-secondary">جميع الحقوق محفوظة &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>. لدئ &amp; فريق <a href="https://">لايف تك</a>
        </small class="text-secondary">
    </div>
</footer>


<!-- To Top -->
<div class="scroll-top-to">
    <i class="ti-angle-up"></i>
</div>

<!-- JAVASCRIPTS -->
<script src="{{ asset('site') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('site') }}/plugins/bootstrap/bootstrap.min.js"></script>
<script src="{{ asset('site') }}/plugins/slick/slick.min.js"></script>
<script src="{{ asset('site') }}/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="{{ asset('site') }}/plugins/syotimer/jquery.syotimer.min.js"></script>
<script src="{{ asset('site') }}/plugins/aos/aos.js"></script>
<script src="{{ asset('site') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<!-- e shope -->
{{-- <script src="{{ asset('site') }}/js/slick.min.js"></script>
    <script src="{{ asset('site') }}/js/jquery.zoom.min.js"></script> --}}
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
<script src="{{ asset('site') }}/plugins/google-map/gmap.js"></script>

<script src="{{ asset('site') }}/js/script.js"></script>
</body>
