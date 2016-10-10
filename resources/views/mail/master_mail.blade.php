<!DOCTYPE html>
<html lang="en">
<head>
	<title>NIPSS - Chat</title>

	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your,keywords">
	<meta name="description" content="Short explanation about this website">
	<!-- END META -->

	<!-- BEGIN STYLESHEETS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css' />
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.css?1422792965') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/materialadmin.css?1425466319') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css?1422529194') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/material-design-iconic-font.min.css?1421434286') }}" />
	<!--        <link rel="stylesheet" href="css/reset.css">-->

	<link rel="stylesheet prefetch" href="{{ asset('asset/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<style>
		html,
		body {
			height: 100%!important;
			width: 100%!important;
		}
		
		.profile-info small {
			color: darkgreen!important;
			font-weight: bold;
			opacity: 1!important;
		}
		
		.active .gui-icon {
			background-color: darkgreen!important;
			color: white!important;
		}
		
		.active .gui-icon i {
			color: white!important;
			background-color: darkgreen!important;
		}
		
		.gui-controls li.active > a .title {
			color: darkgreen!important;
		}
		
		a .title:hover {
			color: darkgreen!important;
		}
		
		.breadcrumb .active {
			color: black;
		}
		
		.text-primary {
			color: darkgreen!important;
		}
		
		i:hover {
			color: darkgreen!important;
		}
		
		@media(min-width: 1200px) .menubar-pin #base {
			padding-left: 0px!important;
		}
		
		@media only screen and (min-width: 1025px) {
			#a1 {
				display: none;
			}
		}
		
		@media only screen and (max-width: 1024px) {
			#a2 {
				display: none;
			}
		}

	</style>
</head>

<body class="menubar-hoverable header-fixed menubar-pin">
	<!-- BEGIN HEADER-->
	@include('mail.header')
	<!-- END HEADER-->

	<!-- BEGIN BASE-->
	<div id="base" style="padding-left: 40px;">
		
		<!-- BEGIN CONTENT-->
		<div id="content">
			@yield('content')
		</div>
		<!--end #content-->
	</div>
	<!-- END BASE -->

	<!-- BEGIN JAVASCRIPT -->
	<script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/spin.min.js') }}"></script>
	<script src="{{ asset('assets/js//jquery.autosize.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.nanoscroller.min.js') }}"></script>
	<script src="{{ asset('assets/js/App.js') }}"></script>
	<script src="{{ asset('assets/js/AppNavigation.js') }}"></script>
	<script src="{{ asset('assets/js/AppOffcanvas.js') }}"></script>
	<script src="{{ asset('assets/js/AppCard.js') }}"></script>
	<script src="{{ asset('assets/js/AppForm.js') }}"></script>
	<script src="{{ asset('assets/js/AppNavSearch.js') }}"></script>
	<script src="{{ asset('assets/js/AppVendor.js') }}"></script>
	<script src="{{ asset('assets/js/Demo.js') }}"></script>
    
    <script src="{{ asset('assets/js/handlebars.min.js') }}"></script>
    <script src="{{ asset('assets/js/list.min.js') }}"></script>

	<script src="{{ asset('assets/js/index.js') }}"></script>
	<!-- END JAVASCRIPT -->

</body>

</html>

