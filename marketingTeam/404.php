<?php get_header(); ?>

<main class="container pt-3" >
	<div class="w-100 pt-2 ">
		<!-- LOAD -->
		<script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
		<script src=" https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js "></script>
		<div id="loading" class="loading centralize">
			<lottie-player id="firstLottie" class="centralize loading m-auto" src="https://assets1.lottiefiles.com/packages/lf20_vzj1xd0x.json" background="transparent" speed="1" style="max-width: 350px;" loop autoplay>
			</lottie-player>

		</div>
		<p id="loading" class="loading text-center">Que pena, não encontramos a página</p>
		<a href="/" class="text-decoration-none text-center"><p id="loading" class="loading text-center">Volte para a página principal</p></a>
		<!-- END LOAD -->
	</div>
</main>

<?php get_footer();
