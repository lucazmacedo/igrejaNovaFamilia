<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MarketingTeam
 */

get_header();
?>

<main class="container" style="max-width: 1000px;">

	<!-- =======================
Inner intro START -->
	<section class="pb-3 pb-lg-5">
		<div>
			<div class="row mt-3">
				<div class="col-12">
					<h1><?php the_title(); ?></h1>
					<span class="text-muted"><?php the_excerpt(); ?></span>
				</div>
				<div class="rounded">
					<?php the_post_thumbnail( 'full', array( 'class' => 'rounded' ) ); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
Inner intro END -->

	<!-- =======================
Main START -->
	<section class="pt-0">
		<div class="position-relative">
			<div class="row">
				<!-- Main Content START -->
				<div class="col-lg-9 mb-5">
					<span class="text-muted">
						<?php the_content(); ?>
					</span>
				</div>
				<!-- Right sidebar START -->
				<div class="col-md-3">
					<div class="position-sticky" style="top: 2rem;">
						<div class="mb-3 rounded">
							<div class="col-12 col-sm-6 col-lg-12 rounded-2" >
								<h4 class="mb-3 fw-bold">A Bumax</h4>
								
							</div>
						</div>
					</div>
				</div>
				<!-- Right sidebar END -->
			</div>
		</div>
	</section>

	<!-- =======================
Main END -->
</main><!-- #main -->



<?php get_footer();
