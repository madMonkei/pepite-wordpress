<?php
add_action('widgets_init','pepite_add_sidebar');
function pepite_add_sidebar()
{
    if ( function_exists('register_sidebar'))
    {
    	register_sidebar(array(
            'id' => 'widg_head_up',
            'name' => 'Zone header haute',
            'description' => 'Apparait avant le menu',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        ));
        register_sidebar(array(
            'id' => 'widg_center_up',
            'name' => 'Zone centrale haute',
            'description' => 'Apparait avant le contenu',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
        ));
    }
}

add_action('init', 'pepite_add_menu');
function pepite_add_menu()
{
	register_nav_menu('main_menu', 'Menu principal');
    register_nav_menu('footer_menu', 'Menu de pied de page');
}

