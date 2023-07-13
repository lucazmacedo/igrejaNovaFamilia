<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<!-- BOOTSTRAP CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

		<?php wp_head(); ?>
	</head>

	<body>
		<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<ul class="nav m-0">
						<li class="nav-item col-12">
							<a class="nav-link text-decoration-none text-black" href="/">Home</a>
						</li>
						<li class="nav-item col-12">
							<a class="nav-link text-decoration-none text-black" href="/quem-somos">A Bumax</a>
						</li>
						<li class="nav-item col-12">
							<a class="nav-link text-decoration-none text-black" href="/produtos-bumax">Produtos</a>
						</li>
						<li class="nav-item col-12">
							<a class="nav-link text-decoration-none text-black" href="/contato">Contato</a>
						</li>
						<li class="nav-item col-12">
							<a class="nav-link text-decoration-none text-black" href="/blog">Blog</a>
						</li>
						<li class="nav-item col-12">
							<a class="nav-link text-decoration-none text-black" href="#">Clube Bumax</a>
						</li>
					</ul>
			</div>
		</div>
		<header class="navbar" style="background-color: #ea5b0c; height: 75px">
			<div class="container">
				<a class="col-md-2 col-lg-2 me-0 px-3 fs-6" href="/">
					<img style="max-width: 120px;" class="d-flex justify-content-start" src="https://bumax.ind.br/wp-content/uploads/2017/04/logo_bumax_branca.png" alt="">
				</a>

				<div class="d-none d-md-block">
					<ul class="nav justify-content-end">
						<li class="nav-item">
							<a class="nav-link text-decoration-none text-white" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-decoration-none text-white" href="/quem-somos">A Bumax</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-decoration-none text-white" href="/produtos-bumax">Produtos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-decoration-none text-white" href="/contato">Contato</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-decoration-none text-white" href="/blog">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-decoration-none text-white" href="#">Clube Bumax</a>
						</li>
					</ul>
				</div>


				<button class="navbar-toggler d-md-none collapsed me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

		</header>

		<div id="artigos" class="">
