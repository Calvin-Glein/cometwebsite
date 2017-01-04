<?php
/**
 * Created by PhpStorm.
 * User: rissa
 * Date: 6/11/2016
 * Time: 12:18 AM
 */

get_header();

//if(have_posts()) :
//    while(have_posts()) : the_post(); ?>
<!---->
<!--        <h2><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a> </h2>-->
<!---->
<!--        <p>--><?php //the_content(); ?><!--</p>-->
<!--        --><?php
//    endwhile;
//else:
//    echo '<p>No content found</p>';
//
//endif;
//echo "events working";
//?>

<div class="ui container" id="content">


    <!--    <h1 class="ui dividing header">-->
    <!--        Events-->
    <!---->
    <!--    </h1>-->


    <div class="ui basic segment headingc">
        <!--        <div class="headingsubc" >-->
        <!--            <h3>Go Forward | Go backWard </h3>-->
        <!--        </div>-->
        <h1 class="ui header">
            <?php echo get_the_title(); ?>
        </h1>
    </div>
    <div class="ui fitted divider"></div>

<!--    <div class="ui basic segment noverticalpad">-->
                        <div class="ui grid noverticalpad" style="margin-top: 30px">
        <?php
        wp_reset_query();
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $loop = new WP_Query(array('post_type' => 'updates', 'posts_per_page' => 10, 'paged' => $paged));
        if ($loop->have_posts()) :
        while ($loop->have_posts()) :
        $loop->the_post(); ?>
        <div class="row ui vertical segment">

                <div class="sixteen wide column">

                    <h2 class="ui header"><a href="<?php the_permalink(); ?>"> <?php echo the_title(); ?></a>
                        <div class="ui sub header mini"><?php the_field('date'); ?></div>
                    </h2>
                    <p><?php echo get_the_excerpt(); ?></p>
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

