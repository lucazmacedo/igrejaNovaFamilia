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

get_header(); ?>

<main class="container mt-3" >
	<section class="pb-0 card-grid container">
		<div class="col-md-12 mt-3">
			<div class="row">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer();
