<!DOCTYPE html>
<html lang="es">
<head>
<title>B2B</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Proyecto B2B Usuario ZOFRI">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="tools/styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="tools/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="tools/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="tools/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="tools/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="tools/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="tools/styles/responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="tools/images/phone.png" alt=""></div>+56 9 000 0000</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="tools/images/mail.png" alt=""></div><a href="mailto:contacto@empresa.com">contacto@empresa.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">Español<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">English</a></li>
											
											<li><a href="#">Chinase</a></li>
										</ul>
									</li>
									<li>
										<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">EUR Euro</a></li>
											<li><a href="#">CLP Peso Chileno</a></li>
											<li><a href="#">BOB Bolivianos</a></li>
											<li><a href="#">PY Guaranies</a></li>
											<li><a href="#">ARS Peso Argentino</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="tools/images/user.svg" alt=""></div>
								<div><a href="#">Registrar</a></div>
								<div><a href="#">Iniciar Sesión</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">B2B</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Buscar por producto...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">CATEGORIAS</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">Ver Todas</a></li>
													<li><a class="clc" href="#">Electronica</a></li>
													<li><a class="clc" href="#">Ropa</a></li>
													<li><a class="clc" href="#">Perfumes</a></li>
													<li><a class="clc" href="#">Hogar</a></li>
													<li><a class="clc" href="#">Juguetes</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="tools/images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="tools/images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Favoritos</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="tools/images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Carrito</a></div>
										<div class="cart_price">$85.000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">CATEGORIA</div>
								</div>

								<ul class="cat_menu">
									<li><a href="#">Computación <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="#">Juguetes<i class="fas fa-chevron-right"></i></a></li>
									<li class="hassubs">
										<a href="#">Ropa<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li><a href="#">Perfumes<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Hogar<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Electronica<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Consolas y Video Juegos<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Telefonía<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Accesorios<i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Ayuda<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Servicio al Cliente<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Preguntas Frecuentes<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog.html">Franquicias<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Transporte<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="#">Proveedores<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">Vender<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">Ofertas<i class="fas fa-chevron-down"></i></a></li>

								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu Phone -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Lenguaje<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Portugues<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Chinase<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>



						
								<li class="page_menu_item has-children">
									<a href="#">Divisa<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">CLP Peso Chileno<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">BOB Bolivianos<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">PY Guaranies<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">ARS Peso Argentino<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Proveedores<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Vender<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Ofertas<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">Ayuda<i class="fa fa-angle-down"></i></a></li>							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="tools/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="tools/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	