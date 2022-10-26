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
							<h1>Portfolio</h1>
						</div>
				</div>
			</div>
		</div>
		<div class="page-title-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/pg-title-portfolio.jpg" alt="interview">
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
			
								<!-- filter form -->
						<div class="row">
					
				
					<div class="col">
						<!-- include dropdown for mb--->
						
						<!-- 
						<?php echo do_shortcode('[searchandfilter fields="industry,status" archive="portfolio" post_types="portfolio" class="portfolio-sort d-none d-md-block"  headings="Industry,Status" submit_label="Search" hide_empty="1"  ]'); ?>
							-->
						
						
					
						
						
						
						<!-- dropdown form mb--->
						<div class="filters">
							<div class="tags-list mt-2"  data-filter-group="status">
								<label for="">Status</label><br/>
								<button class="btn tags active" role="button" data-filter="">All Status</button>
								<button class="btn tags" role="button" data-filter=".active">Active</button>
								<button class="btn tags" role="button" data-filter=".exit">Exited</button>
								<button class="btn tags" role="button" data-filter=".trade-sale">Trade Sale</button>

							</div>

							<div class="tags-list mt-2"  data-filter-group="industry">
								<label for="">Industry</label><br/>
								<button class="btn tags active" role="button" data-filter="">All</button>
								<button class="btn tags" role="button" data-filter=".ad-tech">Ad Tech</button>
								<button class="btn tags" role="button" data-filter=".ai">AI</button>
								<button class="btn tags" role="button" data-filter=".big-data">Big Data</button>
								<button class="btn tags" role="button" data-filter=".blockchain">Blockchain</button>
								<button class="btn tags" role="button" data-filter=".consumer">Consumer</button>
								<button class="btn tags" role="button" data-filter=".ec">E-Commerce</button>
								<button class="btn tags" role="button" data-filter=".enterprise">Enterprise</button>
								<button class="btn tags" role="button" data-filter=".fintech">Fin Tech</button>
								<button class="btn tags" role="button" data-filter=".health-insurance">Health Insurance</button>
								<button class="btn tags" role="button" data-filter=".healhcare">Healthcare</button>
								<button class="btn tags" role="button" data-filter=".iot">IoT</button>
								<button class="btn tags" role="button" data-filter=".marketplace">Marketplace</button>
								<button class="btn tags" role="button" data-filter=".media">Media</button>
								<button class="btn tags" role="button" data-filter=".others">Others</button>
								<button class="btn tags" role="button" data-filter=".remittances">Remittances</button>
								<button class="btn tags" role="button" data-filter=".resale-marketplace">Resale Marketplace</button>
								<button class="btn tags" role="button" data-filter=".saas">Saas</button>
								<button class="btn tags" role="button" data-filter=".smart-city">Smart City</button>
								<button class="btn tags" role="button" data-filter=".travel-tech">Travel Tech</button>
								<button class="btn tags" role="button" data-filter=".urban-mobility">Urban Mobility</button>
								<button class="btn tags" role="button" data-filter=".vr-ar">VR/AR</button>
							</div>

							
							<div class="tags-list mt-2"  data-filter-group="country">
								<label for="">Countries</label><br/>
								<button class="btn tags active" role="button" data-filter="">All</button>
								<button class="btn tags" role="button" data-filter=".japan">Japan</button>
								<button class="btn tags" role="button" data-filter=".usa">United States</button>
								<button class="btn tags" role="button" data-filter=".asia">Asia</button>
								<button class="btn tags" role="button" data-filter=".others">Others</button>
							</div>
						</div>

						
					</div>
				</div>
								
								
				
				
								
								<div class="row portfolio-cards-wrap">
								
		<?php if ( have_posts() ) : ?>
						<?php
			/* Start the Loop */
					while ( have_posts() ) :
					the_post(); ?>
								
	
							<!-- card-->
						<?php
						$field = get_field_object( 'country' );
						$value = $field['value'];
						$label = $field['choices'][ $value ];
						?>


					<div class="portfolio_card col m-0 p-0 <?php echo esc_html($value); ?> <?php $statusterms = get_the_terms( $post->ID, 'status' );
					if ( !empty( $statusterms ) ){
						// get the first term
						foreach ($statusterms as $statusterm) {
							echo  $statusterm->slug.' ';	
						}
					} ;?> <?php 
						$industryterms = get_the_terms( $post->ID, 'industry' );
					if ( !empty( $industryterms ) ){
										// echo $industryterm->slug;
						foreach ($industryterms as $industryterm) {
							echo  $industryterm->slug.' ';
						}
					} ;?> ">


						<a href="<?php the_permalink();?>">
						<div class="portfolio-card">
							
						<?php 
					$image = get_field('company_logo');
					if( !empty( $image ) ): ?>
					   
					    
					    <img class="pf-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
					    
					<?php endif; ?>
							
						
								<?php 
					$image = get_field('company_featured_image');
					$size = 'thumbnail';
					$thumb = $image['sizes'][ $size ];
					
					if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title();?>">
								<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-default.png?v=1" alt="">
								
									<?php endif; ?>
						</div>
						</a>
					</div>
	

							<?php endwhile;

		

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?> 
					
					</div>	

				<div id="noResult">
				<?php if(ICL_LANGUAGE_CODE == 'ja'){?>
					<h2 class="">何も見つかりませんでした</h2>
					<p>検索キーワードに一致するものが見つかりませんでした。<br class="d-none d-lg-block"> 別のキーワードで試してみてください。</p>
					<?php } elseif(ICL_LANGUAGE_CODE == 'en'){ ?>
						<h2 class="">Nothing Found</h2>
					<p>It seems we can't find what you are looking for.<br class="d-none d-lg-block"> Please select a different Industry and try again.</p>
 
					<?php } ?>
				</div>

					
					
				
			
				
			</div>
		</section>



		</main><!-- #main -->
	

<?php

get_footer();
