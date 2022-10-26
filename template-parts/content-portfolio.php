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
							<div class="sticky image-stick pf-image">

								<a class="btn-back" href="<?php echo home_url(); ?>/portfolio/" class="btn-back-x">
								<svg data-name="Component 24 – 15" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
  <circle id="Ellipse_6" data-name="Ellipse 6" cx="32" cy="32" r="32" fill="#222"/>
  <g id="Group_34" data-name="Group 34" transform="translate(16.716 16.716)">
    <rect id="Rectangle_65" data-name="Rectangle 65" width="40.597" height="2.388" transform="translate(1.689 0) rotate(45)" fill="#fff"/>
    <rect id="Rectangle_66" data-name="Rectangle 66" width="40.597" height="2.388" transform="translate(30.395 1.689) rotate(135)" fill="#fff"/>
  </g>
</svg>

								</a>

								<?php
					$image = get_field('company_featured_image');
					$size = 'interview-head-size';
					$large = $image['sizes'][ $size ];

					if( !empty( $image ) ): ?>

									<img src="<?php echo esc_url($large); ?>" alt="">
									<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-default-lg.png?v=2" alt="">
										<?php endif; ?>
							</div>
						</div>

						<div class="col-md-6 single-post">
							<div class="row">
								<div class="col-12 pt-0 padded text-center text-md-left">

												<?php
					$image = get_field('company_logo');
					if( !empty( $image ) ): ?>


					    <img width="200" class="logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

					<?php endif; ?>

										<p class="mt-4 text-center text-md-left"><?php the_field('company_name'); ?></p>
									<ul class="sns-list mt-3">
						<?php	$sns = get_field('portfolio_sns');
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


													<?php	$video = get_field('portfolio_video');
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


										<div class="post-content mt-0">
								<!-- get the rest of the content--->
								<?php the_field('portfolio_content'); ?>



							<div class="tags-list mt-5">

								<?php
						$field = get_field_object( 'country' );
						$value = $field['value'];
						$label = $field['choices'][ $value ];
						?>
						<!-- country tag--->
							<div class="btn tags noclick"><?php echo esc_html($label); ?></div>

							<!-- industry tag--->


								<?php
							    $terms = get_the_terms( $post->ID, 'industry' );
							     if ( !empty( $terms ) ){
							    foreach($terms as $term) {?>
							    			<div class="btn tags noclick" >
							    <?php  echo $term->name;?>
							    </div>
							     <?php }

							    }?>



								<!-- Status tag--->

								<?php
							    $terms = get_the_terms( $post->ID, 'status' );
							     if ( !empty( $terms ) ){
							    foreach($terms as $term) {?>
							    			<div class="btn tags noclick" >
							    <?php  echo $term->name;?>
							    </div>
							     <?php }

							    }?>



							<!-- end status tag---->



						</div>



							</div>

								</div>
								</div>


						<div class="row bg-grey padded">
								<div class="col-12 ">
									<h5 class="mt-0">News</h5>

									<?php

									// Gets tag of current page by slug
									$terms = get_the_terms( $post->ID, 'post_tag' );
									if ( !empty( $terms ) ){
									    // get the first term
									    $term = array_shift( $terms );
									    $termslug = $term->slug;

									}
									// query for post

										$args = array(
										  'post_type'   => 'News',
										  'post_status' => 'publish',
										  'tax_query'   => array(
										  	array(
											  	'taxonomy'  => 'post_tag',
										  		'field'    => 'slug',
										  		'terms'    => $termslug
										  	)
										  )
										 );

										$relatednews = new WP_Query( $args );
										if( $relatednews->have_posts() ) :
										?>

										    <?php
										      while( $relatednews->have_posts() ) :
										        $relatednews->the_post();
										        ?>

										      <!-- news block--->
						<div class="col-12 news-block">
						<div class="news-block_content">
						<p class="date"><?php the_time( 'Y.m.d' ); ?></p>
						<h5><?php the_title(); ?></h5>

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
					</div>

										        <?php
										      endwhile;
										      wp_reset_postdata();
										    ?>

										<?php
										else :?>

									<?php	  esc_html_e( 'No related news', 'text-domain' );?>
									<?php	endif;	?>





									<h5 class="mt-4">Blog</h5>


										<?php

									// Gets tag of current page by slug
									$terms = get_the_terms( $post->ID, 'post_tag' );
									if ( !empty( $terms ) ){
									    // get the first term
									    $term = array_shift( $terms );
									    $termslug = $term->slug;

									}
									// query for post

										$args = array(
										  'post_type'   => 'Blog',
										  'post_status' => 'publish',
										  'tax_query'   => array(
										  	array(
											  	'taxonomy'  => 'post_tag',
										  		'field'    => 'slug',
										  		'terms'    => $termslug
										  	)
										  )
										 );

										$relatednews = new WP_Query( $args );
										if( $relatednews->have_posts() ) :
										?>

										    <?php
										      while( $relatednews->have_posts() ) :
										        $relatednews->the_post();
										        ?>

										      <!-- news block--->
												<!-- news block--->
													 <?php
								    $terms = get_the_terms( $post->ID, 'stage' );
								    foreach($terms as $term) {
									    $stage_name = $term->slug;
								    }
								?>
									<div class="col-12 news-block d-flex ">
											<a href="<?php the_permalink();?>">
										<div class="news-block_image">
											<?php
											$image = get_field('featured_image');
											$size = 'thumbnail';
											$thumb = $image['sizes'][ $size];

											if( !empty( $image ) ): ?>
											    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											    <? else:?>
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
											<div class="news-block_content">

								<p class="date"><?php echo $stage_name;?> | <?php the_time( 'Y.m.d' ); ?></p>
								<h5><?php the_title(); ?></h5>

									</div>
									</a>
									</div>

										        <?php
										      endwhile;
										      wp_reset_postdata();
										    ?>

										<?php
										else :?>

									<?php	  esc_html_e( 'No related blog posts', 'text-domain' );?>
									<?php	endif;	?>








								</div>
							</div>
							<div class="padded pt-0">
							<div class="row">
							<div class="col-12">
							<hr class="d-block d-md-none"/>
									<p class="d-block d-md-none text-center mt-4">
										<a class="btn btn-custom btn-dark my-auto " href="<?php echo home_url(); ?>/portfolio/">Back</a>
									</p>
							</div>
							</div>
						</div>
						</div>


					</div>
				</div>
			</section>
