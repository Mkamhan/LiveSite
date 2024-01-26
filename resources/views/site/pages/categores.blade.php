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
ul.social-links li a i {

color: #f5f4f4;
}
.section {
        padding: 5px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .block {
        background-color: #02020208;
        padding-bottom: 13px;
        border-bottom-right-radius: 12px;
        border-bottom-left-radius: 12px;
    }

    ul.social-links li a i {

        color: #f5f4f4;
    }
</style>
<!--=====================================
=            Quotes Slider              =
======================================-->
{{-- <section class="section quotes pt-0">
	<div class="container">
		<div class="row">
			<div class="col-10 m-auto text-center"style="direction: ltr;">
				<div class="quote-slider">
					<div class="item mb-4"  style="color: #000000; background: url({{ asset('images/site') }}/3.jpg)">
						<!-- Quote -->
						<h3 style="color: #000000;  font-weight: bold;">شحن الالعاب </h3>
					<p style="color: #040303;  font-weight: bold; font-family: 'Cairo', sans-serif;"> يمكنك شحن كافة الالعاب وتزويد العابك بالعملات الافتراضبة </p>
						<!-- Company -->
						<cite class="ml-0"> الالعاب</cite>
					</div>
					<div class="item mb-4"style="color: #000000; background: url({{ asset('images/site') }}/2.jpg)">
						<!-- Quote -->
                        <h3 style="color: #000000;  font-weight: bold;"> شحن تطبيقات الشات</h3>
                        <p style="color: #040303;  font-weight: bold; font-family: 'Cairo', sans-serif;"> يمكنك شحن حسابك والدخول بالتحديات       </p>

						<!-- Company -->
						<cite class="ml-0">برامج الشات</cite>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!--====  End of Quotes Slider  ====-->
<section class="section investors" style="    background-color: #fff;">
	<div class="container">
		<div class="row">
      <!-- #region -->
			{{-- <div class="col-12" style="color: #fff;">
				<div class="section-title" style="background: url({{ asset('images/site') }}/2.jpg)
                 ">
					<h2 style="color: #fff;  font-weight: bold;">شحن الالعاب بانواعها.</h2>
					<p style="color: #fff;  font-weight: bold; font-family: 'Cairo', sans-serif;">شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.شحن الالعاب بانواعها.. </p>
				</div>
			</div> --}}
            <div class="col-12 m-auto text-center"style="direction: ltr;">
                <div class="quote-slider" style=" padding:10px;">
                    <div class="item mb-4"  style="  background-size:cover; color: #fff;  background-color: #202bbc;">
                        <!-- Quote -->
                        <h2 style="color: #fff;  font-weight: bold;">شحن الالعاب </h2>
                    <p style="color: #fff;  font-weight: bold; font-family: 'Cairo', sans-serif;"> يمكنك شحن كافة الالعاب وتزويد العابك بالعملات الافتراضبة </p>
                        <!-- Company -->
                        <cite class="ml-0">  حمل التطبيق  <a href="{{ get_social_network()->google_play_url }}">الان </a></cite>
                    </div>
                    <div class="item mb-4"style="color: #000000; background-color: #ffb005;">
                        <!-- Quote -->
                        <h2 style="color: #000;  font-weight: bold;"> شحن تطبيقات الشات</h2>
                        <p style="color: #000;  font-weight: bold; font-family: 'Cairo', sans-serif;"> يمكنك شحن حسابك والدخول بالتحديات       </p>

                        <!-- Company -->
                        <cite class="ml-0">  حمل التطبيق  <a href="{{ get_social_network()->google_play_url }}">الان </a></cite>


                    </div>

                </div>
            </div>

            @foreach ($categores as $category)
			<div class="col-xl-3 col-lg-3 col-sm-3">
				<div class="block text-center" >
					<!-- Investor Image -->
                    {{-- <a href="{{ route('game-singel' , $game->id ) }}"> --}}
                        <a href="{{route('category-singel', $category->id) }}">
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="{{  asset('images/site') }}/{{  $category->picture  }}" alt="investor">
					</div>
					<!-- Company -->
					<h3  style=" font-weight: bold;">{{ $category->name }} </h3>
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
