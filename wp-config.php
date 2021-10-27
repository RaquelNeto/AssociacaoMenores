<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'wpbanco' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '*>K?F4TU9@4fc  9jj,A,E<e}}^D^;G05[Sbja F#_>Y72dwa[2x#_~{o=ok}h4Q' );
define( 'SECURE_AUTH_KEY', ']hC%Kfao_~SkQQfJB1+Xp@4-_i!wz;sz<#-ZSg/_|I |M{c1+b WmX:.EZU2MG{3' );
define( 'LOGGED_IN_KEY', 'UBTyB^le3K~:q@qc^X ?RAkXpOuG*|_?xv^Zs2dvA@%zgTYJ/ :jjfvTwAu( t|F' );
define( 'NONCE_KEY', 'Id^[.7,d<3lPDtgnn0u1/ !ln%`<5)j/)|$5r:]2o;GJLxHdZX$l1E{6xNWq@:)x' );
define( 'AUTH_SALT', 'K_ms5[tCj62q{wxbj!3Mw/luWww@3-06_1}`yAr!tBe;Q:.I@Bj(0GB+%E{FPW60' );
define( 'SECURE_AUTH_SALT', 'bDch=(IzYHi<ig&E/W=4=Ox#t5zj26nm%&*z@ie8_*IjX<#6<ia;sQ7/EOi@JOtL' );
define( 'LOGGED_IN_SALT', 'A)9lzis>v{iK)n?QqF$~EIX~%O^*[{s(Y|kyh1L;(gm*EYz=<TA@v5~^Z/Z@,O%&' );
define( 'NONCE_SALT', 'WxbJq@gw&%FT[HPZDJ(f,yy=7cQ^.:O)}X@_dw:TI+/~,R.jY%GNXPUA9l;yJ90K' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wpcrs_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );
