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
<!-- 			Key Visual -->
<div id="keyvisual" class="container-fluid">
					<video id="myVideo" loop="" autoplay="" muted="" playsinline="" webkit-playsinline=""><source src="<?php echo get_template_directory_uri(); ?>/dgv.mp4"></video>
					<div class="kv-content">
						<div class="row">
						<div class="col-12 text-center">
							
						<h1>DG Ventures</h1>
						
				  <?php if(ICL_LANGUAGE_CODE == 'ja'){?>
<p class="lead">勇気を持って挑戦し、新しいコンテキストを創っていく起業家と共に</p>
						
						<?php } elseif(ICL_LANGUAGE_CODE == 'en'){ ?>

						<p class="lead">For challengers who create new context</p>
						 
						<?php } ?>
	</div>
					</div>
						<div class="row d-flex justify-content-center">
						<div class="col-6 col-lg-5 card-button">
							<?php if(ICL_LANGUAGE_CODE == 'ja'){?>
								<a href="https://onlab.jp/" target="_blank">
							<?php } elseif(ICL_LANGUAGE_CODE == 'en'){ ?>
								<a href="https://onlab.jp/en/" target="_blank">
							<?php } ?>
							 
								 <div class="logo-mark">
									 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.09 24.67"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M20.75,8.73h0a3.34,3.34,0,0,0-3.32,3.07,2.73,2.73,0,0,1-1.35.67,5.31,5.31,0,0,1-1.88.19h0a1.22,1.22,0,0,1-.42-.14l0,0a.52.52,0,0,1-.11-.1.53.53,0,0,1-.08-.15s0,0,0-.05h0a1.82,1.82,0,0,1,0-.57,1.8,1.8,0,0,1,.05-.19,2.6,2.6,0,0,1,.13-.36,8,8,0,0,1,.53-1h0A6.54,6.54,0,0,1,15,9.22a3.74,3.74,0,0,1,.77-.7,2,2,0,0,0,.6.09A2.21,2.21,0,0,0,18.57,6.4a2.22,2.22,0,0,0-2.21-2.21A2.21,2.21,0,0,0,14.6,7.73a2.3,2.3,0,0,1-.14.9,4,4,0,0,1-.24.46l-.07.13c-.1.22-.21.44-.33.65l-.08.15c-.14.23-.28.46-.44.68v0a2.47,2.47,0,0,1-.42.49l-.07.06a2.33,2.33,0,0,1-.5.31l-.05,0a.67.67,0,0,1-.31,0h0c-.78-.11-1.56-1.31-2.06-2.1a3.56,3.56,0,0,1-.7-2.41,4.77,4.77,0,0,0,.58-2.26h0A4.86,4.86,0,1,0,4.86,9.72a5.1,5.1,0,0,0,1.61-.29,4,4,0,0,1,3.1,1.46,4.29,4.29,0,0,1,1,1.28h0a1.21,1.21,0,0,1,0,.86,2.44,2.44,0,0,1-.61.81l0,0a.41.41,0,0,1-.11.07,3.1,3.1,0,0,1-.57.3l-.1,0h0a6,6,0,0,1-.91.28h0a2.34,2.34,0,0,1-.38.09,2.67,2.67,0,0,1-1.48-.13,3.54,3.54,0,0,0-2.44-1,3.58,3.58,0,1,0,3.56,3.6,4.8,4.8,0,0,0,0-.52A2.75,2.75,0,0,1,9.32,15h0c.7-.23,1.43-.23,1.74.57l0,.1A11.21,11.21,0,0,1,11,19.27a8.53,8.53,0,0,1-.41,1.81,1.83,1.83,0,1,0,2.33,1.76,1.82,1.82,0,0,0-.54-1.3,1.54,1.54,0,0,0-.47-.33,8.6,8.6,0,0,1-.22-3c.08-1.8.17-3.05.59-3.34a.45.45,0,0,1,.29-.08l.11,0a1,1,0,0,1,.27.07l.17.08.27.17.16.12a3.58,3.58,0,0,1,.44.43,1.73,1.73,0,0,1,.44.73,1.12,1.12,0,0,0-.09.44,1.13,1.13,0,1,0,2.25,0,1.12,1.12,0,0,0-1.6-1,2.18,2.18,0,0,1-.23-.09,4.89,4.89,0,0,1-1-.83.9.9,0,0,1-.15-.19l0,0a.56.56,0,0,1-.07-.16.25.25,0,0,1,0-.07.5.5,0,0,1,0-.17v-.05a.85.85,0,0,1,.47-.65h0a2.71,2.71,0,0,1,.89-.3,5.8,5.8,0,0,1,2.88.13,3.34,3.34,0,1,0,3-4.72Z"/><path class="cls-1" d="M10.61,12.16h0v0Z"/></g></g></svg>
								 </div>
								 <div class="logo-content">
									  Open Network Lab<br/>
								 <span>Learn and Grow</span>
								 </div>
								
							 </a>
						</div>
						<div class="col-6 col-lg-5 card-button">
							 <a href="" class="btn disabled active">
								  <div class="logo-mark">
									  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.7 16.69"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Group_112" data-name="Group 112"><g id="Group_111" data-name="Group 111"><g id="Group_110" data-name="Group 110"><path id="Path_960" data-name="Path 960" class="cls-1" d="M10.82,16.69c5.91-.42,11.88-4,11.88-8.32C22.68,3.74,16,0,9.69,0S0,3.74,0,8.36A9.91,9.91,0,0,0,.09,9.69a.61.61,0,0,0,.15.36.89.89,0,0,0,.4.06,6.57,6.57,0,0,0,3-.75C4.49,8.92,12,4.47,12,4.47l-.82-.29,4-.48s-8.28,6.37-10.34,8A11.5,11.5,0,0,1,2,13.15c-.13.06-.18.09-.2.17a.3.3,0,0,0,.07.31,8.09,8.09,0,0,0,1.77,1.53.49.49,0,0,0,.38.11c.08,0,.1-.22.13-.42A4.85,4.85,0,0,1,5.84,12C7.26,10.82,16,3.78,16,3.78L17.64,6.3l-1.4-.52L11,12.13a3.93,3.93,0,0,0-.88,4.1.79.79,0,0,0,.24.35A1,1,0,0,0,10.82,16.69Z"/></g></g></g></g></g></svg>
								  </div>
								  <div class="logo-content">
								 DG Ventures<br/>
								 <span>Expand and Explore</span>
								  </div>
							 </a>
						</div>
					</div>
					</div>
					
					<div class="scrolldown">
						<p>Scroll</p>
					</div>
				</div>
				
				
		
		
		<main>
	



<!-- news section -->
<div class="container">
					<div class="row">
		
						
							<!-- news section--->
							<div class="col-md-10  mx-auto">
							<section class="my-5">
							<h3 class="mb-0 card-shift ensans">NEWS</h3> 
							<ul class="list__news">
								
								<?php 

								$args = array(
								    'post_type'=> 'news',
								    'post_status' => 'publish',
										'posts_per_page' => 6,
								    'order'    => 'DSC'
								);              
								
								$the_query = new WP_Query( $args );
								if($the_query->have_posts() ) : 
								    while ( $the_query->have_posts() ) : 
								       $the_query->the_post(); 
								       // content goes here
								       ?>
								       <li>
									<div class="list__news__date"><?php the_time( 'Y.m.d' ); ?></div>
									<div class="list__news__content"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
								</li>
								       <?php  endwhile; 
								    wp_reset_postdata(); 
								else: 
								endif;
								
								?>
								
								
							</ul>
							<hr>
							<p class="text-right"><a class="btn btn-custom dark-ghost " href="<?php echo pll_home_url(); ?>news/" >More News</a></p>
						
							</section>
							
						</div>
					
							
						</div>
					</div>

<!-- Interview-->
			<section class="padded fullwidth">
					<div class="container-fluid p-0 m-0">
						<div class="row no-gutters">
							<div class="col-12">
								<h3 class="ensans text-center mb-3">Interview</h3> 
								
							</div>
	
		<?php
		$args = array(
		'posts_per_page'   => 6,
		'post_type'   => 'interview',
		'post_status' => 'publish'
		);
		
		$testimonials = new WP_Query( $args );
		if( $testimonials->have_posts() ) :
	?>
		
	<?php
		while( $testimonials->have_posts() ) :
		$testimonials->the_post();
	?>
	
		<div class="col-12 col-md-6 col-lg-4">
							<div class="interview__card">
								<a href="<?php the_permalink();?>">
									<div class="interview__card__img">
										
										<?php 
				$image = get_field('company_featured_image');
				$size = 'large';
				$large = $image['sizes'][ $size ];
				if( !empty( $image ) ): ?>
				<img class="img-fluid" src="<?php echo esc_url($large); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				
				<?php endif; ?>
									
									</div>
									<h5 class="interview__card__title"><?php the_title();?></h5>
							
								</a>
							</div>
						</div>
						
	
	
	<?php
		endwhile;
		wp_reset_postdata();
	?>
	
	<?php
		else :
		esc_html_e( 'No testimonials', 'text-domain' );
		endif;
	?>
				
	
							<div class="col-12">
									<p class="text-center"><a class="btn btn-custom dark-ghost mt-3" href="<?php echo pll_home_url(); ?>interview/" >More Interviews</a></p>
							</div>
						
						</div>
						
					</div>
				</section>
<!-- new interview -->

<?php	$dgvVideo = get_field('dgv_video');?>
		<?php if ($dgvVideo['vimeo_id']) {  ?>	
<!-- Video--->

<section class="bg-grey fullwidth">
<div class="container-fluid">
<div class="row">
<div class="col-md-6 mx-auto p-0 m-0"><button class="dgv-video" data-video-id="<?php echo esc_attr( $dgvVideo['vimeo_id'] ); ?>">
<span class="va-align">Play</span>
<img src="<?php echo esc_attr( $dgvVideo['video_background_image'] ); ?>" alt="dgv-video" />
</button></div>
</div>
</div>
</section><!-- Stats--->
<?php  } else { ?>
<span class="dgv-video"></span>
<?php } ?>

	
	

	

	<?php
		while ( have_posts() ) :
			the_post();
			the_content();

			
		endwhile; // End of the loop.
		?>
			




	</main>

<?php

get_footer();
