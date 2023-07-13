<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- BOOTSTRAP CSS -->
	<link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

	<style>
		.swiper {
			width: 100%;
			height: 100%;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.swiper-slide img {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.holder {
			display: flex;
			flex-direction: column;
			align-items: center;

			.get-it-on-github {
				margin-top: 24px;
				margin-bottom: 24px;
				font-family: 'Roboto';
				color: #55606E;
			}
		}

		.audio.green-audio-player {
			
			min-width: 300px;
			height: 56px;
			box-shadow: 0 4px 16px 0 rgba(0, 0, 0, .07);
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding-left: 24px;
			padding-right: 24px;
			border-radius: 4px;
			user-select: none;
			-webkit-user-select: none;
			background-color: #fff;

			.play-pause-btn {
				display: none;
				cursor: pointer;
			}

			.spinner {
				width: 18px;
				height: 18px;
				background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/355309/loading.png);
				background-size: cover;
				background-repeat: no-repeat;
				animation: spin 0.4s linear infinite;
			}

			.slider {
				flex-grow: 1;
				background-color: #D8D8D8;
				cursor: pointer;
				position: relative;

				.progress {
					background-color: #44BFA3;
					border-radius: inherit;
					position: absolute;
					pointer-events: none;

					.pin {
						height: 16px;
						width: 16px;
						border-radius: 8px;
						background-color: #44BFA3;
						position: absolute;
						pointer-events: all;
						box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.32);
					}
				}
			}

			.controls {
				font-family: 'Roboto', sans-serif;
				font-size: 16px;
				line-height: 18px;
				color: #55606E;
				display: flex;
				flex-grow: 1;
				justify-content: space-between;
				align-items: center;
				margin-left: 24px;
				margin-right: 24px;

				.slider {
					margin-left: 16px;
					margin-right: 16px;
					border-radius: 2px;
					height: 4px;

					.progress {
						width: 0;
						height: 100%;

						.pin {
							right: -8px;
							top: -6px;
						}
					}
				}

				span {
					cursor: default;
				}
			}

			.volume {
				position: relative;

				.volume-btn {
					cursor: pointer;

					&.open path {
						fill: #44BFA3;
					}
				}

				.volume-controls {
					width: 30px;
					height: 135px;
					background-color: rgba(0, 0, 0, 0.62);
					border-radius: 7px;
					position: absolute;
					left: -3px;
					bottom: 52px;
					flex-direction: column;
					align-items: center;
					display: flex;

					&.hidden {
						display: none;
					}

					.slider {
						margin-top: 12px;
						margin-bottom: 12px;
						width: 6px;
						border-radius: 3px;

						.progress {
							bottom: 0;
							height: 100%;
							width: 6px;

							.pin {
								left: -5px;
								top: -8px;
							}
						}
					}
				}
			}
		}

		@keyframes spin {
			from {
				transform: rotateZ(0);
			}

			to {
				transform: rotateZ(1turn);
			}
		}
	</style>

	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>

	<!--
	<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<?php //echo get_search_form(); 
			?>
			<div class="">
				<h6 class="text-uppercase fw-bold mt-4">Páginas</h6>
				<p class="m-0"><a href="/" class="fw-normal text-reset text-decoration-none">Página inicial</a></p>
				<p class="m-0"><a href="/blog/" class="fw-normal text-reset text-decoration-none">Blog</a></p>
				<p class="m-0"><a href="/noticias/" class="fw-normal text-reset text-decoration-none">Notícias</a></p>
				<p class="m-0"><a href="/quem-somos/" class="fw-normal text-reset text-decoration-none">Quem somos</a></p>
				<p class="m-0"><a href="/contato/" class="fw-normal text-reset text-decoration-none">Contato</a></p>
			</div>
		</div>
	</div>
	-->
	<header class="navbar navbar-expand-lg fixed-top navbar-stuck bg-body-tertiary">
		<div class="container"><a class="navbar-brand pe-sm-3" href="index.html"><span class="text-primary flex-shrink-0 me-2">
					<svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
						<path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
					</svg></span>Igreja Evangélica Nova Família</a>
			
			<div class="pb-2 mode-switch order-lg-2 m-auto">
				<svg style="margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
					<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
				</svg>
			</div>
			<div class="form-check form-switch mode-switch order-lg-2" data-bs-toggle="mode">
				<input class="form-check-input" type="checkbox" role="switch" id="themeSwitch">
			</div>
			<div class="pb-2 mode-switch order-lg-2 m-auto">
				<svg style="margin-left: 6px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
					<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
				</svg>
			</div>
			<!--
			<a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" aria-label="Menu"><i class=""></i>Menu</a>
	-->
			<nav class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
					<li class="nav-item"><a class="nav-link" href="components/typography.html">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="/cultos/">Cultos</a></li>
					<li class="nav-item"><a class="nav-link" href="/devocional/">Devocional</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div id="artigos" class="mt-3">