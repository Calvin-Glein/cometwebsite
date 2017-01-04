<?php
/**
 * Created by PhpStorm.
 * User: rissa
 * Date: 6/13/2016
 * Time: 9:53 AM
 */

get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="ui container" id="content">

        <?php if (has_post_thumbnail()) { ?> <img class="ui image smallcoverpic"
                                                  src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"> <?php } ?>

        <h1 class="ui header dividing"><?php echo get_the_title(); ?>
        <div class="ui sub header"><?php the_field('date'); ?></div></h1>
        <?php echo the_content(); ?>
        <div class="ui basic segment"></div>
    </div>

    <?php
endwhile;endif;
get_footer();
?>