<?php get_header(); $acao = 'acao'; $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao; ?>
<?php require_once '../../security/contatoSite.php'; ?>
<style>
	.image {
		background-image: url("https://bumax.ind.br/wp-content/uploads/2013/01/construcao-civil.jpg");
		background-color: #cccccc; 
		height: 450px;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>

<div class="container mt-3">
	<div class="pb-0 card-grid container">
		<div class="mt-2" >
			<section class="pt-5">
				<h1 style="text-align: center;">Entre em contato</h1>
				<h5 style="text-align: center;">Preencha os campos abaixo para nos enviar uma mensagem,<br>
					tirar suas dúvidas e encontrar o representante mais próximo de você!</h5>
				<div class="d-flex mt-5">
					<div class="col-md-6 pe-5">
						<?php if( isset($acao) && $acao == 'contato'  ) { ?>
						<div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert" id="fecharAlert">
							<p class="pb-0 mb-0"><strong>Solicitação enviada com sucesso!</strong> Em breve entraremos em contato com você.</p>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php } ?>
						<form method="post" action="/wordpress/contato?acao=contato" class=" mb-5">
							<div class="mb-2">
								<input type="text" name="nome" class="form-control" id="input1" placeholder="Seu nome">
							</div>
							<div class="mb-2">
								<input type="email" name="email" class="form-control" id="input2" placeholder="name@example.com">
							</div>
							<div class="mb-2">
								<input type="text" name="telefone" class="form-control" id="input3" placeholder="Telefone">
							</div>
							<select class="form-select mb-2" name="interesse" aria-label="Default select example">
								<option selected value="Interesse">Informe seu interesse</option>
								<option value="Comercial">Comercial</option>
								<option value="Financeiro">Financeiro</option>
								<option value="Tecnico">Técnico</option>
							</select>
							<div class="mb-2">
								<textarea class="form-control" name="mensagem" id="textarea1" rows="3" placeholder="Mensagem"></textarea>
							</div>
							<div class="d-flex flex-row-reverse">
								<button class="btn btn-primary w-50" type="submit">Enviar</button>
							</div>
						</form>
					</div>

					<div class="col-md-6">
						<div class="border-bottom py-4 ps-2">
							<div class="">
								<h5>(47) 3467.4438</h5>
								<h5 style="text-decoration: none;">(47) 9.9761-0124</h5>
							</div>
						</div>

						<div class="border-bottom py-4 ps-2">
							<div id="text-block-8" class="mk-text-block  jupiter-donut- text-center-on-xsmall">
								<h5>contato@bumax.ind.br</h5>
							</div>
						</div>
						
						<div class="border-bottom py-4 ps-2">
							<div >
								<h5>Rua&nbsp;Dona Francisca, 3525 – Saguaçu<br>CEP 89.221-009 – Joinville (SC)</h5>
							</div>
						</div>
					</div>
				</div>
			</section>		
		</div>
	</div>
</div>

<?php get_footer();
