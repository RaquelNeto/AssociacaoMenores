<?php 
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container-general">

						<div class="general-template">
							<?php 
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os 
								while( have_posts() ): the_post();

							?>

							<article class="artigo">
								<?php the_content(); ?>
							</article>

							<?php 
								endwhile;
							else:
							?>

							  <p><?php _e( 'There&rsquo;s nothing yet to be displayed...', 'association' ); ?></p>

							<?php endif; ?>

						</div>						

				</div>				
			</section>
		</main>
		<section class="map">
				
				<?php 
					$key = get_theme_mod( 'set_map_apikey' );
					$address = urlencode( get_theme_mod( 'set_map_address' ) );
				?>

				<iframe
				  width="100%"
				  height="350"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>&q=<?php echo $address; ?>&zoom=15" allowfullscreen>
				</iframe>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>