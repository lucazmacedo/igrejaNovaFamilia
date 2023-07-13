<?php
/**
 * MarketingTeam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MarketingTeam
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function marketingteam_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on MarketingTeam, use a find and replace
		* to change 'marketingteam' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'marketingteam', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'marketingteam' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'marketingteam_custom_background_args',
			array(
				'default-color' => '',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'marketingteam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marketingteam_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marketingteam_content_width', 640 );
}
add_action( 'after_setup_theme', 'marketingteam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marketingteam_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'marketingteam' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'marketingteam' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'marketingteam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function marketingteam_scripts() {
	wp_enqueue_style( 'marketingteam-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'marketingteam-style', 'rtl', 'replace' );

	wp_enqueue_script( 'marketingteam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'marketingteam-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marketingteam_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'portfolio', 'Post Type General Name', 'marketingTeam' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'marketingTeam' ),
        'menu_name'           => __( 'Portfolio', 'marketingTeam' ),
        'parent_item_colon'   => __( 'Parent portfolio', 'marketingTeam' ),
        'all_items'           => __( 'Todas produtos', 'marketingTeam' ),
        'view_item'           => __( 'Ver produtos', 'marketingTeam' ),
        'add_new_item'        => __( 'Adicionar novo produto', 'marketingTeam' ),
        'add_new'             => __( 'Adicionar novo', 'marketingTeam' ),
        'edit_item'           => __( 'Editar produto', 'marketingTeam' ),
        'update_item'         => __( 'Atualizar portfolios', 'marketingTeam' ),
        'search_items'        => __( 'Procurar produto', 'marketingTeam' ),
        'not_found'           => __( 'Não encontrado', 'marketingTeam' ),
        'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'marketingTeam' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'portfolio', 'marketingTeam' ),
        'description'         => __( 'portfolio', 'marketingTeam' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    // Registering your Custom Post Type
    register_post_type( 'Portfolio', $args );
  
}

/* Action para o registro da Custom Taxonomy Tipo de Produto */
add_action( 'init', 'create_custom_tax_tipo' );

/* Método para o registro da Custom Taxonomy Tipo de Produto */ 
function create_custom_tax_tipo(){
    $custom_tax_nome = 'portfolio_category';
    $custom_post_type_nome = 'portfolio';
    $args = array(
        'label' => __('Categorias'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'tipo')
    );
    register_taxonomy( $custom_tax_nome, $custom_post_type_nome, $args );
}
  
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
  
add_action( 'init', 'custom_post_type', 0 );

function mt_theme_style() {
    #### CSS
    wp_dequeue_style('style', get_template_directory_uri().'/assets/css/style.css');
}

// REMOVER CSS GUTENBERG CARREGADA AUTOMATICAMENTE COM O WORDPRESS
function smartwp_remove_wp_block_library_css(){
	/* wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_deregister_script('wp-mediaelement');
	wp_deregister_style('wp-mediaelement');
	 wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'admin-bar-css' ); */
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// IMPEDE QUE O CSS DO JETPACK SEJA RENDERIZADO NA PÁGINA
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );

/** Pagination */
function pagination_funtion() {
	
	// Get total number of pages
	global $wp_query;
	global $query;
  	$query = $query ? $query : $wp_query;
  	$big = 999999999;
	$paginate = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'type' => 'array',
    'total' => $query->max_num_pages,
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'prev_text' => __('&laquo;'),
    'next_text' => __('&raquo;'),
    )
  );
	if ($query->max_num_pages > 1) :
		echo '<nav aria-label="Page navigation" style="margin-top:20px;">';
			echo '<ul class="pagination justify-content-center">';
				foreach ( $paginate as $page ) {
					echo '<li class="page-item page-link">' . $page . '</li>';
				};
			echo '</ul>';
		echo '</nav>';
	endif;
	
}
/** END Pagination */