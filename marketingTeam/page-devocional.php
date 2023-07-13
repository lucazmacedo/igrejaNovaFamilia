<?php get_header(); ?>
<?php $acao = 'getDevocional';
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao; ?>
<?php require_once '../security/controller.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
<style>
	.blockquote {
		position: relative;
		color: var(--ar-blockquote-color);
		font-size: var(--ar-blockquote-font-size);
		padding-left: 8rem;
	}

	.blockquote::before {
		position: absolute;
		top: 0;
		left: 0;
		margin: -0.1875rem -0.1875rem 1rem -0.1875rem;
		color: #3666af;
		font-size: 6em;
		line-height: 1;
		padding-top: 1rem;
		padding-left: 1rem;
		font-family: "bootstrap-icons";
		content: '\F6B0';
	}

	@media only screen and (max-width: 600px) {
		.blockquote {
			position: relative;
			padding-left: 4rem;
		}

		.blockquote::before {
			position: absolute;
			top: 0;
			left: 0;
			margin: -0.1875rem -0.1875rem 1rem -0.1875rem;
			color: #3666af;
			font-size: 3em;
			line-height: 1;
			padding-top: 1rem;
			padding-left: 1rem;
			font-family: "bootstrap-icons";
			content: '\F6B0';
		}
	}
</style>
<section class="container py-5 my-md-2 my-lg-3 my-xl-4">
	<div class="row pt-xxl-2">
		<div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
			<?php foreach ($getDevocional as $indice => $devocional) { ?>
				<div class="container">
					<h2 class="h2 mb-lg-4 pt-3 pt-md-4 pt-xl-5"><?= $devocional->titulo; ?></h2>
					<p class="fs-lg pb-2 pb-lg-0 "><?= $devocional->palavra; ?></p>
					<div class="d-flex d-md-none d-lg-flex justify-content-between w-100 ">
						<div class="holder">
							<div class="audio green-audio-player">
								<div class="loading">
									<div class="spinner"></div>
								</div>
								<div class="play-pause-btn">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
										<path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon" id="playPause" />
									</svg>
								</div>

								<div class="controls">
									<span class="current-time">0:00</span>
									<div class="slider" data-direction="horizontal">
										<div class="progress">
											<div class="pin" id="progress-pin" data-method="rewind"></div>
										</div>
									</div>
									<span class="total-time">0:00</span>
								</div>

								<div class="volume">
									<div class="volume-btn">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<path fill="#566574" fill-rule="evenodd" d="M14.667 0v2.747c3.853 1.146 6.666 4.72 6.666 8.946 0 4.227-2.813 7.787-6.666 8.934v2.76C20 22.173 24 17.4 24 11.693 24 5.987 20 1.213 14.667 0zM18 11.693c0-2.36-1.333-4.386-3.333-5.373v10.707c2-.947 3.333-2.987 3.333-5.334zm-18-4v8h5.333L12 22.36V1.027L5.333 7.693H0z" id="speaker" />
										</svg>
									</div>
									<div class="volume-controls hidden">
										<div class="slider" data-direction="vertical">
											<div class="progress">
												<div class="pin" id="volume-pin" data-method="changeVolume"></div>
											</div>
										</div>
									</div>
								</div>

								<audio crossorigin>
									<source src="<?= $devocional->audio; ?>" type="audio/mpeg">
								</audio>
							</div>
						</div>
					</div>
				</div>
				<div class="container text-center py-5">
					<div class="card border-0 bg-body-tertiary mb-3">
						<div class="card-body text-start">
							<figure>
								<blockquote class="blockquote pe-md-5 py-3">
									<p class="h3"><?= $devocional->versiculo; ?></p>
								</blockquote>
								<figcaption class="blockquote-footer fs-5 pt-3 text-muted" style="padding-left: 8rem;"><?= $devocional->versiculoBiblia; ?></figcaption>
							</figure>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="col-lg-3 offset-xl-1 pt-4 pt-lg-0 bg-body-tertiary h-100">

		</div>

	</div>
</section>
<section class="container pt-2 pt-sm-3 pb-5 mb-md-3 mb-lg-4 mb-xl-5">
	<div class="d-flex align-items-center pb-3 mb-3 mb-lg-4">
		<h2 class="h1 mb-0 me-4">Assista aos cultos</h2>
	</div>
	<div class="d-flex">
		<div class="col-6 col-md-3 px-2">
			<article>
				<div class="">
					<img class="rounded-5 img-fluid" src="http://localhost/Lucas/wordpress/wp-content/uploads/2023/07/church.png" alt="Post image">
					<h3 class="h4 mt-4 mb-0">
						<a class="text-decoration-none text-muted" href="#">How to look for inspiration for new goals in life and remember to give yourself a break?</a>
					</h3>
				</div>
			</article>
		</div>
		<div class="col-6 col-md-3 px-2">
			<article>
				<div class="">
					<img class="rounded-5 img-fluid" src="http://localhost/Lucas/wordpress/wp-content/uploads/2023/07/church.png" alt="Post image">
					<h3 class="h4 mt-4 mb-0">
						<a class="text-decoration-none text-muted" href="#">How to look for inspiration for new goals in life and remember to give yourself a break?</a>
					</h3>
				</div>
			</article>
		</div>
		<div class="col-6 col-md-3 px-2">
			<article>
				<div class="position-relative">
					<img class="rounded-5 img-fluid" src="http://localhost/Lucas/wordpress/wp-content/uploads/2023/07/church.png" alt="Post image">
					<h3 class="h4 mt-4 mb-0">
						<a class="text-decoration-none text-muted" href="#">How to look for inspiration for new goals in life and remember to give yourself a break?</a>
					</h3>
				</div>
			</article>
		</div>
		<div class="col-6 col-md-3 px-2">
			<article>
				<div class="position-relative">
					<img class="rounded-5 img-fluid" src="http://localhost/Lucas/wordpress/wp-content/uploads/2023/07/church.png" alt="Post image">
					<h3 class="h4 mt-4 mb-0">
						<a class="text-decoration-none text-muted" href="#">How to look for inspiration for new goals in life and remember to give yourself a break?</a>
					</h3>
				</div>
			</article>
		</div>
	</div>
</section>
<?php get_footer();
