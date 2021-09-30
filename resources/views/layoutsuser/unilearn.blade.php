<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('learn/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('learn/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('learn/css/bootstrap.css') }}">


	
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"/>
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('learn/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('learn/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('learn/css/owl.theme.default.min.css') }}">
	
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('learn/css/style.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('mdb/css/mdb.min.css') }}"> --}}
	<link rel="stylesheet" href="{{ asset('learn/css/wolf.css') }}">
	@yield('css')
	<!-- Modernizr JS -->
	<script src="{{ asset('learn/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


	 <!-- Bootstrap core CSS -->
	 {{-- <link href="{{ asset('school/front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}

	 <!-- Additional CSS Files -->
	 {{-- <link rel="stylesheet" href="{{ asset('school/front/css/fontawesome.css') }}"> --}}
	 <link rel="stylesheet" href="{{ asset('school/front/css/templatemo-grad-school.css') }}">
	 <link rel="stylesheet" href="{{ asset('school/front/css/owl.css') }}">
	 {{-- <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}"> --}}
	 {{-- <link rel="stylesheet" href="{{ asset('school/front/css/lightbox.css') }}"> --}}



	 {{-- <link rel="stylesheet" href="{{ asset('boot5/css/bootstrap.css') }}"> --}}
	 {{-- <link rel="stylesheet" href="{{ asset('boot5/css/bootstrap.min.css') }}"> --}}
	 {{-- <link rel="stylesheet" href="{{ asset('boot5/css/bootstrap.min.css') }}"> --}}
    <!-- Bootstrap CSS code30-->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('code30/css/style.css') }}"> --}}

    <!--===============================================contact page links================================================-->
    {{-- <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('code30/fonts/font-awesome-4.7.0/css/font-awesome.css') }}"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('code30/vendor/animate/animate.css') }}"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('code30/vendor/css-hamburgers/hamburgers.min.css') }}"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('code30/vendor/select2/select2.min.css') }}"> --}}
    <!--===============================================================================================-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('code30/css/util.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('code30/css/main.css') }}"> --}}
    <!-- end Bootstrap CSS code30-->
	
	</head>
	<body>
		<div class="fh5co-loader"></div>

		<div id="page">
            {{-- NAVE BARRE --}}
            @include('layoutsuser.homeNaveBare.navebare')
            {{-- ./NAVE BARE --}}
	@yield('content')
{{-- end nav bar unilearn form --}}
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 fh5co-widget">
						<h4>About Our University</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6 ">
						<h4>Learning</h4>
						<ul class="fh5co-footer-links">
							<li><a href="/home">Home</a></li>
							<li><a href="#">subjects</a></li>
							<li><a href="#">Doctor</a></li>
							<li><a href="/allcourses">Course</a></li>
							<li><a href="/contact">contact us</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-4 col-xs-6 ">
						<div id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13817.350319508076!2d31.2086854!3d30.0271716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd9781bf40115c5d!2z2KzYp9mF2LnYqSDYp9mE2YLYp9mH2LHYqQ!5e0!3m2!1sar!2seg!4v1627308312349!5m2!1sar!2seg" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
				    </div>
				</div>

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2017 wolf. All Rights Reserved.</small>
							<small class="block">Designed by <strong style="color:#EA9215">Eng Ahmed Ragab & Eng Mohamed Gamal</strong></small>
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>


			</div>


			</div>
		</footer>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>

		<!-- jQuery -->
		<script src="{{ asset('learn/js/jquery.min.js') }}"></script>
		<script src="{{ asset('learn/js/jquery-3.6.0.min') }}"></script>
		{{-- <script src="{{ asset('boot4/js/jquery-3.6.0.min') }}"></script> --}}
		{{-- <script src="{{ asset('school/front/vendor/jquery/jquery.min.js') }}"></script> --}}
		<!-- jQuery Easing -->
		<script src="{{ asset('learn/js/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('learn/js/bootstrap.min.js') }}"></script>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
		<!-- Waypoints -->
		<script src="{{ asset('learn/js/jquery.waypoints.min.js') }}"></script>
		<!-- Stellar Parallax -->
		<script src="{{ asset('learn/js/jquery.stellar.min.js') }}"></script>
		<!-- Carousel -->
		<script src="{{ asset('learn/js/owl.carousel.min.js') }}"></script>
		<!-- countTo -->
		<script src="{{ asset('learn/js/jquery.countTo.js') }}"></script>
		<!-- Magnific Popup -->
		<script src="{{ asset('learn/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('learn/js/magnific-popup-options.js') }}"></script>
		<!-- Main -->
		<script src="{{ asset('learn/js/main.js') }}"></script>



		{{-- boot4 --}}
		{{-- <script src="{{ asset('boot5/js/bootstrap.js') }}"></script> --}}
		{{-- <script src="{{ asset('boot5/js/bootstrap.min.js') }}"></script> --}}
		{{-- <script src="{{ asset('boot5/js/carousel.js') }}"></script> --}}




    {{-- <script src="{{ asset('school/front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('school/front/js/isotope.min.js') }}"></script> --}}
    <script src="{{ asset('school/front/js/owl-carousel.js') }}"></script>
    {{-- <script src="{{ asset('school/front/js/owl.carousel.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('school/front/js/lightbox.js') }}"></script> --}}
    {{-- <script src="{{ asset('school/front/js/tabs.js') }}"></script> --}}
    <script src="{{ asset('school/front/js/video.js') }}"></script>
    <script src="{{ asset('school/front/js/slick-slider.js') }}"></script>
    <script src="{{ asset('school/front/js/custom.js') }}"></script>
	{{-- <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script> --}}

	{{-- <script src="code30/vendor/jquery/jquery-3.2.1.min.js"></script> --}}
    <!--===============================================================================================-->
        {{-- <script src="code30/vendor/bootstrap/js/popper.js"></script> --}}
        {{-- <script src="/vendor/bootstrap/js/bootstrap.min.js"></script> --}}
    <!--===============================================================================================-->
        {{-- <script src="code30/vendor/select2/select2.min.js"></script> --}}
    <!--===============================================================================================-->
        {{-- <script src="code30/vendor/tilt/tilt.jquery.min.js"></script> --}}

		@yield('js')
		<script src="{{ asset('learn/js/wolf.js') }}"></script>
		</body>
	</html>



