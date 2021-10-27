<?php get_header(); ?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <?php 

                while( have_posts() ): the_post();

                    get_template_part( 'template-parts/content', 'single' );

                    ?>

                    <div class="row">
                        <!-- paginação que vai buscar o link da página anterior-->
                        <!-- aparece dentro de cada post do blog -->
                        <div class="pages text-left col-6">
                            <?php next_post_link( '&laquo; %link' ); ?>
                        </div>
                        <div class="pages text-right col-6">
                            <?php previous_post_link( '%link &raquo;' ); ?>
                        </div>
                    </div>

                    <?php

                    /**caso o post esteja aberto para comentários ou exista algum comentário para o post */
                    if( comments_open() || get_comments_number() ) :
                        comments_template(); /** comments_template serve para mostrar o formulário */
                    endif;

                endwhile;

                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>