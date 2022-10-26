<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dgventures
 */

?>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-6">
					<ul>
						<li><a href="<?php echo pll_home_url(); ?>company/">Company</a></li>
						<li><a href="<?php echo pll_home_url(); ?>contact/">Contact</a></li>
						<?php if(ICL_LANGUAGE_CODE == 'ja'){?>
						<li> <a target="_blank" href="https://www.garage.co.jp/ja/policy/">Privacy Policy</a></li>
						<?php } elseif(ICL_LANGUAGE_CODE == 'en'){ ?>
						<li> <a target="_blank" href="https://www.garage.co.jp/en/policy/">Privacy Policy</a></li>
							<?php } ?>
						
						<?php if(ICL_LANGUAGE_CODE == 'ja'){?>
 
						 <li><a href="<?php icl_post_languages_link(); ?>">| English</a></li>
						
						<?php } elseif(ICL_LANGUAGE_CODE == 'en'){ ?>
						
						 <li><a href="<?php icl_post_languages_link(); ?>">| 日本語</a></li>
						 
						<?php } ?>
						
					</ul>
				</div>
				<div class="col-12 col-md-6">
					<ul class="sns">
						<li><a href="https://www.linkedin.com/company/dg-ventures/" target="_blank"><img height="20px" width="20px" src="<?php echo get_template_directory_uri(); ?>/images/logo_linkedin.svg" alt=""></a></li>
						<li><a href="https://angel.co/company/dg-incubation"  target="_blank"><img height="20px" width="20px" src="<?php echo get_template_directory_uri(); ?>/images/logo_angel.svg" alt=""></a></li>
						<li><a href="https://www.crunchbase.com/organization/dg-incubation#/entity" target="_blank"><img height="20px" width="20px" src="<?php echo get_template_directory_uri(); ?>/images/logo_cb.svg" alt=""></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<ul class="mt-md-3">
					<li>
						<a href="https://www.garage.co.jp/ja/"><img height="35" src="<?php echo get_template_directory_uri(); ?>/images/logo_dgg.svg" alt=""></a>
					</li>
					
					<li>
						<a href="https://www.onlab.jp"><img height="35" src="<?php echo get_template_directory_uri(); ?>/images/logo_onl.svg" alt=""></a>
					</li>
					
					<li>
						<a href="https://www.dg717.com"><img height="35" src="<?php echo get_template_directory_uri(); ?>/images/logo_717.svg" alt=""></a>
					</li>
					<li>
						<a href="https://www.dglab.com"><img height="35" src="<?php echo get_template_directory_uri(); ?>/images/logo_dglab.svg" alt=""></a>
					</li>

				</ul>
				</div>
				<div class="col-lg-3 mt-md-3">
					<p class="text-lg-right copyright mb-0">© 2020 DG Ventures, Inc.</p>
				</div>
				
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
