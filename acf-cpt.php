<?php
/**
 * Template Name: Category India

 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demo
 */

get_header();
?>
<div class="container">
<div class="row">

<?php

//openion post begin here
$featurePosts = new WP_Query('post_type=country&cat=2');

if ($featurePosts->have_posts()) :
while ($featurePosts->have_posts()) : $featurePosts->the_post(); ?>


<?php

// check if the repeater field has rows of data
if( have_rows('country_information') ):

 	// loop through the rows of data
    while ( have_rows('country_information') ) : the_row(); ?>
<div class="col-md-4">
<?php the_sub_field('country_name'); ?>
<?php the_sub_field('country_description'); ?>
<img src="<?php the_sub_field('country_image'); ?>">

</div>
<?php    endwhile;

else :

    // no rows found

endif;

?>



</div>
</div>


<?php endwhile;

else :

//fallback

endif;
wp_reset_postdata();
?>


<?php

get_footer();

