<?php
/**
 * The template for displaying archive pages
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
							<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
						</div>
				</div>
			</div>
		</div>
		<div class="page-title-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/pg-title-interview.jpg" alt="interview">
		</div>
</section>
<!-- this should be the archive page NOT single post page-->
<main>
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

		




	<section class="padded">
			<div class="container-fluid">
							<div class="row">
								<!-- interview--->
										<?php if ( have_posts() ) : ?>
						<?php
			/* Start the Loop */
					while ( have_posts() ) :
					the_post(); ?>
					<div class="col-12  p-0 interview-block">
						
							<div class="int-content">
								<a href="<?php the_permalink();?>">
								<h4><?php the_title();?></h4>
								<p><?php the_field('company_description'); ?></p>
								<p class="text-right mb-0">
								<span class=" btn btn-custom ghost light mt-4">View Story</span>
									</p>
									</a>
							</div>
							<div class="int-img">
									
								<?php 
											$wideImage = get_field('company_wide_image');
												
													if( !empty( $wideImage ) ): ?>
									
										<img  src="<?php echo $wideImage; ?>" />
										<?php else :?>
									
									
												<?php 
													$image = get_field('company_featured_image');
													$size = 'interview-head-size';
													$large = $image['sizes'][ $size ];
													
													if( !empty( $image ) ): ?>
									
										<img  src="<?php echo esc_url($large); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									
									<?php endif; ?>
									
									<?php endif; ?>

								
								
								
							
							</div>
					</div>
					<?php endwhile;

			bittersweet_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?> 

					</div>
				
				
				
			</div>
		</section>



		</main><!-- #main -->
	

<?php

get_footer();
