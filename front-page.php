<?php
get_header(); ?>

<div id="start">

<?php if (have_posts()) :
    while (have_posts()) :
       the_post();
          the_content();
    endwhile;
 endif;

 if ( is_active_sidebar( 'quote-start' ) ) :
    dynamic_sidebar( 'quote-start' );
    endif; ?>
</div>

<?php get_footer();