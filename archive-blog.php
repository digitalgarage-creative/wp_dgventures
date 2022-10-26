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
			
			<img src="<?php echo get_template_directory_uri(); ?>/images/pg-title-media.jpg" alt="about">
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
			
				
				<div class="row equal media-lineup">
						<?php if ( have_posts() ) : ?>
						<?php
			/* Start the Loop */
					while ( have_posts() ) :
					the_post(); ?>
					<!-- news-card--->
					
					
					<?php 
						    $terms = get_the_terms( $post->ID, 'stage' ); 
						    foreach($terms as $term) {
							    $stage_name = $term->slug;   
						    }
						?>
					
					<div class="col-12 col-sm-6  col-lg-3 m-0 p-0">
						<div class="card">
									<a href="<?php the_permalink()?>">
										<div class="img-box">
											<span class="category <?php echo $stage_name;?>	">
											<?php echo $stage_name; ?>
											</span>
											
											
											<?php 
											$image = get_field('featured_image');
											$size = 'thumbnail';
											$thumb = $image['sizes'][ $size];
											
											if( !empty( $image ) ): ?>
											    <img class="card-img-top" src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											    <?php else:?>
											    <!-- if no featured image ---->
											    <?php if ($stage_name == 'onlab'):?>
											    
											    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/blog_onlab.png" />
											    	<?php elseif ($stage_name == 'dgv') :?>
											    	 <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/blog_dgv.png" />
											    	
											    <?php else :?>
											    
											    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/blog_others.png" />
											    	<?php endif; ?>
											    
											<?php endif; ?>
											
										</div>
										<div class="card-body">
											
											<?php if(ICL_LANGUAGE_CODE == 'ja'){?>


<h5 class="card-title"><?php echo mb_substr($post->post_title, 0, 22).'...'; ?> </h5>

<?php } elseif(ICL_LANGUAGE_CODE == 'en'){ ?>

<h5 class="card-title"><?php echo mb_substr($post->post_title, 0, 40).'...'; ?> </h5>

<?php } ?>
											<p class="card-text">
												
										
													
													<?php
														$excerpt = get_field('blog_the_content');
														if(mb_strlen($excerpt, 'UTF-8')>35){
															$content= mb_substr(strip_tags($excerpt), 0, 60, 'UTF-8');
															echo $content.'……';
														}else{
															echo strip_tags($excerpt);
														}
														?>
												</p>
												<p class="date"><?php the_time( 'Y.m.d' ); ?></p>
										</div>
									</a>
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
