<?php if( is_active_sidebar( 'sidebar-2' ) ): ?> <!-- Se tiver alguma coisa ativa mostre -->
	<aside class="sidebar col-md-4 h-100"> <!-- h-100 impede que a sidebar fique muito extensa e tenha o tamanho correto-->
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside>
<?php endif; ?>