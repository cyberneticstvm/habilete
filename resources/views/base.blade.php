<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Demo Law Firm | Porto - Multipurpose Website Template</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ public_path().'/img/favicon.ico' }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ public_path().'/img/apple-touch-icon.png' }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900%7CPoppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ public_path().'/vendor/bootstrap/css/bootstrap.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/vendor/fontawesome-free/css/all.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/vendor/animate/animate.compat.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/vendor/simple-line-icons/css/simple-line-icons.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/vendor/owl.carousel/assets/owl.carousel.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/vendor/owl.carousel/assets/owl.theme.default.min.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/vendor/magnific-popup/magnific-popup.min.css' }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ public_path().'/css/theme.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/css/theme-elements.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/css/theme-blog.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/css/theme-shop.css' }}">

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="{{ public_path().'/vendor/rs-plugin/css/settings.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/vendor/rs-plugin/css/layers.css' }}">
		<link rel="stylesheet" href="{{ public_path().'/vendor/rs-plugin/css/navigation.css' }}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{ public_path().'/css/demos/demo-law-firm.css' }}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{ public_path().'/css/skins/skin-law-firm.css' }}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ public_path().'/css/custom.css' }}">

		<!-- Head Libs -->
		<script src="{{ public_path().'/vendor/modernizr/modernizr.min.js' }}"></script>

	</head>
	<body>
        @yield("content")
        <!-- Vendor -->
		<script src="{{ public_path().'/vendor/plugins/js/plugins.min.js' }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ public_path().'/js/theme.js' }}"></script>

        <!-- Revolution Slider Scripts -->
        <script src="{{ public_path().'/vendor/rs-plugin/js/jquery.themepunch.tools.min.js' }}"></script>
        <script src="{{ public_path().'/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js' }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ public_path().'/js/views/view.contact.js' }}"></script>

        <!-- Demo -->
        <script src="{{ public_path().'/js/demos/demo-law-firm.js' }}"></script>

        <!-- Theme Custom -->
        <script src="{{ public_path().'/js/custom.js' }}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{ public_path().'/js/theme.init.js' }}"></script>
    </body>
</html>