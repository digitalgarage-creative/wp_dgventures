<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgventures
 */

?>



		<section class="post-section side-post">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 m-0 p-0">
							<div class="sticky image-stick">
						
								<a class="btn-back" href="<?php echo pll_home_url(); ?>team/" class="btn-back-x">
								<svg data-name="Component 24 – 15" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
  <circle id="Ellipse_6" data-name="Ellipse 6" cx="32" cy="32" r="32" fill="#222"/>
  <g id="Group_34" data-name="Group 34" transform="translate(16.716 16.716)">
    <rect id="Rectangle_65" data-name="Rectangle 65" width="40.597" height="2.388" transform="translate(1.689 0) rotate(45)" fill="#fff"/>
    <rect id="Rectangle_66" data-name="Rectangle 66" width="40.597" height="2.388" transform="translate(30.395 1.689) rotate(135)" fill="#fff"/>
  </g>
</svg>

								</a>
								
								<?php 
					$image = get_field('featured_image');
					$size = 'interview-head-size';
					$large = $image['sizes'][ $size ];
					
					if( !empty( $image ) ): ?>
					
									<img src="<?php echo esc_url($large); ?>" alt="">
										<?php endif; ?>
							</div>
						</div>
						
						<div class="col-md-6 single-post">
							<div class="row">
								<div class="col-12 pt-0 padded">
								
									<h3 class="team-h3"><?php the_title();?></h3>
										<p class="excerpt"><?php the_field('position'); ?>
										<?php if( get_field('based_in') ): ?>
									<br/><?php the_field('based_in'); ?>
										<?php endif; ?>
										</p>
										
								
							<ul class="sns-list mt-3">
						<?php	$sns = get_field('sns'); 
								if ($sns['homepage_url']) {  ?>
									
									<?php } ?>
									<?php if ($sns['twitter']) {  ?>
									<li>
										<a target="_blank" href="<?php echo esc_attr( $sns['twitter'] ); ?>"><img src="/wp-content/themes/dgventures/images/icon-twitter.svg" alt=""></a>
									</li>
									<?php } ?>
									<?php if ($sns['facebook']) {  ?>
									<li>
										<a target="_blank" href="<?php echo esc_attr( $sns['facebook'] ); ?>"><img src="/wp-content/themes/dgventures/images/icon-fb.svg" alt=""></a>
									</li>
									<?php } ?>
									
									
									<?php if ($sns['linkedin']) {  ?>
									<li>
										<a target="_blank" href="<?php echo esc_attr( $sns['linkedin'] ); ?>"><img src="/wp-content/themes/dgventures/images/icon-in.svg" alt=""></a>
									</li>
										<?php } ?>
										
										<?php if ($sns['instagram']) {  ?>
									<li>
										<a target="_blank" href="<?php echo esc_attr( $sns['instagram'] ); ?>"><img src="/wp-content/themes/dgventures/images/icon-ig.svg" alt=""></a>
										
									</li>
									<?php } ?>
										
										
										</ul>
									
										
																							
										<div class="post-content mt-0">
								<!-- get the rest of the content--->
								<?php the_field('introduction'); ?>
								
													
							</div>
								<hr class="d-block d-md-none"/>
									<p class="d-block d-md-none text-center mt-4">
										<a class="btn btn-custom btn-dark my-auto " href="<?php echo home_url(); ?>/team/">Back</a>
									</p>	
								</div>
					</div>
							
							
						</div>
						
						
					</div>
				</div>
			</section>
			
			
			
			


