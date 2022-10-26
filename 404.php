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


		<main id="main" class="site-main">
				<section class="padded post-section">
					<div class="container mt-5 mb-5" >
						<div class="row">
							<div class="col-7 col-md-4 mx-auto text-center">
								<h1 class="enserif"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt=""></h1>
							</div>
							<div class="col-12">
								<h2 class="ensans mt-3 mt-md-3 mt-xl-5 text-center">PAGE NOT FOUND</h2>
								<p class="text-center mt-4">
										<a class="btn btn-custom btn-dark my-auto " href="<?php echo home_url(); ?>">Go Back Home</a>
									</p>
							</div>
								
							</div>
						</div>
					</div>
					
				</section>
	
	
			</main><!-- #main -->


<?php

get_footer();
