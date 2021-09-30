<!-- Title -->
<title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />

<!-- Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
@yield('css')

{{-- argon files  css --}}


         <!-- Favicon -->
         <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
         <!-- Icons -->
         <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
         <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
         <!-- Argon CSS -->
         {{-- <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet"> --}}
 
 
         <!-- Favicon -->
         <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">
 
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
 
         <!-- Icons -->
         <link href="/assets/vendor/nucleo/css/nucleo.min.css" rel="stylesheet">
         <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
 
         <!-- Argon CSS -->
         <link type="text/css" href="/assets/css/argon.min.css" rel="stylesheet">
 
         <link rel="stylesheet" type="text/css" href="{{ asset('code30/css/admin_custom.css') }}">
         <link rel="stylesheet" type="text/css" href="{{ asset('code30/css/wolfadmin.css') }}">

{{-- end argon file css  --}}
<!--- Style css -->
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
<!--- Style css -->
@if (App::getLocale() == 'en')
    <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
@endif
