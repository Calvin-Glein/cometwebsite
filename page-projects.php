<?php
/**
 * Created by PhpStorm.
 * User: rissa
 * Date: 6/11/2016
 * Time: 12:18 AM
 */

get_header();
//?>

<div class="ui container" id="content">

    <div class="ui basic segment headingc">
        <h1 class="ui header headerc activesub">
            <?php echo get_the_title(); ?>
        </h1>
        <div class="headingsubc">
            <h3 class="ui header">
                <a href="<?php the_permalink(); ?>" class="activesub">All</a>
                <?php $this_page_id = $wp_query->post->ID; ?>

                <?php query_posts(array('showposts' => 20, 'post_parent' => $this_page_id, 'post_type' => 'page'));
                while (have_posts()) {
                    the_post(); ?>
                    |
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php }
                wp_reset_postdata(); ?>
            </h3>
        </div>
    </div>
    <div class="ui fitted divider"></div>

<!--    <div class="ui basic segment noverticalpad">-->
                        <div class="ui grid noverticalpad" style="margin-top: 30px">
        <?php
        wp_reset_query();
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => 10, 'paged' => $paged));
        if ($loop->have_posts()) :
        while ($loop->have_posts()) :
        $loop->the_post(); ?>
        <div class="row ui vertical segment">
            <?php if (has_post_thumbnail()) { ?>
            <div class="three wide column">
                <img class="ui image" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
            </div>
            <div class="thirteen wide column">
                <?php } else { ?>
                <div class="sixteen wide column"> <?php } ?>

                    <h2 class="ui header"><a href="<?php the_permalink(); ?>" style="text-decoration:none;"> <?php echo the_title(); ?></a>
                        <div class="ui sub header mini"><?php $categories = get_the_category();
                            echo esc_html($categories[0]->name); ?></div>
                    </h2>
                    <p style = "text-align: justify; text-justify: inter-word;">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>

        </div>

        <div class="ui basic very padded center aligned segment ">
            <?php
            if (function_exists(custom_pagination)) {
                custom_pagination($loop->max_num_pages, "", $paged);
            }

            endif;
            wp_reset_postdata();
            ?>
        </div>


    </div>
<!--    </div>-->


    <?php
    wp_reset_postdata();
    get_footer();
    ?>

