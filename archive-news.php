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
			<img src="<?php echo get_template_directory_uri(); ?>/images/pg-title-news.jpg?v=1" alt="news">
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
							
				<div class="row media-lineup">
						<?php if ( have_posts() ) : ?>
						<?php
			/* Start the Loop */
					while ( have_posts() ) :
					the_post(); ?>
					
									
					
					<!-- news-card--->
					<div class="col-12 news-block">
						<div class="news-block_content">
						<p class="date"><?php the_time( 'Y.m.d' ); ?></p>
						<h5><?php the_title(); ?></h5>
						
						<?php if( get_field('news_content') ): ?>
							<p><?php the_field('news_content'); ?></p>
					<?php endif; ?>
						</div>
						
						<?php	$link1 = get_field('link_1'); if ($link1['link_1_text']) {  ?>
								<dl class="related-list">
									<dt>Related Articles</dt>
								
							<?php } ?>
							
							<!-- link 1-->
							<?php if( get_field('link_1') ): ?>
									<?php $link1 = get_field('link_1'); if( $link1 ): ?>
										<dd><a target="_blank" href="<?php echo esc_attr( $link1['link_1_url'] ); ?>"><?php echo esc_attr( $link1['link_1_text'] ); ?></a></dd>
									<?php endif; ?>
							<?php endif; ?>
							
							<!-- link 2-->
							<?php	$link2 = get_field('link_2'); if ($link2['link_2_text']) {  ?>
								<dd><a target="_blank" href="<?php echo esc_attr( $link2['link_2_url'] ); ?>"><?php echo esc_attr( $link2['link_2_text'] ); ?></a></dd>
							<?php } ?>
							
							<!-- link 3-->
							<?php	$link3 = get_field('link_3'); if ($link3['link_3_text']) {  ?>
								<dd><a target="_blank" href="<?php echo esc_attr( $link3['link_3_url'] ); ?>"><?php echo esc_attr( $link3['link_3_text'] ); ?></a></dd>
							<?php } ?>
							
							<!-- link 4-->
							<?php	$link4 = get_field('link_4'); if ($link4['link_4_text']) {  ?>
								<dd><a target="_blank" href="<?php echo esc_attr( $link4['link_4_url'] ); ?>"><?php echo esc_attr( $link4['link_4_text'] ); ?></a></dd>
							<?php } ?>
							
							<!-- link 5-->
							<?php	$link5 = get_field('link_5'); if ($link5['link_4_text']) {  ?>
								<dd><a target="_blank" href="<?php echo esc_attr( $link5['link_5_url'] ); ?>"><?php echo esc_attr( $link5['link_5_text'] ); ?></a></dd>
							<?php } ?>
							
							
	
	
														
							
									
    
					<?php	$link1 = get_field('link_1'); if ($link1['link_1_text']) {  ?>
								</dl>
								
							<?php } ?>
							
							
							
							
						
					
						</div>
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
