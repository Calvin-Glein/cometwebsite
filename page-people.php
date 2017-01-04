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
        <h1 class="ui header headerc">
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

    <div class="ui five column grid" style="margin-top: 30px">
<!--        <div class = "ui four cards">-->
        <?php
        $counting = 0;
        wp_reset_query();
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $loop = new WP_Query(array('post_type' => 'members', 'posts_per_page' => 20, 'paged' => $paged));

        p2p_type('working')->each_connected($loop, array(), 'project');
        if ($loop->have_posts()) :
        while ($loop->have_posts()) :
            $loop->the_post(); $counting++; ?>
            <div class="column">
<!---->
<!--                --><?php //if($counting%5==0) { ?><!-- <div class = "ui cards"> --><?php //} ?>
                <!--                    <div class="ui link cards">-->
                <div class="ui card fillcolumn">
                    <?php if (has_post_thumbnail()) { ?>
                        <a class="image" href="<?php echo the_permalink(); ?>">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                        </a>
                    <?php } ?>
                    <div class="content">
                        <a class="header" href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                        <div class="meta">
                            <div><?php $categories = get_the_category();
                                echo esc_html($categories[0]->name); ?></div>
                        </div>
                        <div class="description" style = "text-align: justify; text-justify: inter-word;">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="extra content">
                              <span class="right floated">
                                  <?php

                                  $count = sizeof($post->project);
                                  //                                  foreach ( $post->project as $post ) : setup_postdata( $post );
                                  //                                      $count = $count+1;
                                  //                                  endforeach;

                                  //                                  wp_reset_postdata();

                                  if ($count != 1) echo $count . " Projects";
                                  else echo $count . " Project";
                                  ?>
                              </span>
                    </div>
                </div>


<!--                    --><?php //if($counting%5==4) { ?><!-- </div> --><?php //} ?>

                <!--                    </div>-->
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


<?php
wp_reset_postdata();
get_footer();
?>
