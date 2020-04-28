<?php /* Template Name: Contact */ 
get_header(); ?>

<div id="contact" class="wrapper">

<?php if (have_posts()) :
    while (have_posts()) :
       the_post();
          the_content();
    endwhile;
 endif;

 if ( is_active_sidebar( 'quote-contact' ) ) : ?>
 <div style="height:18em;"></div>
    <?php dynamic_sidebar( 'quote-contact' );
    endif;
?>

</div>

<?php get_footer();