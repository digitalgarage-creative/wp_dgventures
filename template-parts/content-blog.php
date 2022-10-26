<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgventures
 */

?>

			
<section class="post-section fullwidth">
				<div class="container-fluid p-0">
					<div class="row ">
												<a class="btn-back" href="javascript:history.go(-1)"  class="btn-back-x">
								<svg data-name="Component 24 – 15" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
  <circle id="Ellipse_6" data-name="Ellipse 6" cx="32" cy="32" r="32" fill="#222"/>
  <g id="Group_34" data-name="Group 34" transform="translate(16.716 16.716)">
    <rect id="Rectangle_65" data-name="Rectangle 65" width="40.597" height="2.388" transform="translate(1.689 0) rotate(45)" fill="#fff"/>
    <rect id="Rectangle_66" data-name="Rectangle 66" width="40.597" height="2.388" transform="translate(30.395 1.689) rotate(135)" fill="#fff"/>
  </g>
</svg></a>
						
						<?php 
					$image = get_field('featured_image');
					$size = 'large';
					$large = $image['sizes'][ $size ];
					
					if( !empty( $image ) ): ?>
					    <img class="single-key-img post-single-img" src="<?php echo esc_url($large); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					    
					    	<div id="post-<?php the_ID(); ?>" class="col-lg-6 mx-auto">
						<div class="post-content padded pb-4">
					<?php else:?>
						<div id="post-<?php the_ID(); ?>" class="col-lg-6 mx-auto">
						<div class="post-content padded pt-0 mt-5">
					    
					<?php endif; ?>


							<p class="date"><?php the_time( 'Y.m.d' ); ?></p>
							<h1><?php the_title();?></h1>
 <!-- content here--->
 					<?php the_field('blog_the_content'); ?>

			<hr class="d-block d-md-none"/>
				
				
									<p class="d-block d-md-none text-center">
										<a class="btn btn-custom btn-dark my-auto " href="javascript:history.go(-1)">Back</a>
									</p>	
		</div>
	
		
						
					</div>			
								
					</div>
				</div>
			</section>
