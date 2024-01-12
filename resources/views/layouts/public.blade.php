
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>{{config("app,name")}}</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Kame house Wings, El secreto está en el sabor" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Bootstrap-Core-CSS -->
	<link href="{{asset('css/css_slider.css')}}" type="text/css" rel="stylesheet" media="all">
	<!-- css slider -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- header -->
	<header id="home">
		<!-- top-bar -->
		<div class="top-bar py-2 border-bottom">
			<div class="container">
				<div class="row middle-flex">
					<div class="col-xl-7 col-md-5 top-social-agile mb-md-0 mb-1 text-lg-left text-center">
						<div class="row">
							<div class="col-xl-6 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-map-marker mr-2"></span>55A #640 x 62A y 62B Las Palmas, Flamboyanes.
								</p>
							</div>
							<div class="col-xl-3 col-6 header-top_w3layouts">
								<p class="text-da">
									<span class="fa fa-whatsapp mr-2"></span>99935393167
								</p>
							</div>
							<div class="col-xl-3"></div>
						</div>
					</div>
					<div class="col-xl-5 col-md-7 top-social-agile text-md-right text-center pr-sm-0 mt-md-0 mt-2">
						<div class="row middle-flex">
							{{-- <div class="col-lg-5 col-4 top-w3layouts p-md-0 text-right">
								<!-- login -->
								<a href="login.html" class="btn login-button-2 text-uppercase text-wh">
									<span class="fa fa-sign-in mr-2"></span>Login</a>
								<!-- //login -->
							</div> --}}
							<div class="col-lg-7 col-8 social-grid-w3">
								<!-- social icons -->
								<ul class="top-right-info">
									<li>
										<p>Síguenos:</p>
									</li>
									<li class="facebook-w3">
										<a href="https://www.facebook.com/KameHouseWings" target="_BLANK">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="twitter-w3">
										<a href="https://www.instagram.com/kamehousewings" target="_BLANK">
											<span class="fa fa-instagram"></span>
										</a>
									</li>
								</ul>
								<!-- //social icons -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
	<!-- navigation -->
	<div class="main-top py-1">
		<div class="container">
			<div class="nav-content">
				<!-- logo -->
				<h1>
					<a id="logo" class="logo" href="{{url('/')}}">
						<img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"><span></span>KHW
					</a>
				</h1>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_web-dealingsls">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
							<li><a href="{{url('/')}}">nicio</a></li>
							<li><a href="#aboutus">Nosotros</a></li>
                            <li><a href="#services">servicios</a></li>
							<li><a href="menu.html">Menu</a></li>
							<li><a href="contact.html">Contáctanos</a></li>
						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header 2 -->
@yield('content')
	<!-- footer -->
	<footer class="py-5">
		<div class="container py-xl-4">
			<div class="row footer-top">
				<div class="col-lg-4 footer-grid_section_1its footer-text">
					<!-- logo -->
					<h2>
						<a class="logo text-wh" href="{{url('/')}}">
							<img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"><span></span> KHW
						</a>
					</h2>
					<!-- //logo -->
					<p class="mt-lg-4 mt-3 mb-lg-5 mb-4">En Kame House Wings, ofrecemos una experiencia a tu paladar, basada en la calidad de los alimentos y el sabor de nuestro producto final ¡Que esperas para probarlos!</p>
					<!-- social icons -->
					<ul class="top-right-info">
						<li>
							<p>Síguenos:</p>
						</li>
						<li class="facebook-w3">
							<a href="https://www.facebook.com/KameHouseWings" target="_BLANK">
								<span class="fa fa-facebook-f"></span>
							</a>
						</li>
						<li class="twitter-w3">
							<a href="https://www.instagram.com/kamehousewings" target="_BLANK">
								<span class="fa fa-instagram"></span>
							</a>
						</li>
					</ul>
					<!-- //social icons -->
				</div>
				<div class="col-lg-4 footer-grid_section_1its my-lg-0 my-sm-4 my-4">
					<div class="footer-title">
						<h3>Contáctanos</h3>
					</div>
					<div class="footer-text mt-4">
						<p>Dirección : C. 55A #660 x 62A y 62B Las Palmas, Flamboyanes</p>
						<p class="my-2">Whatsapp : 9993533192</p>
						<p>Email : <a href="mailto:kamehousewings@gmail.com">kamehousewings@gmail.com</a></p>
					</div>
					<div class="footer-title mt-4 pt-md-2">
						<h3>Métodos de pago aceptados</h3>
					</div>
					<ul class="list-unstyled payment-links mt-4">
						<li>
							<a href="login.html"><img src="images/pay2.png" alt=""></a>
						</li>
						<li>
							<a href="login.html"><img src="images/pay5.png" alt=""></a>
						</li>
						<li>
							<a href="login.html"><img src="images/pay1.png" alt=""></a>
						</li>
						<li>
							<a href="login.html"><img src="images/pay4.png" alt=""></a>
						</li>
					</ul>
				</div>
				<div class="col-lg-4 footer-grid_section_1its">
					<div class="footer-title">
						<h3>Mayores Informes</h3>
					</div>
					<div class="info-form-right mt-4 p-0">
						<form action="#" method="post">
							<div class="row">
								<div class="col-lg-6 form-group mb-2 pr-lg-1">
									<input type="text" class="form-control" name="Name" placeholder="Nombre" required="">
								</div>
								<div class="col-lg-6 form-group mb-2 pl-lg-1">
									<input type="text" class="form-control" name="Phone" placeholder="Teléfono"
										required="">
								</div>
							</div>
							<div class="form-group mb-2">
								<input type="email" class="form-control" name="Email" placeholder="Email" required="">
							</div>
							<div class="form-group mb-2">
								<textarea name="Comment" class="form-control" placeholder="Comentarios"
									required=""></textarea>
							</div>
							<button type="submit" class="btn submit-contact ml-auto">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2024 Kame House Wings. Todos los derechos reservados | Desarrollado por
			<a href="#"> Kubo79.</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-level-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>

</html>
