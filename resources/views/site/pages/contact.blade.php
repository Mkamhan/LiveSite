@include('site.layouts.header')

<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h1>تواصل معنا</h1>
				<!-- Page Description -->
				<p> خدمة على مدار الساعة نستقبل كل اتستفساراتكم  .</p>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--=====================================
=            Address and Map            =
======================================-->
<section class="address">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 align-self-center">
				<div class="block">
					<div class="address-block text-center mb-5">
						<div class="icon">
							<i class="ti-mobile"></i>
						</div>
						<div class="details">
							<h3>+967 772377668</h3>
							<h3>+967 733562978</h3>
              <h3>+967 714018858</h3>
						</div>
					</div>
					<div class="address-block text-center">
						<div class="icon">
							<i class="ti-map-alt"></i>
						</div>
						<div class="details">
							<h3>اليمن - إب </h3>
							<h3>شارع تعز - جوار مخبز البركة</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 mt-5 mt-lg-0">
				<div class="google-map">
					<!-- Google Map -->
					<div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Address and Map  ====-->
<section class="contact-form section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-5 text-center">مراسلتنا على الايميل</h2>
			</div>
			<div class="col-12">
				<form action="">
					<div class="row">
						<!-- Name -->
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="text" placeholder="الاسم" required>
						</div>
						<!-- Email -->
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="email" placeholder="الايميل الخاص بك" required>
						</div>
						<!-- subject -->
						<div class="col-md-12 mb-2">
							<input class="form-control main" type="text" placeholder="الموضوع" required>
						</div>
						<!-- Message -->
						<div class="col-md-12 mb-2">
							<textarea class="form-control main" name="message" rows="10" placeholder="رسالتك"></textarea>
						</div>
						<!-- Submit Button -->
						<div class="col-12 text-right">
							<button class="btn btn-main-md">ارسال</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->
@include('site.layouts.footer')
