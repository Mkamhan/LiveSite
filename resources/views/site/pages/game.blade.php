@include('site.layouts.header')


<!--==============================
=            Investors           =
===============================-->
<style>
    .section {
    padding: 40px 0;
}
    .section-title {
    text-align: center;
    margin-bottom: 50px;
}
ul.social-links li a i {

color: #f5f4f4;
}
</style>
<section class="section investors">
	<div class="container">
		<div class="row">
      <!-- #region -->
			<div class="col-12" style="color: #fff;">
				<div class="section-title" style="background: url({{ asset('images/site') }}/2.jpg)
                 ">
					<h2 style="color: #fff;">شحن الالعاب بانواعها.</h2>
					<p style="color: #fff;">شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.. </p>
				</div>
			</div>

            @foreach ($games as $game)
			<div class="col-xl-3 col-lg-3 col-sm-3">
				<div class="block text-center">
					<!-- Investor Image -->
                    {{-- <a href="{{ route('game-singel' , $game->id ) }}"> --}}
                        <a href="game/{{ $game->id }}">
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="{{  asset('images/site') }}/{{  $game->picture  }}" alt="investor">
					</div>
					<!-- Company -->
					<h3>{{ $game->name }} </h3>
					<!--  -->
					{{-- <p> {{ $game->name }} </p> --}}
                    </a>
				</div>
			</div>
            @endforeach

		</div>
	</div>
</section>
{{-- <section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>حان الوقت لتغيير رأيك</h2>
				<p style="    margin-bottom: 10px;" >  والاستفادة من خدماتنا حمل تطبيق لايف تك وكن  بصدارة</p>
                <p style="    margin-bottom: 10px;"> او يمكنك طلب الخدمة عبرالتواصل معنا عبر منصاتنا</p>
                <ul class="list-inline social-links">
                        <li class="list-inline-item"><a href="{{  get_settings()->whatsapp_url }}"><i  class="ti-comments-smiley"></i></a></li>
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
 {{-- <section class="company-fun-facts section">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Some amenities for you to enjoy</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">-->
					<!-- Icon -->
					 <i class="ti-timer"></i>
					<h3>Flexible hours</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">-->
					<!-- Icon -->
					<i class="ti-filter"></i>
					<h3>Free Snacks & Drinks</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">-->
					<!-- Icon -->
					 <i class="ti-game"></i>
					<h3>Gaming</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="fun-fact">-->
					<!-- Icon -->
					<i class="ti-hummer"></i>
					<h3>4 Working Days</h3>
					<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec rutrum congue leo eget malesuada.</p>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!--====  End of Fun Facts  ====-->
















@include('site.layouts.footer')
