<article <?php post_class( array( 'class' => 'featured' ) ); ?>>
	<div class="thumbnail">
		<!-- url nos quais um conteúdo vai ser permanentemente guardado -->
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
	</div>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="meta-info">
		<p>
			<?php _e( 'by', 'association' ); ?> <span><?php the_author_posts_link(); ?></span>
			<?php _e( 'Categories: ', 'association' ); ?> <span><?php the_category( ' ' ); ?></span>
			<?php the_tags( __( 'Tags: ', 'association' ), ', ' ); ?>
		</p>
		<p><span><?php echo get_the_date(); ?></span></p>
	</div>
	<?php the_excerpt(); ?>
</article>