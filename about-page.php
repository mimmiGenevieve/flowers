<?php /* Template Name: About */ 

get_header(); ?>

<div id="about" class="row wrapper">

<div class="col-lg-6">
<?php if (have_posts()) :
    while (have_posts()) :
       the_post();
          the_content();
    endwhile;
 endif;
?>
</div>

<?php
if ( is_active_sidebar( 'right-text-box-about' ) ) :
dynamic_sidebar( 'right-text-box-about' );
endif; ?>

</div>

<?php get_footer();