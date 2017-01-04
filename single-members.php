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


        <div class="ui grid">
            <div class="four wide column">

                <?php if (has_post_thumbnail()) { ?><img class="ui image large"
                                                         src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"> <?php } ?>

                <?php if(in_category('faculty')) { ?>
                    <br>
                    <b>Rank: </b> <?php the_field('rank'); ?> <br><br>
                    <b>Research Fields: </b>  <?php if (have_rows('field')):

                        // loop through the rows of data
                        while (have_rows('field')) : the_row();
                            ?>

<!--                            <span class="ui basic label">-->
                            <?php the_sub_field('research'); ?>
<!--                        </span>-->
                            <?php
                        endwhile;

                    endif;

                }
                else{?>
                    <br>
                    <b>Batch: </b> <?php the_field('batch'); ?> <br>
                    <b>Degree: </b> <?php the_field('degree'); ?>

                    <?php
                }
                ?>
            </div>
            <div class="twelve wide column">
                <h1 class="ui header dividing"><?php echo get_the_title(); ?></h1>
                <div style = "text-align: justify; text-justify: inter-word; text-indent: 50px;"> <?php the_content(); ?> </div>

                <?php if (in_category('faculty')) { ?>



                    <h2 class="ui header dividing">Papers</h2>
                    <div class="ui three column grid" style="margin-top: 10px">


                    <?php
                    $paperz = new WP_Query(array(
                        'connected_type' => 'researched', // the name of your connection type
                        'connected_items' => get_queried_object(),
                        'nopaging' => true,
                    ));


                    p2p_type('researched')->each_connected($paperz, array(), 'members');

                    if ($paperz->have_posts()) : ?>

                        <?php while ($paperz->have_posts()) :
                            $paperz->the_post(); ?>


                            <div class="column">
                                <div class="ui card">
                                    <div class="content">
                                        <div class="header"><?php echo the_title(); ?></div>
                                        <div class="description">
                                            <?php echo get_the_content(); ?>
                                        </div>
                                    </div>
                                    <a href="<?php the_field('link'); ?>" class="ui bottom attached button">
                                        View Paper

                                    </a>
                                </div>


                            </div>

                            

                        <?php endwhile; endif;
                } ?>

                <h2 class="ui header dividing">Projects</h2>


                <div class="ui three column grid" style="margin-top: 10px">


                    <?php
                    // Find connected weeks
                    $connected = new WP_Query(array(
                        'connected_type' => 'working', // the name of your connection type
                        'connected_items' => get_queried_object(),
                        'nopaging' => true,
                    ));


                    p2p_type('working')->each_connected($connected, array(), 'members');

                    if ($connected->have_posts()) : ?>

                        <?php while ($connected->have_posts()) :
                            $connected->the_post(); ?>

                            <div class="column">
                                <div class="ui card">
                                    <div class="content">

                                        <?php if (in_category('research')) { ?><span
                                            class="ui blue right ribbon label"><?php $categories = get_the_category();
                                            echo esc_html($categories[0]->name); ?></span>
                                        <?php } else { ?><span
                                            class="ui orange right ribbon label"><?php $categories = get_the_category();
                                            echo esc_html($categories[0]->name); ?></span> <?php } ?>

                                        <div class="header"><a
                                                href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></div>
                                        <div class="meta">
                                    <span
                                        class="category"><?php echo p2p_get_meta($post->p2p_id, 'role', true); ?></span>
                                        </div>
                                        <div class="description">
                                            <?php echo get_the_excerpt(); ?>
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <?php
                                        foreach ($post->members as $post) : setup_postdata($post);
                                            ?>

                                            <div class="right floated author">
                                                <a href="<?php echo the_permalink(); ?>"><img class="ui avatar image"
                                                                                              title="<?php echo get_the_title(); ?>"
                                                                                              alt="<?php echo get_the_title(); ?>"
                                                                                              src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"></a>
                                            </div>

                                            <?php
                                        endforeach;

                                        wp_reset_postdata();
                                        ?>

                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php
                        // Prevent weirdness
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

        </div>


    </div>

    <?php
endwhile;
endif;
get_footer();
?>