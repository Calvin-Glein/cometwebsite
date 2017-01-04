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

<!--        <?php if (has_post_thumbnail()) { ?> <img class="ui image smallcoverpic"-->
<!--                                                  src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"> <?php } ?>-->

<!--
        <h1 class="ui header dividing"><?php echo get_the_title(); ?>
            <div class="ui sub header"> <?php the_field('academicyearterm'); ?>
                 | <?php the_field('datestart'); if( get_field('timestart') ): ?> <?php the_field('timestart'); endif; if( get_field('dateend') ): ?>
                    - <?php the_field('dateend'); endif; if( get_field('timeend') ): ?> <?php the_field('timeend'); endif?> </div></h1>
-->
        
        
        <h1 class="ui header dividing"><?php echo get_the_title(); ?>
            <div class="ui sub header"> <?php the_field('academicyearterm'); ?>
                 | <?php the_field('datestart'); if( get_field('dateend') ): ?>
                    - <?php the_field('dateend'); endif; ?> </div></h1>
        <?php echo the_content(); ?>

        <h3 class="ui header dividing">Gallery</h3>
        <div class="ui four column grid">
        <?php 

        $images = get_field('gallery');

        if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                <div class="column">
                 <div class="card">
                    <div class="image">
                      <img src="<?php echo $image['url']; ?>">
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
        <?php endif; ?>
        </div>
        
        <div class="ui basic segment"></div>
    </div>

    <?php
endwhile;endif;
get_footer();
?>