<?php
/* Template Name: Home */
get_header();
while(have_posts()): the_post();
?>

hello

<?php 
endwhile;
get_footer();