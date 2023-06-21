<?php

function custom_themes_assets() {
    if(is_page_template('home.php')) {
        wp_enqueue_style( 'common-project', get_template_directory_uri().'/css/common/common.css' );
        wp_enqueue_style( 'header-project', get_template_directory_uri().'/build/style/header.css' );
        wp_enqueue_style( 'hero-project', get_template_directory_uri().'/css/home/hero.css' );
        wp_enqueue_style( 'beneficts-project', get_template_directory_uri().'/css/home/beneficts.css' );
        wp_enqueue_style( 'percent-project', get_template_directory_uri().'/css/home/percent.css' );
        wp_enqueue_style( 'form-project', get_template_directory_uri().'/css/home/form.css' );
        wp_enqueue_style( 'footer-project', get_template_directory_uri().'/css/common/footer.css' );
    }
}

add_action('wp_enqueue_scripts', 'custom_themes_assets');