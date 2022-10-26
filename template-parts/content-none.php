<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dgventures
 */

?>
</div>
<section class="row">
	<div class="col-12">
		

	<header class="__page-header">
		<?php if(ICL_LANGUAGE_CODE == 'ja'){?>
 
	 <h2 class=""><?php esc_html_e( '何も見つかりませんでした', 'dgventures' ); ?></h2>
	
	<?php } elseif(ICL_LANGUAGE_CODE == 'en'){ ?>
	
	<h2 class=""><?php esc_html_e( 'Nothing Found', 'dgventures' ); ?></h2>
	 
	<?php } ?>
		
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dgventures' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dgventures' ); ?></p>
			<?php
			get_search_form();

		else :
			?>
			<?php if(ICL_LANGUAGE_CODE == 'ja'){?>
 
			 <p>検索キーワードに一致するものが見つかりませんでした。 <br class="d-none d-lg-block"/>別のキーワードで試してみてください。</p>
			
			<?php } elseif(ICL_LANGUAGE_CODE == 'en'){ ?>
			
			 <p>It seems we can't find what you are looking for.<br class="d-none d-lg-block"/> Please select a different Industry and try again.</p>
			 
			<?php } ?>
			
			<?php
			

		endif;
		?>
	</div><!-- .page-content -->
		</div>
</section><!-- .no-results -->
