<?php get_header();  ?>
<?php require_once '../security/controller.php'; ?>

<main class="container mt-3" >
	<div class="d-flex justify-content-center align-items-center row mt-3">

		<div class="col-md-6">
			<!-- LOAD -->
			<script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
			<script src=" https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js "></script>
			<div id="loading" class="loading centralize">
				<lottie-player id="firstLottie" class="centralize loading m-auto" src="https://assets8.lottiefiles.com/packages/lf20_u25cckyh.json" background="transparent" speed="1" style="max-width: 350px;" loop autoplay>
				</lottie-player>

			</div>
			<!-- END LOAD -->
		</div>
		<div class="col-md-6 w-50 mt-3">
			<h1 style="text-align: center;">Entre em contato</h1>
			<h5 style="text-align: center;">Preencha os campos abaixo para nos enviar uma mensagem,<br>
				tirar suas dúvidas ou fazer uma solicitação!</h5>
			<?php if( isset($acao) && $acao == 'contato'  ) { ?>
			<div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert" >
				<p class="pb-0 mb-0"><strong>Solicitação enviada com sucesso!</strong> Em breve entraremos em contato com você.</p>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php } ?>
			<form method="post" action="/contato?acao=contato" class=" mb-5">
				<div class="mb-2">
					<input type="text" name="nome" class="form-control" id="input1" placeholder="Seu nome">
				</div>
				<div class="mb-2">
					<input type="email" name="email" class="form-control" id="input2" placeholder="name@example.com">
				</div>
				<div class="mb-2">
					<input type="text" name="telefone" class="form-control" id="input3" placeholder="Telefone">
				</div>

				<div class="mb-2">
					<textarea class="form-control" name="mensagem" id="textarea1" rows="3" placeholder="Mensagem"></textarea>
				</div>
				<div class="d-flex flex-row-reverse">
					<button class="btn btn-primary w-50" type="submit">Enviar</button>
				</div>
			</form>
		</div>
	</div>
</main>

<?php get_footer(); ?>
