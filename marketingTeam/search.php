<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package MarketingTeam
 */

get_header();
?>
<section class="pt-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-primary  p-4 text-center rounded-3">
					<h1 class="text-white m-0"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Resultados de pesquisa para: %s', 'marketingteam' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
					
				</div>
			</div>
		</div>
	</div>
</section>

<main class="container mt-3" >
	<section class="pb-0 card-grid container">
		<div class="col-md-12 mt-3">
			<div class="row">
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- Card item START -->
				<div class="col-sm col-md-4 p-0 mb-2">
					<a class="card text-muted h-100 me-2" href="<?php the_permalink() ?>" style="text-decoration: none; ">				
						<img src="<?= get_the_post_thumbnail_url( get_the_ID()); ?>" class="rounded img-fluid w-100" alt="<?php the_title(); ?>" loading="eager" />

						<div class="card-body pt-3">
							<h5 class="fw-bold"><?php the_title(); ?></h5>
							<span class="text-muted"><?php the_excerpt(); ?></span>
						</div>
					</a>
				</div>

				<!-- Card item END -->
				<?php endwhile; endif; ?>
				<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
