<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/CSS/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/CSS/theme.css'));
}

function planty_canette() {
    ob_start(); ?>
        <div class="container">
            <ul class="branche">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/gauche.png" alt="Gauche branches" class="branche-left" >
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/droite.png" alt="Droite branches" class="branche-right">
            </ul>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/canette.png" alt="Planty Energy Drink" class="can">
    </div>
    <?php return ob_get_clean();
}
add_shortcode('planty_display_canette', 'planty_canette');