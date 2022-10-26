<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgventures
 */

get_header();
?>



			<!-- page title--->
		<section class="m-0 p-0 bg-black rel page-title">
					<div class="container-fluid">
						<div class="row">
							<div class="col">
								<div class="page-title-title">
									<?php the_title( '<h1>', '</h1>' ); ?>
								</div>
						</div>
					</div>
				</div>
				<div class="page-title-img">
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						
					<img src="<?php echo $image[0]; ?>" alt="<?php the_title()?>">
					
				<?php endif; ?>
					
					
				</div>
		</section>
<!-- 	Fixed Grid -->
		<section class="grid-section">
			<div class="grid container-fluid">
				<div class="row">
					<div class="grid-col col-6 col-md-3"></div>
					<div class="grid-col col-6 col-md-3"></div>
					<div class="grid-col col-3 d-none d-md-block"></div>
					<div class="grid-col col-3 d-none d-md-block"></div>
				</div>
			</div>
			</section>


		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->


<?php

get_footer();
