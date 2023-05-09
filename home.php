<?php /*Template Name: Página Inicial*/ ?> 

<?php get_header(); ?>

    <?php 
    
        get_template_part('template-parts/home/header');
        get_template_part('template-parts/home/hero');
        get_template_part('template-parts/home/beneficts');
        get_template_part('template-parts/home/percent');
        get_template_part('template-parts/home/form');
    
    ?>

<?php get_footer(); ?>