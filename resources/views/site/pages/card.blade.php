@include('site.layouts.header')


<!--==============================
=            Investors           =
===============================-->
<style>
    .section {
    padding: 40px 0;}

    .section-title {
    text-align: center;
    margin-bottom: 50px;
}
.founder{
    background-color: #02020208;
    padding-bottom: 13px;
    border-bottom-right-radius: 12px;
    border-bottom-left-radius: 12px;
}
ul.social-links li a i {

    color: #f5f4f4;
}
</style>
<section class="section investors">
	<div class="container">
		<div class="row">
      <!-- #region -->
			<div class="col-12">
				<div class="section-title" style="background: url({{ asset('images/site') }}/2.jpg)
                 ">
					<h2 style="color: #fff;">شحن الالعاب بانواعها.</h2>
					<p style="color: #fff;">شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.. </p>
				</div>
			</div>



		</div>
	</div>
</section>
	<!--==================================
=            Feature carts            =
===================================-->
<section class="founders section pt-0">
    <div class="container">
        <div class="row">
            @foreach ($cardes as $carde)
            <div class="col-lg-4">
                <!-- Featured Member -->
                <div class="founder">
                    <!-- Member Image -->
                    <img class="w-100" src="{{  asset('images/site') }}/{{  $carde->picture  }}" alt="featured-member">
                    <!-- Name -->
                    <h2>  {{ $carde->name }}</h2>
                    <!-- position -->
                    {{-- <cite>  {{ $carde->name }}</cite> --}}
                    <!-- Description -->
                    {{-- <p>بطائق بلاستيشن امريكي.</p> --}}
                    <!-- Social Sites -->
                    {{-- <ul class="list-inline social-links">
                        <li class="list-inline-item"><a href="https://wa.me/967772377668"><i class="ti-comments-smiley"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/967772377668"><i class="ti-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/967772377668"><i class="ti-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/967772377668"><i class="ti-dribbble"></i></a></li>
                    </ul> --}}
                    {{-- <app-list></app-list> --}}
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--====  End of Feature Team  ====-->
{{-- <section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>حان الوقت لتغيير رأيك</h2>
				<p style="    margin-bottom: 10px;" >  والاستفادة من خدماتنا حمل تطبيق لايف تك وكن  بصدارة</p>
                <p style="    margin-bottom: 10px;"> او يمكنك طلب الخدمة عبرالتواصل معنا عبر منصاتنا</p>
                <ul class="list-inline social-links">
                        <li class="list-inline-item"><a href="{{  get_settings()->whatsapp_url }}"><i class="ti-comments-smiley"></i></a></li>
                        <li class="list-inline-item"><a href="{{  get_settings()->x_url }}"><i class="ti-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="{{  get_settings()->instagram_url }}"><i class="ti-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="{{  get_settings()->facebook_url }}"><i class="ti-facebook"></i></a></li>
                </ul>
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="{{  get_settings()->apple_stor_url }}" class="btn btn-rounded-icon">
							<i class="ti-apple"></i>
							ايفون
						</a>
					</li>
					<li class="list-inline-item">
						<a href="{{  get_settings()->google_play_url }}" class="btn btn-rounded-icon">
							<i class="ti-android"></i>
							اندرويد
						</a>
					</li>
					<li class="list-inline-item">
						<a href="{{  get_settings()->apple_stor_url }}" class="btn btn-rounded-icon">
							<i class="ti-microsoft-alt"></i>
							ويندوز
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section> --}}











@include('site.layouts.footer')





