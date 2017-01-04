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
            <div class="five wide column">

                <?php if (has_post_thumbnail()) { ?><img class="ui image large"
                                                         src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"> <?php } ?>
                <br>
                <b>Status:</b> <?php the_field('status'); ?> <br><br>
                <b>Tags:</b>
<!--                --><?php //$tags = get_tags(); ?>
<!--                    --><?php //foreach ( $tags as $tag ) { ?>
<!--                        <a class="ui basic label" href="--><?php //echo get_tag_link( $tag->term_id ); ?><!-- " rel="tag">--><?php //echo $tag->name; ?><!--</a>-->
                        <?php the_tags( '', ', ', '<br />' ); ?>
<!--                    --><?php //} ?>

                <h3 class="ui header dividing">Team Members</h3>
                <div class="ui vertical list">
                    <?php
                    // Find connected weeks
                    $connected = new WP_Query(array(
                        'connected_type' => 'working', // the name of your connection type
                        'connected_items' => get_queried_object(),
                        'nopaging' => true,
                    ));

                    if ($connected->have_posts()) : ?>

                        <?php while ($connected->have_posts()) : $connected->the_post(); ?>
                            <div class="item" >
                                <img class="ui mini circular image"
                                     src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" style = "height: 50px; width = auto;" >
                                <div class="content">
                                    <div class="ui sub header" ><a
                                            href="<?php the_permalink() ?>"  style = "font-size: 125%;" ><?php echo get_the_title(); ?> </a></div>
                                    <?php $categories = get_the_category();
                                    echo esc_html($categories[0]->name); ?>
                                </div>
                            </div>
                            <br>
                        <?php endwhile; ?>
                        <?php
                        // Prevent weirdness
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>


            </div>
            <div class="eleven wide column">
                <h1 class="ui header dividing" >Project Name: <?php echo get_the_title(); ?></h1>
                <div style = "text-indent: 50px; text-align: justify; text-justify: inter-word;" ><?php the_content(); ?></div>
                <h2 class="ui header dividing" >Timeline</h2>
             <section class="cd-horizontal-timeline">
                    <div class="timeline"> 
                       <div class="events-wrapper">
                            <div class="events">
                                <ol>

                                    <?php if (have_rows('timeline')):

                                        $i=0;
                                        // loop through the rows of data
                                        while (have_rows('timeline')) : the_row();

                                            // display a sub field value
                                            ?>

                                            <li><a href="#0" data-date="<?php the_sub_field('date');?>" <?php if($i==0){ ?>class="selected" <?php }?>><span class="date"><?php the_sub_field('date');?></span></a></li>


                                            <?php
                                        $i++;
                                        endwhile;

                                    endif;

                                    ?>
                                </ol>

                                <span class="filling-line" aria-hidden="true"></span>
                           </div>
                        </div>

                        <ul class="cd-timeline-navigation">
                            <li><a href="#0" class="prev inactive">Prev</a></li>
                            <li><a href="#0" class="next">Next</a></li>
                        </ul>
                    </div>
                    
                    
                    
                    
                    <div class="events-content">
		<ol>
        
        
         <?php if (have_rows('timeline')):

                                        $j=0;
                                        // loop through the rows of data
                                        while (have_rows('timeline')) : the_row();

                                            // display a sub field value
                                            ?>
                                            
			<li data-date="<?php the_sub_field('date');?>" <?php if($j==0){ ?>class="selected" <?php }?>>
				<h2 style="font-family: Arial, sans-serif; font-size: 2.0em;">  <?php the_sub_field('checkpoint');?></h2>
					<p style="font-family: Arial, sans-serif; font-size: 1.0em;">	
					 <?php the_sub_field('date');?>
				</p>
			</li>
 
  <?php
                                        $j++;
                                        endwhile;

                                    endif;

                                    ?>
		
		</ol>
	</div> <!-- .events-content -->
    
                    
                    
                    
                 </section>

            </div>
        </div>

    </div>

<?php
endwhile;
endif;
get_footer();
?>