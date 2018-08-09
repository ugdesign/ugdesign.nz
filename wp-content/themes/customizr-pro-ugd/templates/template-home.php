<?php
/* 
    Template Name: UGD Home Page Template
*/
?>
<?php if ( apply_filters( 'czr_ms', false ) ):
    /*
    *  This is the reference Custom Page Example template if you use the theme Modern style
    */
?>
    <?php get_header(); ?>
    <?php get_template_part( 'templates/parts/home/home_intro' ); ?>
    <?//php get_sidebar(); ?>
    <?php get_footer(); ?>
<?php endif ?>
?>