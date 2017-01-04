<?php
/**
 * Created by PhpStorm.
 * User: rissa
 * Date: 6/13/2016
 * Time: 9:53 AM
 */

get_header();
?>


<?php //if (have_posts()) : ?>
    <!--    --><?php //while (have_posts()) : the_post(); ?>
    <div class="ui container" id="content">

        <div class="ui basic segment headingc">
            <h1 class="ui header headerc">
                <?php echo get_the_title(); ?>
            </h1>
        </div>
        <div class="ui fitted divider"></div>

        <div class="ui basic segment">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap
                into electronic typesetting, remaining essentially unchanged.
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap
                into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                since
                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged.
            </p>

        </div>

        <!--            <div class="ui basic segment nospaces">-->
        <!--                <div class="ui stackable grid">-->
        <!--                    <div class="row">-->
        <!--                        <div class="sixteen wide column left">-->
        <h2 class="ui header comethead">
            Our Vision</h2>
        <div class="ui segment strong nospaces">

            <div class="ui two column grid">
                <div class="six wide column">
                    <img class="ui image featuredpic"
                         src="http://localhost:4040/wordpress/wp-content/uploads/2016/06/research.png">
                </div>
                <div class="ten wide column">
                    <div class="ui basic segment noleftspace">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type
                            and
                            scrambled it to make a type specimen book. It has survived not only five centuries, but also
                            the
                            leap
                            into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--                        </div>-->
        <!--                        <div class="sixteen wide column left">-->
        <h2 class="ui header comethead">
            Our Mission</h2>
        <div class="ui segment strong nospaces">
            <!---->
            <div class="ui two column grid">
                <div class="ten wide column">
                    <div class="ui basic segment">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type
                            and
                            scrambled it to make a type specimen book. It has survived not only five centuries, but also
                            the
                            leap
                            into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
                <div class="six wide column">
                    <img class="ui right floated image featuredpic"
                         src="http://localhost:4040/wordpress/wp-content/uploads/2016/06/research.png">
                </div>

            </div>
        </div>

        <br> <br>
 <br> <br>
<!--        <div class="ui very padded basic segment">-->
            <div class="ui three column relaxed grid">
                <div class="column">

                    <div class="ui segment strong nospaces">
                        <div class="row">
                            <img class="ui image featuredpic"
                                 src="http://localhost:4040/wordpress/wp-content/uploads/2016/06/research.png">

                        </div>
                        <div class="row">
                            <div class="ten wide column">
                                <div class="ui basic segment">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type
                                        and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the
                                        leap
                                        into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">

                    <div class="ui segment strong nospaces">
                        <div class="row">
                            <img class="ui image featuredpic"
                                 src="http://localhost:4040/wordpress/wp-content/uploads/2016/06/research.png">

                        </div>
                        <div class="row">
                            <div class="ten wide column">
                                <div class="ui basic segment">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type
                                        and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the
                                        leap
                                        into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">

                    <div class="ui segment strong nospaces">
                        <div class="row">
                            <img class="ui image featuredpic"
                                 src="http://localhost:4040/wordpress/wp-content/uploads/2016/06/research.png">

                        </div>
                        <div class="row">
                            <div class="ten wide column">
                                <div class="ui basic segment">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer
                                        took a galley of type
                                        and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the
                                        leap
                                        into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
<!--        </div>-->

        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--            </div>-->

        <div class="ui basic segment"></div>
    </div>


<?php
//    endwhile;
//endif;
wp_reset_postdata();
get_footer();
?>