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
			
			<img src="<?php echo get_template_directory_uri(); ?>/images/pg-title-team.jpg" alt="about">
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

		






<!-- content here--->


<section class="padded">
	<div class="container-fluid">
		<div class="row">
			
						<div class="col-12">
				<h3 class="enserif">Management</h3>
			</div>

			
			
			
							<?php 
	$the_query = new WP_Query( array(
    'post_type' => 'team',
    'order' => 'DESC',
    'orderby' => 'menu_order',
    'posts_per_page' => 999,
    'tax_query' => array(
        array (
            'taxonomy' => 'group',
            'field' => 'slug',
            'terms' => 'management-vip',
        )
    ),
) );

while ( $the_query->have_posts() ) :
    $the_query->the_post(); ?>
    	<div class="col-6 col-md-3 m-0 p-0">
				
			<?php if(is_taxonomy('group','management')):?>
	
				<div class="team-card">
						<a href="<?php the_permalink()?>">
							<span class="more">
							<?php 
								$image = get_field('featured_image');
								$size = 'thumbnail';
								$thumb = $image['sizes'][ $size];
								
								if( !empty( $image ) ): ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/team/team-more.svg" alt="">
							</span>
							<div class="team-img">
								
							</span>
							<!--end if-->
						<img src="<?php echo esc_url($thumb); ?>" alt="">
						<?php endif; ?>
					</div>
						<div class="team-details">
						<h5><?php the_title();?></h5>
						<p><?php the_field('position'); ?>
						<?php if( get_field('based_in') ): ?>
							<br/><?php the_field('based_in'); ?>
							<?php endif; ?>
							</p>
					
					</div>
					
					
							
						</a>
				</div>
			<?php endif;?>
			</div>

    
    
<?php 
	endwhile;

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/
wp_reset_postdata(); ?>			
<!-- member card--->
			
			 <div class="w-100"></div>
			
				<?php 
	$the_query = new WP_Query( array(
    'post_type' => 'team',
    'order' => 'DESC',
    'orderby' => 'menu_order',
    'posts_per_page' => 999,
    'tax_query' => array(
        array (
            'taxonomy' => 'group',
            'field' => 'slug',
            'terms' => 'management',
        )
    ),
) );

while ( $the_query->have_posts() ) :
    $the_query->the_post(); ?>
    	<div class="col-6 col-md-3 m-0 p-0">
				
			<?php if(is_taxonomy('group','management')):?>
	
				<div class="team-card">
						<a href="<?php the_permalink()?>">
							<span class="more">
							<?php 
								$image = get_field('featured_image');
								$size = 'thumbnail';
								$thumb = $image['sizes'][ $size];
								
								if( !empty( $image ) ): ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/team/team-more.svg" alt="">
							</span>
							<div class="team-img">
								
							</span>
							<!--end if-->
						<img src="<?php echo esc_url($thumb); ?>" alt="">
						<?php endif; ?>
					</div>
						<div class="team-details">
						<h5><?php the_title();?></h5>
						<p><?php the_field('position'); ?>
						<?php if( get_field('based_in') ): ?>
							<br/><?php the_field('based_in'); ?>
							<?php endif; ?>
							</p>
					
					</div>
					
					
							
						</a>
				</div>
			<?php endif;?>
			</div>

    
    
<?php 
	endwhile;

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/
wp_reset_postdata(); ?>			
<!-- member card--->
						

			
			<div class="col-12 mt-5">
				<h3 class="enserif">Members</h3>
			</div>
				<?php 
	$the_query = new WP_Query( array(
    'post_type' => 'team',
    'order' => 'DESC',
    'orderby' => 'menu_order',
    'posts_per_page' => '-1',
    'tax_query' => array(
        array (
            'taxonomy' => 'group',
            'field' => 'slug',
            'terms' => 'member',
        )
    ),
) );

while ( $the_query->have_posts() ) :
    $the_query->the_post(); ?>
    	<div class="col-6 col-md-3 m-0 p-0">
				
			<?php if(is_taxonomy('group','member')):?>
	
				<div class="team-card">
						<a href="<?php the_permalink()?>">
							<span class="more">
							<?php 
								$image = get_field('featured_image');
								$size = 'thumbnail';
								$thumb = $image['sizes'][ $size];
								
								if( !empty( $image ) ): ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/team/team-more.svg" alt="">
							</span>
							<div class="team-img">
								
							</span>
							<!--end if-->
						<img src="<?php echo esc_url($thumb); ?>" alt="">
						<?php endif; ?>
					</div>
						<div class="team-details">
						<h5><?php the_title();?></h5>
						<p><?php the_field('position'); ?>
						<?php if( get_field('based_in') ): ?>
							<br/><?php the_field('based_in'); ?>
							<?php endif; ?>
							</p>
					</div>
					
					
							
						</a>
				</div>
			<?php endif;?>
			</div>

    
    
<?php 
	endwhile;

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/
wp_reset_postdata(); ?>			
<!-- member card--->
						

			
			<div class="col-12 mt-5">
				<h3 class="enserif">Support</h3>
			</div>
			<!-- member --->
			<?php 
	$the_query = new WP_Query( array(
    'post_type' => 'team',
    'order' => 'DESC',
    'orderby' => 'menu_order',
    'posts_per_page' => '-1',
    'tax_query' => array(
        array (
            'taxonomy' => 'group',
            'field' => 'slug',
            'terms' => 'support',
        )
    ),
) );

while ( $the_query->have_posts() ) :
    $the_query->the_post(); ?>
    	<div class="col-6 col-md-3 m-0 p-0">
				
			<?php if(is_taxonomy('group','support')):?>
		
				<div class="team-card">
						<a href="<?php the_permalink()?>">
							<span class="more">
							<?php 
								$image = get_field('featured_image');
								$size = 'thumbnail';
								$thumb = $image['sizes'][ $size];
								
								if( !empty( $image ) ): ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/team/team-more.svg" alt="">
							</span>
							<div class="team-img">
								
							</span>
							<!--end if-->
						<img src="<?php echo esc_url($thumb); ?>" alt="">
						<?php endif; ?>
					</div>
						<div class="team-details">
						<h5><?php the_title();?></h5>
						<p><?php the_field('position'); ?>
						<?php if( get_field('based_in') ): ?>
							<br/><?php the_field('based_in'); ?>
							<?php endif; ?>
							</p>
					</div>
					
					
							
						</a>
				</div>
			<?php endif;?>
			</div>

    
    
<?php 
	endwhile;

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset.
*/
wp_reset_postdata(); ?>
			<!-- member card--->
			
			
		</div>
		</div>
	</div>
</section>














		</main><!-- #main -->
	

<?php

get_footer();
