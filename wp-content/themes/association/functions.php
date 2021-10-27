<?php 

// Incluindo os arquivos da TGM
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

// Requere o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

//carregar scripts e folhas estilo
	function load_scripts(){

		wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);

		wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all' );

		//get_template_directory_uri() o caminho até a pasta que queremos
		//array() se for dependente de algo passamos dentro do array
		//1.0 versão não é obrigatória
		// all todos os tipos de multiméda
		wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'load_scripts');


//Funçao de configuração de tema
function association_config(){
	// Registar os menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);

			$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args ); // cria opção cabeçalho
	add_theme_support( 'post-thumbnails' ); //posts em miniatura
	add_theme_support( 'post-formats', array( 'video', 'image' ) ); //que tipo de formato é
	add_theme_support( 'title-tag'); //colocar o título nas páginas	
	add_theme_support( 'custom-logo', array( 'height' => 110, 'width' => 200 ) ); // para aparecer o logotipo na identificação do site

	// Habilitando o suporte à tradução
	$textdomain = 'association';
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

}
add_action('after_setup_theme', 'association_config', 0); //prioridade 0


// Registo dos Sidebars
add_action( 'widgets_init', 'association_sidebars' );
function association_sidebars(){
	register_sidebar(
		array(
			'name' => __( 'Home Page Sidebar', 'association' ),
			'id' => 'sidebar-1',
			'description' => __( 'Sidebar to be used on Home Page', 'association'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Blog Sidebar', 'association'),
			'id' => 'sidebar-2',
			'description' => __( 'Sidebar to be used on Blog Page', 'association'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 1', 'association' ),
			'id' => 'services-1',
			'description' => __( 'First Services Area.', 'association' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 2', 'association' ),
			'id' => 'services-2',
			'description' => __( 'Second Services Area.', 'association' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __( 'Services 3', 'association' ),
			'id' => 'services-3',
			'description' => __( 'Third Services Area.', 'association' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	
	register_sidebar(
		array(
			'name' => __( 'Social Icons', 'association' ),
			'id' => 'social-media',
			'description' => __( 'Place your media icons here', 'association' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);					
}


