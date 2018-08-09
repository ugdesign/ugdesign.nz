<?php
/*
 Template Part Name: UGD Template Part for home page
*/
?>

<?php //echo "Template Part for Home Page";
   // This hook is used to render the following elements(ordered by priorities) :
    // slider
    // singular thumbnail
    do_action('__before_main_wrapper');
?>

<div id="main-wrapper" class="section">

    <?php
        /*
        * Featured Pages | 10
        * Breadcrumbs | 20
        */
        do_action('__before_main_container');
    ?>

    <div class="<?php czr_fn_main_container_class() ?>" role="main">

        <?php do_action('__before_content_wrapper'); ?>

        <div class="<?php czr_fn_column_content_wrapper_class() ?>">

            <?php do_action('__before_content'); ?>

            <div id="content" class="<?php czr_fn_article_container_class() ?>">

                <?php
                    do_action( '__before_loop' );
                    if ( have_posts() ) {
                        /**
                        * this will render the WordPress loop template located in templates/content/loop.php
                        * that will be responsible to load the page part template located in templates/content/singular/page_content.php
                        */
                        czr_fn_render_template( 'loop' );
                    }

                    /*
                     * Optionally attached to this hook :
                     * Comments | 30
                     */
                    do_action( '__after_loop' );
                ?>
            </div>

            <?php
                /*
                * Optionally attached to this hook :
                * Comments | 30
                */
                do_action('__after_content');
            ?>

            <?php
                /*
                * SIDEBARS
                */
                if ( czr_fn_is_registered_or_possible('left_sidebar') )
                    get_sidebar( 'left' );

                if ( czr_fn_is_registered_or_possible('right_sidebar') )
                    get_sidebar( 'right' );
            ?>

        </div><!-- .column-content-wrapper -->

        <?php do_action('__after_content_wrapper'); ?>

    </div><!-- .container -->

    <?php do_action('__after_main_container'); ?>

</div><!-- #main-wrapper -->

<?php do_action('__after_main_wrapper'); ?>

<?php if ( czr_fn_is_registered_or_possible('posts_navigation') ) : ?>
    <div class="container-fluid">
        <?php czr_fn_render_template( "content/singular/navigation/singular_posts_navigation" ); ?>
    </div>
<?php endif ?>