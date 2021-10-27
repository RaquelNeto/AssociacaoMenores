<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-sm-7 col-4">
                <!-- Este comando serve para chamar o customizer para aparecer o copyright no footer -->
                <!--  <p><?php //echo get_theme_mod( 'set_copyright' ); ?></p> -->
                <p><a href="http://www.digiup.me/" target="_blank"><big> DigiUP &nbsp;</big></a><big>©&nbsp;2020 &nbsp;Associação de Menores &nbsp; &nbsp;  | &nbsp; &nbsp;  Criado por Raquel Neto </big></p>
            </div>
            <nav class="footer-menu col-sm-5 col-8 text-right">
                <?php 
                wp_nav_menu( 
                	array( 
                		'theme_location' =>  'footer_menu' //chamar o menu para o footer
                	) 
                ); 
                ?>
            </nav>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>	
</body>
</html>