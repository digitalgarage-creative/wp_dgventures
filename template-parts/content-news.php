<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgventures
 */

?>

			
<section class="post-section">
				<div class="container">
					<div class="row ">
					<div id="post-<?php the_ID(); ?>" class="col-lg-8 mx-auto">
							<div class="post-content padded pt-0 mt-5">
						<?php 
					$image = get_field('featured_image');
					$size = 'large';
					$large = $image['sizes'][ $size ];
					
					if( !empty( $image ) ): ?>
					    <img class="img-fluid" src="<?php echo esc_url($large); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					    
					    	
						<div class="mt-3 mb-5">
					<?php else:?>
						
					
					    
					<?php endif; ?>



						<p class="date"><?php the_time( 'Y.m.d' ); ?></p>
						<h5 class="mt-1"><?php the_title(); ?></h5>
						
						<?php if( get_field('news_content') ): ?>
							<p><?php the_field('news_content'); ?></p>
					<?php endif; ?>
					
						
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
							
						
 <!-- content here--->
 					

		
	<div class="post-nav">
		
		<div class="single-nav d-none d-md-block">
		<div class=" padded pt-0 d-flex justify-content-between">
		
		<?php
$prev_post = get_previous_post();
if($prev_post) {
   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
   echo "\t" . '<a class="btn btn-custom btn-dark" rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" ">&laquo; Previous post</a>' . "\n";
} ?>

<?php

$next_post = get_next_post();
if($next_post) {
   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
   echo "\t" . '<a class="btn btn-custom btn-dark" rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" ">Next post &raquo;</a>' . "\n";
}
?>
</div>
		</div>
		
			<hr class="d-block d-md-none"/>
									<p class="d-block d-md-none text-center mt-4">
										<a class="btn btn-custom btn-dark my-auto " href="<?php echo home_url(); ?>/news/">Back</a>
									</p>	
	</div>
						
					</div>	
					
								
								
					</div>
				</div>
			</section>

