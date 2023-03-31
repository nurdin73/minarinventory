<!-- Google font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
{{-- COMPONENT CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css') }}">
{{-- INCLUDES ADDONS STYLESHEET --}}
@stack('addons-style')
{{-- BOOTSTRAP CSS --}}
<link rel="stylesheet" type="text/css" href="{{ assetVersion('assets/css/bootstrap.css') }}">
{{-- APP CSS --}}
<link rel="stylesheet" type="text/css" href="{{ assetVersion('assets/css/style.css') }}">
<link id="color" rel="stylesheet" href="{{ assetVersion('assets/css/color-3.css') }}" media="screen">
    <!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{ assetVersion('assets/css/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ assetVersion('assets/js/sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ assetVersion('assets/css/animate.css') }}">
{{-- LIVEWIRE --}}
@livewireStyles
{{-- CUSTOM CSS --}}
<link rel="stylesheet" type="text/css" href="{{ assetVersion('css/custom.css') }}">
{{-- INCLUDES CUSTOMS STYLESHEET --}}
@stack('custom-style')
<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
