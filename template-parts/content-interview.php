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
	<div class="container-fluid">
		<div class="row ">
			
			
			<?php 
		$image = get_field('company_featured_image');
		$size = 'interview-head-size';
		$large = $image['sizes'][ $size ];
		
		if( !empty( $image ) ): ?>
		    <img class="single-key-img interview-single-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>


			
				<a class="btn-back" href="<?php echo home_url(); ?>/interview/"  class="btn-back-x">
					<svg data-name="Component 24 – 15" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
<circle id="Ellipse_6" data-name="Ellipse 6" cx="32" cy="32" r="32" fill="#222"/>
<g id="Group_34" data-name="Group 34" transform="translate(16.716 16.716)">
<rect id="Rectangle_65" data-name="Rectangle 65" width="40.597" height="2.388" transform="translate(1.689 0) rotate(45)" fill="#fff"/>
<rect id="Rectangle_66" data-name="Rectangle 66" width="40.597" height="2.388" transform="translate(30.395 1.689) rotate(135)" fill="#fff"/>
</g>
</svg></a>
		
		
			<div class="col col-lg-9 ml-auto p-0">
			<div class="single-content interview-content text-center text-md-left">
					
				<?php 
		$image = get_field('company_logo');
		if( !empty( $image ) ): ?>
		   
		    
		    <img width="220" class="mb-4" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
		    
		<?php endif; ?>


				
				<p class="excerpt ensans text-center text-md-left"><?php the_field('company_name'); ?></p>
			
			
			<ul class="sns-list mt-3">
			<?php	$sns = get_field('interview_sns'); 
					if ($sns['homepage_url']) {  ?>
						<li>
							<a target="_blank" href="<?php echo esc_attr( $sns['homepage_url'] ); ?>"><img src="/wp-content/themes/dgventures/images/icon-home.svg" alt=""></a>
						</li>
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
						
						<?php if ($sns['instagram']) {  ?>
						<li>
							<a target="_blank" href="<?php echo esc_attr( $sns['instagram'] ); ?>"><img src="/wp-content/themes/dgventures/images/icon-ig.svg" alt=""></a>
						</li>
						<?php } ?>
						
						<?php if ($sns['linkedin']) {  ?>
						<li>
							<a target="_blank" href="<?php echo esc_attr( $sns['linkedin'] ); ?>"><img src="/wp-content/themes/dgventures/images/icon-in.svg" alt=""></a>
						</li>
							<?php } ?>
							</ul>
					
				<h2 class="post-title"><?php the_field('company_description'); ?></h2>
				
				
				
				<?php	$video = get_field('interview_video'); 
					if ($video['vimeo_id']) {  ?>
					<!-- video--->
				<div class="row">
					<div class="col-md-12 mx-auto p-0 m-0">
						<button class="dgv-video mt-3 mb-3" data-video-id="<?php echo esc_attr( $video['vimeo_id'] ); ?>">
							<span class="va-align">Play</span>
							<img src="<?php echo esc_attr( $video['video_image'] ); ?>" alt="dgv-video">
						</button>
					</div>
				</div>
				<!-- end of video--->
					
				<?php } ?>
				
										
				<div class="post-content mt-0 mlmr-mb">
					<!-- get the rest of the content--->
					<?php the_field('interview_content'); ?>
				</div>
			
	<div class="padded pt-0">
					<hr class="d-block d-md-none"/>
									<p class="d-block d-md-none text-center ">
										<a class="btn btn-custom btn-dark my-auto " href="<?php echo home_url(); ?>/interview/">Back</a>
									</p>	
									</div>
									
								
						</div>
					
								

							
					</div>	
					
					
						
												
					</div>
				</div>
			</section>

