<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/CSS/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/CSS/theme.css'));
}

function add_items_menu($items, $args) {
    if ($args->theme_location == 'primary') {
        // Convertit les éléments du menu en tableau
        $menu_items = explode('</li>', $items);
        // Lien Admin à ajouter
        $admin_link = '<li class="centrerAdmin"><a href="' . admin_url() . '" class="adm">Admin</a></li>';
        // Position où insérer le lien (après le deuxième élément)
        $position = 1;
        // Insère le lien Admin à la position spécifiée
        array_splice($menu_items, $position, 0, $admin_link);
        // Reconstruit le menu à partir du tableau modifié
        $items = implode('</li>', $menu_items);
        // Ajoute le tag de fermeture '</li>' au dernier élément
        if (substr($items, -5) !== '</li>') {
            $items .= '</li>';
        }
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_items_menu', 10, 2);


// if (is_user_logged_in() && $args->theme_location == 'primary') {
       
//     $menu_items = explode('</li>', $items);
    
//     $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';
  
//     $position = 2;
   
//     array_splice($menu_items, $position, 0, $admin_link);
    
//     $items = implode('</li>', $menu_items);
// }
// return $items;



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

// ***************************************************************************************************

function planty_fraise() {
    ob_start(); ?>
    <div class= "case_fraise">
        <input <?php echo get_stylesheet_directory_uri(); ?> type="number" class="centrer" name="montant" min="0" step="0.01" required>
    </div>
    <?php return ob_get_clean();

}
add_shortcode('planty_display_fraise', 'planty_fraise');