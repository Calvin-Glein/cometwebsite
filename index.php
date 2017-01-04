<?php
/**
 * Created by PhpStorm.
 * User: rissa
 * Date: 6/11/2016
 * Time: 12:18 AM
 */

get_header();

?>
<h1><?php the_title(); ?></h1>
<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <p><?php the_content(); ?></p>
        <?php
    endwhile;
else:
    echo '<p>No content found</p>';

endif;

get_footer();
?>
