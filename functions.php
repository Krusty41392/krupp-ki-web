<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        // Elternebene-CSS
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'ample-bxslider','ample-fontawesome' ) );

        // Deine eigene CSS-Datei
        wp_enqueue_style( 'style.min', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/style.min.css', array(), '1.0', 'all' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

function enqueue_main_script() {
    ?>
    <script type="module">
        const script = document.createElement('script');
        script.type = 'module';
        script.src = '<?php echo esc_url(trailingslashit(get_stylesheet_directory_uri()) . 'assets/js/main.js'); ?>';
        document.body.appendChild(script);
    </script>
    <?php
}
add_action('wp_footer', 'enqueue_main_script');




// END ENQUEUE PARENT ACTION
