<?php get_header(); ?>
<style>
	.image {
		background-image: url("https://bumax.ind.br/wp-content/uploads/2020/10/parede-cimento-1.png");
		background-color: #cccccc; 
		height: 300px;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
<!-- HEAD DA PÁGINA -->
<div class="image">
	<div class="bg-dark bg-opacity-75 h-100 py-5">
		<div class="container pt-4">
			<h1 style="text-align: center;"><span class="h1" style="color: #ffffff;">Soluções inovadoras para a construção civil</span><br>
				<span class="h1" style="color: #ffffff;">e reformas em geral</span></h1>
			<div class="clearboth"></div>
		</div>
	</div>
</div>
<main class="container" >
	<section class="pb-0 card-grid container ">
		<div class="col-md-12 py-5">
			<div class="row">
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- Card item START -->
				<a href="<?php the_permalink() ?>" class="col-sm col-md-3 text-decoration-none p-1 mb-2">
					<div class="card text-muted h-100 me-2">		
						<div class="p-2">
							<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid rounded p-0' ) ); ?>
						</div>
						<div class="card-body pt-3 px-4">
							<h5 class="fw-bold mb-3"><?php the_title(); ?></h5>
						</div>
					</div>
				</a>

				<!-- Card item END -->
				<?php endwhile; endif; ?>
			</div>
			<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>

		</div>
	</section>
</main>
<style>
	/** =Paginate links Styles
	******************************************* **/
	.page-numbers {
		text-decoration: none; 
		color: #0d6efd;   
	}

	.current {
		color: #0d6efd;   
		width: 100%;
		height: 100%;
	}
	a:visited {
		color: #0d6efd;
	}
</style>
<?php
get_footer();
