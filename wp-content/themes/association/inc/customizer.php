<?php 

/** Adicionar elementos a Apresentação -> Personalizar*/

function wpcurso_customizer( $wp_customize ){

	// Copyright

	$wp_customize->add_section( 
		/** 'sec_copyright' é o ID */
		'sec_copyright', array(
			'title' => __( 'Copyright', 'association'),
			'description' => __( 'Copyright Section', 'association' )
		)
	);

	$wp_customize->add_setting(
		'set_copyright', array(
			'type' => 'theme_mod',
			'default' => __( 'Copyright X - All rights reserved', 'association' ),
			/** Limpa o que foi introduzido*/
			'sanitize_callback' => 'wp_filter_nohtml_kses' //remove todo o html do texto
		)
	);

	$wp_customize->add_control(
		'set_copyright', array(
			'label' => __( 'Copyright', 'association' ),
			'description' => __( 'Choose whether to show the Services section or not', 'association' ),
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);	

	// Map

	$wp_customize->add_section( 
		'sec_map', array(
			'title' => __( 'Map', 'association' ),
			'description' => __( 'Map Section', 'association' )
		)
	);	

	// API Key

	$wp_customize->add_setting(
		'set_map_apikey', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_map_apikey', array(
			'label' => __( 'API Key', 'association' ),
			'description' => sprintf( 
				__( 'Get your key <a target="_blank" href="%s">here</a>', 'association' ),
				'https://console.developers.google.com/flows/enableapi?apiid=maps_backend' 
				),
			'section' => 'sec_map',
			'type' => 'text'
		)
	);

	// Address

	$wp_customize->add_setting(
		'set_map_address', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'esc_textarea'
		)
	);

	$wp_customize->add_control(
		'set_map_address', array(
			'label' => __( 'Type your address here', 'association' ),
			'description' => __( 'No special characters allowed', 'association' ),
			'section' => 'sec_map',
			'type' => 'textarea'
		)
	);	

	// Slider

	$wp_customize->add_section( 
		'sec_slider', array(
			'title' => __( 'Slider', 'association' ),
			'description' => __( 'Slider Section', 'association' )
		)
	);

	// Design

	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'wpcurso_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' => __( 'Choose your design type here', 'association' ),
			'description' => __( 'Choose your design type', 'association' ),
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
				'1' => __( 'Design Type 1', 'association' ),
				'2' => __( 'Design Type 2', 'association' ),
				'3' => __( 'Design Type 3', 'association' ),
				'4' => __( 'Design Type 4', 'association' )
			)
		)
	);	

	// Limit

	$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => __( 'Number of posts to display', 'association' ),
			'description' => __( 'Choose the number of posts to be displayed', 'association' ),
			'section' => 'sec_slider',
			'type' => 'number'
		)
	);	


}
add_action( 'customize_register', 'wpcurso_customizer' );

function wpcurso_sanitize_select( $input, $setting ){
 
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}