<?php

function honeykeeper_setup() {
	// Add support for dynamic title tag
	add_theme_support( 'title-tag' );

	// Add support for post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Register a primary menu
	register_nav_menus( [
		'primary' => __( 'Primary Menu', 'honeykeeper' ),
	] );
}

add_action( 'after_setup_theme', 'honeykeeper_setup' );

function honeykeeper_enqueue_scripts() {
	wp_enqueue_style( 'honeykeeper-style', get_stylesheet_uri(), false, time() );

	wp_enqueue_script( 'honeykeeper-main', get_template_directory_uri() . '/js/main.min.js', [ 'jquery' ], time(), true );
}

add_action( 'wp_enqueue_scripts', 'honeykeeper_enqueue_scripts' );

//============================================
//--------------- Add "Options" page
//============================================

function theme_options_menu() {
	add_theme_page( 'Настройки шаблона', 'Настройки шаблона', 8, 'option-theme-page', 'theme_options' );
}

add_action( 'admin_menu', 'theme_options_menu' );
function theme_options() {
	?>
    <h1>Настройки шаблона</h1>
    <form method="post" action="options.php">
		<?php wp_nonce_field( 'update-options' ); ?>
        <p>Реферальная ссылка:</p>
        <input type="text" name="ref_link" value="<?php echo get_option( 'ref_link' ); ?>" style="width:400px;"><br><br>
        <input type="hidden" name="action" value="update"/>
        <input type="hidden" name="page_options" value="ref_link"/>
        <input type="submit" class="btn btn-success" value="<?php _e( 'Save Changes' ) ?>">
    </form>
<?php }

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => 'Настройки шаблона',
		'menu_title' => 'Настройки шаблона',
		'menu_slug'  => 'theme-general-settings',
	) );
}
