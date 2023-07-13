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
	<section class="pb-0 card-grid container">
		<div class="col-md-12 mt-3">
			<div class="row">
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- Card item START -->
				<div class="col-sm col-md-4 p-1 mb-2">
					<div class="card text-muted h-100 me-2" href="<?php the_permalink() ?>" style="text-decoration: none; ">		
						<div class="p-2">
							<?php the_post_thumbnail( 'full', array( 'class' => 'mg-fluid rounded p-0' ) ); ?>
						</div>
						<div class="card-body pt-3 px-4">
							<h5 class="fw-bold mb-3"><?php the_title(); ?></h5>
							<span class="text-muted"><?php the_excerpt(); ?></span>
						</div>
						<div class="card-footer">
							<a href="<?php the_permalink() ?>" class="card-link">Ler mais ></a>
						</div>
					</div>
				</div>

				<!-- Card item END -->
				<?php endwhile; endif; ?>
				<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
			</div>
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
