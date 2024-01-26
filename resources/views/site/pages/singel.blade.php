@include('site.layouts.header')



<section class="section investors">
    <div class="container">
        <div class="row"style="background-image: url({{ asset('/images/site/product') }}/60.png;)">

            {{-- @foreach ($sin as $cat)
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="block text-center">
                        <!-- Investor Image -->
                        <div class="image shadow hover-zoom">
                            <img class="img-fluid" src="{{ asset('/images/site/product') }}/{{ $cat->photo }}"
                                alt="investor">
                            <span>${{ $cat->price }}</span> / <span>ريال يمني{{ $cat->price * 512 }}</span>
                        </div>
                        <h3> {{ $cat->title }}</h3>
                        <!--  -->
                        <p> {{ $cat->summary }} </p>
                    </div>
                </div>
            @endforeach --}}
            @foreach ($products as $product)
            <div class="col-xl-2 col-lg-5 col-sm-5"
            style="background-image: url({{ asset('/images/site/product') }}/{{ $product->photo }});background-size: 100%;     border-radius: 16px;     margin-right: 13px;     background-position: center;
                background-attachment: fixed;
            }">
            {{-- <div class="featured_slider_item"> --}}
                {{-- <div class="border_active"></div> --}}
                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <a href="#"
                    class="btn-block"
                    data-toggle="modal"
                    data-target="#Medium-modal{{ $product->id }}"
                    type="button">
                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('/images/site/product') }}/{{ $product->photo }}" alt=""></div></a>
                    <div class="product_content">
                        <div class="product_price discount" style=" margin-top: 30px  ">
                        <span style="background-color: #6a707b;
                            padding: 1px;
                            border-radius: 20px;
                            color: #fff;
                            padding-right: 25px;
                            padding-left: 25px;
                            text-align: center;
                            font-size: 15px;
                            margin-left: 1px;
                            font-weight: bold;
                        "> {{ get_price_RY($product->price) }}  ريال          -       {{ $product->price }}$</span>
                    </div>

                        <div class="product_name">  <div>
                            <a href="#"
                            class="btn-block"
                            data-toggle="modal"
                            data-target="#Medium-modal{{ $product->id }}"
                            type="button"  style="font-weight: bold;">{{ $product->title }}</a></div></div>
                        {{-- <div class="product_extras">
                            <div class="product_color">
                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                <input type="radio" name="product_color" style="background:#000000">
                                <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                        </div> --}}
                    </div>
                    {{-- <div class="product_fav"><i class="fas fa-heart"></i></div> --}}
                    <ul class="product_marks" style="display: block; top: 8px;
                    left: 3px;">
                    @if($product->discount >0)
                    <li class="product_mark product_discount" style="display: inline-block;
                    visibility: visible;
                    opacity: 1; direction: ltr;">%{{ $product->discount  }} -</li>
                    @endif
                @if ($product->condition=="new")
                <li class="product_mark product_new" style="    display: inline-block;
                background: #0e8ce4;
                visibility: visible;
                opacity: 1;
            ">new</li>
                @endif


                    </ul>
                </div>
            {{-- </div> --}}
            </div>
            <div
                class="modal fade"
                id="Medium-modal{{ $product->id }}"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myLargeModalLabel"
                aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                {{ $product->title }}
                            </h4>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-hidden="true"
                            style="    display: contents;">
                                ×
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                {{ $product->title }}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            @foreach ($products as $product)
            <div class="col-xl-2 col-lg-5 col-sm-5">
            {{-- <div class="featured_slider_item"> --}}
                {{-- <div class="border_active"></div> --}}
                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <a href="#"
                    class="btn-block"
                    data-toggle="modal"
                    data-target="#Medium-modal{{ $product->id }}"
                    type="button">
                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('/images/site/product') }}/{{ $product->photo }}" alt=""></div></a>
                    <div class="product_content">
                        <div class="product_price discount" style=" margin-top: 30px  ">
                        <span style="background-color: #6a707b;
                            padding: 1px;
                            border-radius: 20px;
                            color: #fff;
                            padding-right: 25px;
                            padding-left: 25px;
                            text-align: center;
                            font-size: 15px;
                            margin-left: 1px;
                            font-weight: bold;
                        "> {{ get_price_RY($product->price) }}  ريال          -       {{ $product->price }}$</span>
                    </div>

                        <div class="product_name">  <div>
                            <a href="#"
                            class="btn-block"
                            data-toggle="modal"
                            data-target="#Medium-modal{{ $product->id }}"
                            type="button"  style="font-weight: bold;">{{ $product->title }}</a></div></div>
                        {{-- <div class="product_extras">
                            <div class="product_color">
                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                <input type="radio" name="product_color" style="background:#000000">
                                <input type="radio" name="product_color" style="background:#999999">
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                        </div> --}}
                    </div>
                    {{-- <div class="product_fav"><i class="fas fa-heart"></i></div> --}}
                    <ul class="product_marks" style="display: block; top: 8px;
                    left: 3px;">
                    @if($product->discount >0)
                    <li class="product_mark product_discount" style="display: inline-block;
                    visibility: visible;
                    opacity: 1; direction: ltr;">%{{ $product->discount  }} -</li>
                    @endif
                @if ($product->condition=="new")
                <li class="product_mark product_new" style="    display: inline-block;
                background: #0e8ce4;
                visibility: visible;
                opacity: 1;
            ">new</li>
                @endif


                    </ul>
                </div>
            {{-- </div> --}}
            </div>
            <div
                class="modal fade"
                id="Medium-modal{{ $product->id }}"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myLargeModalLabel"
                aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                {{ $product->title }}
                            </h4>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-hidden="true"
                            style="    display: contents;">
                                ×
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                {{ $product->title }}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach

        </div>
    </div>

</section>

	{{-- <!-- Medium modal -->
    @foreach ($products as $product)
    <div class="col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">
            <h5 class="h4">Medium modal</h5>
            <a
                href="#"
                class="btn-block"
                data-toggle="modal"
                data-target="#Medium-modal"
                type="button"
            >
                <img src="{{ asset('/images/site/product') }}/{{ $product->photo }}" alt="modal" />
            </a>
            <div
                class="modal fade"
                id="Medium-modal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myLargeModalLabel"
                aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                Large modal
                            </h4>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-hidden="true"
                            >
                                ×
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                {{ $product->title }}
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach --}}

@include('site.layouts.footer')

{{--
<div class="mobile-menu-overlay"></div> --}}

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Modals</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											UI Modals
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<!-- Large modal -->

						<!-- Medium modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Medium modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#Medium-modal"
									type="button"
								>
									<img src="vendors/images/modal-img2.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="Medium-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Large modal
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="modal-body">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore eu
													fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</p>
											</div>
											<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
												>
													Close
												</button>
												<button type="button" class="btn btn-primary">
													Save changes
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>
