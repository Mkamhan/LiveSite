
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title> @yield('pageTitels')</title>

		<!-- Site favicon -->
		{{-- <link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{ asset('back') }}/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{ asset('back') }}/vendors/images/favicon-32x32.png"
		/> --}}
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{ asset('images/site') }}/{{ get_settings()->site_favicon }}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('back') }}/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('back') }}/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('back') }}/vendors/styles/style.css" />
        <link rel="stylesheet" href="{{ asset('ijabo') }}/ijaboCropTool.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/toastr/toastr.min.css" />
        <!--  <link rel="stylesheet" type="text/css" href="{{ asset('back') }}/toastr/toastr.min.js" /> -->
        @livewireStyles
        @stack('stylesheets')

	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">

					<a href="{{ route('admin.login') }}">
                        <img src="{{ asset('images/site') }}/{{ get_settings()->site_logo }}" alt="" class="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						@if (!Route::is('admin.*'))
                        <li><a href="register.html">Register</a></li>
                        @endif

					</ul>
				</div>
			</div>
		</div>
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="{{ asset('back') }}/vendors/images/login-page-img.png" alt="" />
					</div>
                    @yield('contect')

				</div>
			</div>
		</div>

		<!-- js -->
		<script src="{{ asset('back') }}/vendors/scripts/core.js"></script>
		<script src="{{ asset('back') }}/vendors/scripts/script.min.js"></script>
		<script src="{{ asset('back') }}/vendors/scripts/process.js"></script>
		<script src="{{ asset('back') }}/vendors/scripts/layout-settings.js"></script>
        <script src="{{ asset('back') }}/toastr/toastr.min.js"></script>
        <script src="{{ asset('ijabo') }}/ijaboCropTool.min.js"></script>
       <!--   <script src="{{ asset('ijabo') }}/jquery-1.7.1.min.js"></script>-->

        <script>
            if(navigator.userAgent.indexOf('Firefox') !=-1){
                history.pushState(null,null,document.URL);
                window.addEventListener('popstate',function(){
                    history.pushState(null,null,document.URL);
                });
            }
            if(navigator.userAgent.indexOf('Edge') !=-1){
                history.pushState(null,null,document.URL);
                window.addEventListener('popstate',function(){
                    history.pushState(null,null,document.URL);
                });
            }
            window.addEventListener('showToastr',function(event){


                if(event.detail.type==='info' ){ toastr.info(event.detail.message); }
                else if(event.detail.type === 'success'){toastr.success(event.detail.message); }
                else if(event.detail.type === 'error'){toastr.error(event.detail.message); }
                else if(event.detail.type === 'warning'){toastr.warning(event.detail.message); }
                else {return false; }

            });

        </script>


         @livewireScripts
		@stack('scripts')


	</body>
</html>
