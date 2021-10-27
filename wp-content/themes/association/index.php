<!-- O index é página padrão, caso não se saiba o que se mostrar no frontend mostra-se o index -->

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						
						<div class="news col-md-8">
							<!-- Loop para ir buscar os artigos -->
							<?php 
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os 
								while( have_posts() ): the_post();

							?>

							<!-- primeiro parametro é o nome do artigo que queremos chamar -->
							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

							<?php 
								endwhile;
								?>
								
								<!-- Criar a paginação -->	
								<div class="row">
									<div class="pages text-left col-6">
										<?php previous_posts_link( __( "<< Anterior", 'association' ) ); ?>
									</div>
									<div class="pages text-right col-6">
										<!-- Próximos post são mais antigos-->
										<?php next_posts_link( __( "Seguinte >>", 'association' ) ); ?>
									</div>
								</div>
	

								<?php
							else:
							?>

							  <p><?php _e( 'Não&rsquo; existe nada para ser mostrado...', 'association' ); ?></p>

							<?php endif; ?>

						</div>
						<?php get_sidebar( 'blog' ); ?>	 <!-- chamamos o arquivo que queremos neste caso o blog-->					
					</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>