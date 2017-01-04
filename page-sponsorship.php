<?php
/**
 * Created by PhpStorm.
 * User: rissa
 * Date: 6/13/2016
 * Time: 9:53 AM
 */

get_header();
?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="ui container" id="content">

            <div class="ui basic segment headingc">
                <h1 class="ui header headerc">
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
            <div class="ui fitted divider"></div>

            <div class="ui basic segment" style = "text-align: justify; text-justify: inter-word; text-indent: 50px;">

                <!-- <?php the_content(); ?> -->

<?php echo get_template_directory(); ?>

Sponsorship is more than just an investment to sustain and help our laboratory grow. It offers an opportunity for our sponsors to reach a wide audience who strives for excellence and to partner with innovation-driven minds in enhancing our common goal of creating stimulating and significant outcomes for the benefit of the society. 
            </div>

            <h2 class="ui header dividing">Benefits</h2>

            <div class="ui stackable grid divided">
                <div class="row">
                    <div class="eight wide column left">
                        <div class="ui basic very padded  segment ">
                            <!--                                <div class = "ui basic segment noleftspace">-->
                            <h3 class="ui header" style="margin-top: 0">Recognition
                            </h3>
                            <p style = "text-align: justify; text-justify: inter-word; text-indent: 50px;">
                                COMET recognizes all sponsors as true partners and thus will go above and beyond to recognize and promote your organization. These recognitions comprise the inclusion of your logo and name in all promotional efforts on our events and in all of our related web pages and websites.

                            </p>
                            <!--                                </div>-->
                        </div>

                    </div>

		

     <!-- <div class="ui vertical divider">and</div> -->
                    <div class="eight wide column right">
                        <div class="ui basic very padded segment ">

                            <!--                                <div class = "ui basic segment noleftspace">-->
                            <h3 class="ui header" style="margin-top: 0">Research Partnership
                            </h3>
                            <p style = "text-align: justify; text-justify: inter-word; text-indent: 50px;">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.
                            </p>
                            <!--                                </div>-->
                        </div>
                    </div>

                </div>
            </div>


            <h2 class="ui header dividing">Interested?</h2>
            <!--        <div class="ui grid"> <div class="sixteen wide column">-->
            <div class="ui basic segment ">

                <p>
                    Leave us your contact details below. We will contact you as soon as possible with more detailed
                    information regarding sponsorships.</p>
                <?php echo do_shortcode('[contact-form-7 id="151" title="Contact form 1" html_class="ui form"]'); ?>
            </div>
            <!--            </div>-->
            <!--        </div>-->
        </div>


        <?php
    endwhile;
endif;
wp_reset_postdata();
get_footer();
?>