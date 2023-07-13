<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MarketingTeam
 */

get_header();
?>

<main class="container mt-3" >
	<section class="pb-0 card-grid">

		<!-- Posts principais --> 
		<div class="row flex-nowrap">
			<?php query_posts( array( 'category__and' => array(1), 'posts_per_page' => 1, 'orderby' => 'title', 'order' => 'DESC' ) ); ?>
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="card text-bg-dark col-lg-7 border rounded-3 mb-2 me-2 p-0">
						<?php the_post_thumbnail( 'full', array( 'class' => 'card-img img-fluid p-0' ) ); ?>
						<a href="<?php the_permalink() ?>" class="card-img-overlay d-flex align-items-end" style="text-decoration: none;">
							<h3 class="card-title text-white"><?php the_title(); ?></h3>
						</a>
					</div>
					<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			<div class="col-lg-5">
				<?php query_posts( array( 'category__and' => array(1), 'posts_per_page' => 3, 'orderby' => 'title', 'order' => 'DESC' ) ); ?>
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="mb-2">
					<a class="rounded-2 row border" href="<?php the_permalink() ?>" style="text-decoration: none; color: #303030; height: 100px; padding-right: 10px;">
						<?php the_post_thumbnail( 'full', array( 'class' => 'mg-fluid rounded-start col-4 p-0' ) ); ?>
						<h6 class="col-8 p-2 d-flex align-items-center fw-bold"><?php the_title(); ?></h6>       
					</a>
				</div>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<!-- Fim posts principais -->

	<!-- Banner -->
	<div class=" pb-1 pt-3 my-3 rounded-2 d-flex row bg-primary justify-content-center">
		<div class="align-items-center container px-4" style="max-width: 1000px;">
			<h4 class="mb-0" style="color: #fff;">Cotações</h4>
			<p style="color: #fff;">Delay de 5 minutos</p>
		</div>
		<div class="rounded mb-2 row container" style="background-color: #fff; max-width: 1000px; ">
			<div class="px-3 py-2 col" style="border-top-left-radius: 6px; border-bottom-left-radius: 6px;">
				<div class="d-flex align-items-center ">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
						<path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
					</svg>
					<p class="fw-bold my-2 mx-2">Ibovespa</p>
				</div>

				<table class="table mt-2">
					<thead>

					</thead>
					<tbody class="text-dark">
						<tr>
							<th scope="row" id="bolsa" colspan="1">ITUB4</th>
							<td id="ITUB4"></td>
							<th scope="row" id="bolsa" value="BBDC4.SA" colspan="1">BBDC4</th>
							<td id="BBDC4"></td>
						</tr>
						<tr>
							<th scope="row" id="bolsa" colspan="1">VALE3</th>
							<td id="VALE3"></td>
							<th scope="row" colspan="1">PETR4</th>
							<td id="PETR4"></td>
						</tr>
						<tr>
							<th scope="row" id="bolsa" colspan="1">ABEV3</th>
							<td id="ABEV3"></td>
							<th scope="row" colspan="1">BBAS3</th>
							<td id="BBAS3"></td>
						</tr>
						<tr>
							<th scope="row" id="bolsa" colspan="1">B3SA3</th>
							<td id="B3SA3"></td>
							<th scope="row" colspan="1">ITSA4</th>
							<td id="ITSA4"></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="px-3 py-2 col" style="border-top-right-radius: 6px; border-bottom-right-radius: 6px;">
				<div class="d-flex align-items-center ">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
						<path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"></path>
						<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
						<path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
					</svg>

					<p class="fw-bold my-2 mx-2">Moeda</p>
				</div>

				<table class="table mt-2">
					<thead>

					</thead>
					<tbody class="text-dark">
						<tr>
							<th scope="row" colspan="1">BTC</th>
							<td><span id="maxBTC"></span></td>
							<th scope="row" colspan="1">USD</th>
							<td><span id="maxUSD"></span></td>
						</tr>
						<tr>
							<th scope="row" colspan="1">JPY</th>
							<td><span id="maxJPY"></span></td>
							<th scope="row" colspan="1">EUR</th>
							<td><span id="maxEUR"></span></td>
						</tr>
						<tr>
							<th scope="row" colspan="1">XRP</th>
							<td><span id="maxXRP"></span></td>
							<th scope="row" colspan="1">GBP</th>
							<td><span id="maxGBP"></span></td>
						</tr>
						<tr>
							<th scope="row" colspan="1">LTC</th>
							<td><span id="maxLTC"></span></td>
							<th scope="row" colspan="1">ARS</th>
							<td><span id="maxARS"></span></td>
						</tr>
					</tbody>
				</table>

			</div>

		</div>
		<p class="text-white pt-1" style="text-align: center; font-size: small; max-width: 1000px;">Os valores acima são de previsão de fechamento da ação no dia. Estes dados são consumidos via API's públicas e não devem ser levados em consideração para a realização de investimentos</p>
	</div>
	<!-- Fim Banner -->


</main>


<section class="pb-0 card-grid container">
	<div class="row">
		<div class="col-md-9 mt-3">
			<h4 class="mb-3 fw-bold">Postagens recentes</h4>
			<div class="row">
				<?php query_posts( array( 'category__and' => array(1), 'posts_per_page' => 4, 'orderby' => 'title', 'order' => 'DESC' ) ); ?>
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!-- Card item START -->
						<div class="col-sm col-md-6 p-0 mb-2">
							<a class="card text-muted h-100 me-2" href="<?php the_permalink() ?>" style="text-decoration: none; ">				
								<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid w-100 rounded-top p-0' ) ); ?>

								<div class="card-body pt-3">
									<h5 class="fw-bold"><?php the_title(); ?></h5>
									<span class="text-muted"><?php the_excerpt(); ?></span>
								</div>
							</a>
						</div>
						
						<!-- Card item END -->
					<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>

		<div class="col-md-3 mt-3">
			<div class="position-sticky" style="top: 1rem;">
				<div class="mb-3 rounded">
					<div class="col-12 col-sm-6 col-lg-12 rounded-2" >
						<h4 class="mb-3 fw-bold">Publicidade</h4>
						<!-- Recent post item -->

						<!-- Recent post widget END -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class="col-md-12 mt-3">
			<h4 class="mb-3 fw-bold">Mais conteúdos</h4>
			<div class="row">
				<?php query_posts( array( 'category__and' => array(1), 'posts_per_page' => 6, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!-- Card item START -->
						<div class="col-sm col-md-4 p-0 mb-2">
							<a class="card text-muted h-100 me-2" href="<?php the_permalink() ?>" style="text-decoration: none; ">				
								<?php the_post_thumbnail( 'full', array( 'class' => 'mg-fluid rounded-top p-0' ) ); ?>

								<div class="card-body pt-3">
									<h5 class="fw-bold"><?php the_title(); ?></h5>
									<span class="text-muted"><?php the_excerpt(); ?></span>
								</div>
							</a>
						</div>
						
						<!-- Card item END -->
					<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
</section>

<script>

	const url = 'https://economia.awesomeapi.com.br/last/'
	const coins = 'ARS-BRL,BTC-BRL,USD-BRL,EUR-BRL,JPY-BRL,XRP-BRL,LTC-BRL,GBP-BRL'
	fetch(url + coins)
		.then(function(response){
		return response.json()
	})
		.then(function(data){
		const dolarReal = data.USDBRL
		const euroReal = data.EURBRL
		const bitcoinReal = data.BTCBRL
		const pesoReal = data.ARSBRL
		const jpyReal = data.JPYBRL
		const xrpReal = data.XRPBRL
		const litecoinReal = data.LTCBRL
		const esterlinaReal = data.GBPBRL


		document.getElementById('maxBTC').innerHTML = 'R$ ' +
			bitcoinReal.high.toLocaleString('pt-BR',{
			style: 'currency',
			currency: 'BRL',
			minimumFractionDigitse: '2'
		})
		document.getElementById('maxEUR').innerHTML = 
			parseFloat(euroReal.high).toLocaleString('pt-br',{
			style: 'currency',
			currency: 'BRL',
			minimumFractionDigits: '2'
		})

		document.getElementById('maxARS').innerHTML = 
			parseFloat(pesoReal.high).toLocaleString('pt-br',{
			style: 'currency',
			currency: 'BRL',
			minimumFractionDigits: '3'
		})

		document.getElementById('maxUSD').innerHTML = 
			parseFloat(dolarReal.high).toLocaleString('pt-br',{
			style: 'currency',
			currency: 'BRL',
			minimumFractionDigits: '2'
		})

		document.getElementById('maxJPY').innerHTML = 
			parseFloat(jpyReal.high).toLocaleString('pt-br',{
			style: 'currency',
			currency: 'BRL',
			minimumFractionDigits: '3'
		})

		document.getElementById('maxXRP').innerHTML =
			parseFloat(xrpReal.high).toLocaleString('pt-br',{
			style: 'currency',
			currency: 'BRL',
			minimumFractionDigits: '2'
		})

		document.getElementById('maxGBP').innerHTML =
			parseFloat(esterlinaReal.high).toLocaleString('pt-br',{
			style: 'currency',
			currency: 'BRL',
			minimumFractionDigits: '2'
		})

		document.getElementById('maxLTC').innerHTML =
			parseFloat(litecoinReal.high).toLocaleString('pt-br',{
			style: 'currency',
			currency: 'BRL',
			minimumFractionDigits: '2'
		})

	})

	////////////////////////////////////////////////////////////////
	///////////////////////// BOLSA DE VALORES /////////////////////
	////////////////////////////////////////////////////////////////


	////// SYMBOL //////
	var symbol1 = "PETR4"
	var symbol2 = "ITUB4"
	var symbol3 = "BBDC4"
	var symbol4 = "VALE3"
	var symbol5 = "ABEV3"
	var symbol6 = "BBAS3"
	var symbol7 = "B3SA3"
	var symbol8 = "ITSA4"

	const PETR4 = `https://brapi.dev/api/quote/PETR4`
	const ITUB4 = `https://brapi.dev/api/quote/ITUB4`
	const BBDC4 = `https://brapi.dev/api/quote/${symbol3}`
	const VALE3 = `https://brapi.dev/api/quote/${symbol4}`
	const ABEV3 = `https://brapi.dev/api/quote/${symbol5}`
	const BBAS3 = `https://brapi.dev/api/quote/${symbol6}`
	const B3SA3 = `https://brapi.dev/api/quote/${symbol7}`
	const ITSA4 = `https://brapi.dev/api/quote/${symbol8}`


	////// IMPRESSÃO NO FRONT //////
	const showData1 = (result)=>{
		document.getElementById('PETR4').innerHTML = result;
	}

	const showData2 = (result1)=>{
		document.getElementById('ITUB4').innerHTML = result1;
	}

	const showData3 = (result2)=>{
		document.getElementById('BBDC4').innerHTML = result2;
	}

	const showData4 = (result3)=>{
		document.getElementById('VALE3').innerHTML = result3;
	}

	const showData5 = (result4)=>{
		document.getElementById('ABEV3').innerHTML = result4;
	}

	const showData6 = (result5)=>{
		document.getElementById('BBAS3').innerHTML = result5;
	}

	const showData7 = (result6)=>{
		document.getElementById('B3SA3').innerHTML = result6;
	}

	const showData8 = (result7)=>{
		document.getElementById('ITSA4').innerHTML = result7;
	}		


	////// MÉTODO DE CONSULTA //////   
	const options = {
		method: 'GET',
		mode: 'cors',
		cache: 'default'
	}

	////// BUSCA NA API //////
	fetch(PETR4, options)
		.then(response => {response.json()
			.then( data => {
			var PETR4 = data['results'];
			var closeP = PETR4[PETR4.length - 1];


			for(const price in closeP){
				var dataPrice = closeP['regularMarketPreviousClose']
				var close = dataPrice.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL'});
			}
			showData1(close);

		})
						  })  .catch(e => console.log('Deu erro'))

	fetch(ITUB4, options)
		.then(response => {response.json()
			.then(data => {
			var ITUB4 = data['results'];
			var closeI = ITUB4[ITUB4.length - 1];
			for (const price in closeI){
				var dataPrice = closeI['regularMarketPreviousClose']
				var close = dataPrice.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL'});
			}

			showData2(close);

		})  
						  }) .catch(e => console.log('Deu erro'))

	fetch(BBDC4, options)
		.then(response => {response.json()
			.then(data => {
			var BBDC4 = data['results'];
			var closeB = BBDC4[BBDC4.length - 1];
			for (const price in closeB){
				var dataPrice = closeB['regularMarketPreviousClose']
				var close = dataPrice.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL'});
			}
			showData3(close);

		})  
						  }) .catch(e => console.log('Deu erro'))

	fetch(VALE3, options)
		.then(response => {response.json()
			.then(data => {
			var VALE3 = data['results'];
			var closeV = VALE3[VALE3.length - 1];
			for (const price in closeV){
				var dataPrice = closeV['regularMarketPreviousClose']
				var close = dataPrice.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL'});
			}
			showData4(close);

		})  
						  }) .catch(e => console.log('Deu erro'))

	fetch(ABEV3, options)
		.then(response => {response.json()
			.then(data => {
			var ABEV3 = data['results'];
			var closeA = ABEV3[ABEV3.length - 1];
			for (const price in closeA){
				var dataPrice = closeA['regularMarketPreviousClose']
				var close = dataPrice.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL'});
			}
			showData5(close);

		})  
						  }) .catch(e => console.log('Deu erro'))

	fetch(BBAS3, options)
		.then(response => {response.json()
			.then(data => {
			var BBAS3 = data['results'];
			var closeA = BBAS3[BBAS3.length - 1];
			for (const price in closeA){
				var dataPrice = closeA['regularMarketPreviousClose']
				var close = dataPrice.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL'});
			}
			showData6(close);

		})  
						  }) .catch(e => console.log('Deu erro'))	

	fetch(B3SA3, options)
		.then(response => {response.json()
			.then(data => {
			var B3SA3 = data['results'];
			var closeA = B3SA3[B3SA3.length - 1];
			for (const price in closeA){
				var dataPrice = closeA['regularMarketPreviousClose']
				var close = dataPrice.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL'});
			}
			showData7(close);

		})  
						  }) .catch(e => console.log('Deu erro'))	

	fetch(ITSA4, options)
		.then(response => {response.json()
			.then(data => {
			var ITSA4 = data['results'];
			var closeA = ITSA4[ITSA4.length - 1];
			for (const price in closeA){
				var dataPrice = closeA['regularMarketPreviousClose']
				var close = dataPrice.toLocaleString('pt-BR',{ style: 'currency', currency: 'BRL'});
			}
			showData8(close);

		})  
						  }) .catch(e => console.log('Deu erro'))	


</script><!-- #main -->

<?php
get_footer();
