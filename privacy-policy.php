<?php  /* Template Name: Privatumo Politika */ ?>

<?php get_header(); ?>

    <?php 
        $the_query = get_posts( array (
            'pagename'     => 'Privatumo Politika'
            ));

        while(have_posts()) :
            the_post();
            the_content();
        endwhile;
    ?>


<?php get_footer();