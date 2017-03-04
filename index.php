<?php
/*
* Plugin Name: Coffe Plugin
* Description: The coffe plugin
* Author: Jonatan Lampa
* Author URI: http://cliffhangerstudios.se
* Plugin URI: http://cliffhangerstudios.se
* Version: 1.0
*/

// For increased security
defined('ABSPATH') or die('No script kiddies please!');


/*
Om man separerar i olika filer
Require "namnet_på_file.php";
*/

// När pluginet aktiveras så hookar man på denna funktion som körs.
add_action('init', 'joppi_coffe_plugin');

function joppi_coffe_plugin() {

    // Rubriker för knappar i menyn etc
    $labels = array(
        'name'          => 'Produkter',
        'singular_name' => 'Shop Item',
        'add_new'       => 'Lägg till ny produkt',
        'edit_item'     => 'Redigera',
        'new_item'      => 'Lägg till ny produkt',
        'all_items'     => 'Alla produkter',
        'view_items'    => 'Visa produkter',
        'search_items'  => 'Sök produkter',
        'not_found'     => 'Hittade inga produkter',
        'not_found_in_trash' => 'Hittade inga produkter i papperskorgen',
        'menu_name'     => 'Produkter',
        );

    // Andra inställningar för CPT:n
    $args = array(
        'labels'        => $labels,
        'description'   => 'Produkter',
        'public'        => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-list-view',
        'supports'      => array(
                            'title',
                            'editor',
                            'thumbnail',
                            'author',
                            'excerpt',
                            'page-attributes'
                            ),
        'has_archive'   => true,
        'rewite'        => array(
                            'slug' => 'produkter',
                            'width_front' => true
                            )
    );

    // Får CPT:n att synas i menyn (samt registrera den)
    // Obs, skriv ej för långa namn
    register_post_type('joppi_coffe_plugin', $args);


    // Förfarande: 1. Labels 2. Inställningar 3. Registrera taxonomin

    $labels = array(
    'name'          =>  'Produkttyp',
    'singular_name' =>  'Produkttyp',
    'search_items'  =>  'Sök Produkttyp',
    'all_items'     =>  'Alla Produkttyper',
    'parent_item'   =>  'Huvudtyp',
    'parent_item-colon' =>  'Redigera Produkttyp',
    'uppdate_item'  =>  'Uppdatera Produkttyp',
    'add_new_item'  =>  'Lägg till Produkttyp',
    'new_item_name' =>  'Ny Produkttyp',
    'menu_name'     =>  'Produkttyper'
    );

    $args = array(
        'labels'    => $labels,
        'hierarchical' => true
    );

    // Aktivera taxonomin
    register_taxonomy('coffe_Produkttyper', 'joppi_coffe_post', $args);
}

