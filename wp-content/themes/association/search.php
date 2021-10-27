<?php get_header(); ?>
	<div id="primary">
		<div id="main">
			<div class="container">

				<h2><?php _e( 'Resultados de Pesquisa para:','association' ); ?><?php echo get_search_query(); ?> </h2>

				<?php 
				/** chamar o formulário de pesquisa */
				get_search_form();

				while( have_posts() ): the_post();

					get_template_part( 'template-parts/content', 'search' );

					if( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;

				/** Paginação */
				the_posts_pagination(
					array(		
						'prev_text' => __( 'Previous', 'association' ),
						'next_text' => __( 'Next', 'association')
					)
				);

				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>