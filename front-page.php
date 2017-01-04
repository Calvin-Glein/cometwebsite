Skip to main contentSkip to toolbar

Dashboard
Home
Updates 
7

Posts
All Posts
Add New
Categories
Tags

Media
Library
Add New

Pages
All Pages
Add New

Comments

Members
All Members
Add New
Categories
Tags

Projects
All Projects
Add New
Categories
Tags

Featured
All Featured
Add New

Events
All Events
Add New
Categories
Tags

Updates
All Updates
Add New
Categories

Papers
All Papers
Add New

Appearance
Themes
Customize
Menus
Editor

Plugins
Installed Plugins
Add New
Editor

Users
All Users
Add New
Your Profile

Tools
Available Tools
Import
Export
Connection Types

Settings
General
Writing
Reading
Discussion
Media
Permalinks
Google Fonts

Custom Fields
Field Groups
Add New
Tools
Updates

CPT UI
Add/Edit Post Types
Add/Edit Taxonomies
Registered Types/Taxes
Import/Export
Help/Support
About CPT UI
Collapse menu
About WordPress
COMET
71 WordPress Update, 6 Theme Updates
00 comments awaiting moderation
New
Howdy, root
Log Out
Help WordPress 4.7 is available! Please update now.
Edit Themes
LearningWordPress: Static Front Page (front-page.php)
Select theme to edit:    Select

Templates
Theme Footer
(footer.php)
Static Front Page
(front-page.php)
Theme Functions
(functions.php)
Theme Header
(header.php)
Main Index Template
(index.php)
page-about-us.php
page-alumni.php
page-cohorts.php
page-development.php
page-events.php
page-faculty.php
page-news.php
page-people.php
page-projects.php
page-research.php
page-sponsorship.php
Search Results
(search.php)
Search Form
(searchform.php)
single-event.php
single-members.php
single-project.php
single-updates.php
Styles
Stylesheet
(style.css)

<?php
/**
 * Created by PhpStorm.
 * User: rissa
 * Date: 6/11/2016
 * Time: 12:18 AM
 */

get_header();
?>
    <div class="ui container" id="content">
        <div class="uk-slidenav-position heavybottom" data-uk-slideshow="{autoplay:true, animation: 'swipe'}">
            <ul class="uk-slideshow  uk-overlay-active">
                <?php
                $loop = new WP_Query(array('post_type' => 'any', 'category_name' => 'featured'));
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php if (has_post_thumbnail()) { ?>
                            <li>
                                <!--                                    <a href="--><?php //the_permalink(); ?><!--">-->
                                <img class="ui image coverpic"
                                     src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                                <!--                                        <a href="-->
                                <?php //the_permalink(); ?><!--">--><?php //the_post_thumbnail(); ?><!--</a>-->
                                <!--                                     </a>-->
                                <figcaption 
                                    class="uk-overlay-panel uk-overlay-right uk-overlay-background uk-overlay-fade"
                                    style="width: 25%"><h3><?php echo get_the_title(); ?></h3>
                                    <p style  = "text-align: justify; text-justify: inter-word;"><?php echo wp_strip_all_tags(excerpt(40)); ?></p></figcaption>
                                <!--                                        <figcaption class="uk-overlay-panel uk-overlay-right uk-overlay-background uk-overlay-fade" style="width: 25%"><h3>hi</h3><p>hello</p></figcaption>-->

                            </li>
                        <?php } ?>
                    <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </ul>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
               data-uk-slideshow-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                <li data-uk-slideshow-item="0"><a href=""></a></li>
                <li data-uk-slideshow-item="1"><a href=""></a></li>
            </ul>
        </div>

        <div class="ui basic segment nospaces">
            <div class="ui stackable grid">
                <div class="row">
                    <div class="eight wide column left">


                        <h1 class="ui header comethead">
				<a href="http://128.199.182.88/?page_id=84" class = "darkgreen" style = " text-decoration:none; font-weight: bold;
" >
                        	    Development
				</a>
			</h1>


                        <div class="ui segment strong nospaces">

                            <div class="ui two column grid">

                                <?php
                                $temp = new WP_Query(array('post_type' => 'project', 'category_name' => 'development'));
                                if ($temp->have_posts()) {
                                        $temp->the_post();

                                    while ($temp->have_posts() && !has_post_thumbnail()) : $temp->the_post();
                                        endwhile;?>

                                        <div class="column">
                                            <?php if (has_post_thumbnail()) { ?>
                                                <img class="ui image featuredpic"
                                                     src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="column">
                                            <div class = "ui basic segment noleftspace">
                                            <h2 class="ui dividing header" style="margin-top: 0 "><a
                                                    href="<?php the_permalink(); ?>" style="text-decoration:none;">  <?php echo the_title(); ?></a>
                                            </h2>
                                            <p style = "text-align: justify; text-justify: inter-word;">
                                                <?php echo excerpt(40); ?>
                                            </p>
                                                </div>
                                        </div>

                                    <?php  }
                                wp_reset_postdata(); ?>
                            </div>
                        </div>

                    </div>
                    <div class="eight wide column right">
                        <h1 class="ui header comethead">
				<a href="http://128.199.182.88/?page_id=88" class = "darkgreen" style = " text-decoration:none; font-weight: bold;
">
                             		Research
				</a>
                        </h1>
                        <div class="ui segment strong nospaces ">

                            <div class="ui two column grid">

                                <?php
                                $temp = new WP_Query(array('post_type' => 'project', 'category_name' => 'research'));
                                if ($temp->have_posts()) {
                                    $temp->the_post();

                                    while ($temp->have_posts() && !has_post_thumbnail()) : $temp->the_post();
                                    endwhile;?>

                                    <div class="column">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <img class="ui image featuredpic"
                                                 src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="column">

                                        <div class = "ui basic segment noleftspace">
                                        <h2 class="ui dividing header" style="text-decoration:none; margin-top: 0"><a
                                                href="<?php the_permalink(); ?>" style="text-decoration:none;"> <?php echo the_title(); ?></a>
                                        </h2>
                                        <p style = "text-align: justify; text-justify: inter-word;">
                                            <?php echo excerpt(40); ?>
                                        </p>
                                            </div>
                                    </div>

                                <?php  }
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="eight wide column left">
                        <h1 class="ui header comethead">
                            <a href="http://128.199.182.88/?page_id=115" class = "darkgreen" style = " text-decoration:none; font-weight: bold;
">
                            	 News
			    </a>
			</h1>
                        <div class="ui segment strong  nospaces">

                            <div class="ui two column grid">

                                <?php
                                $temp = new WP_Query(array('post_type' => 'updates'));
                                if ($temp->have_posts()) {
                                    $temp->the_post();

                                    while ($temp->have_posts() && !has_post_thumbnail()) : $temp->the_post();
                                    endwhile;?>

                                    <div class="column">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <img class="ui image featuredpic"
                                                 src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="column">

                                        <div class = "ui basic segment noleftspace">
                                        <h2 class="ui dividing header" style="text-decoration:none; margin-top: 0"><a
                                                href="<?php the_permalink(); ?>" style="text-decoration:none;"> <?php echo the_title(); ?></a>
                                        </h2>
                                        <p style = "text-align: justify; text-justify: inter-word;">
                                            <?php echo excerpt(40); ?>
                                        </p>
                                            </div>
                                    </div>

                                <?php  }
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>


 	



                    <div class="eight wide column right">

                        <h1 class="ui header comethead">
   				<a href="http://128.199.182.88/?page_id=368" class = "darkgreen" style = " text-decoration:none; font-weight: bold;
">
                           	  Events
				</a>
                            </h1>
                        <div class="ui segment strong nospaces">

                            <div class="ui  two column  grid">

                                <?php
                                $temp = new WP_Query(array('post_type' => 'event'));
                                if ($temp->have_posts()) {
                                    $temp->the_post();

                                    while ($temp->have_posts() && !has_post_thumbnail()) : $temp->the_post();
                                    endwhile;?>

                                    <div class="column">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <img class="ui image featuredpic"
                                                 src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="column">
                                        <div class = "ui basic segment noleftspace">
                                            <h2 class="ui dividing header" style="text-decoration:none; margin-top: 0"><a
                                                    href="<?php the_permalink(); ?>"style="text-decoration:none;"> <?php echo the_title(); ?></a>
                                            </h2>
                                            <p style = "text-align: justify; text-justify: inter-word;">
                                                <?php echo excerpt(40); ?>
                                            </p>
                                        </div>

                                    </div>

                                <?php  }
                                wp_reset_postdata(); ?>
                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="ui basic segment"></div>
    </div>

<?php

get_footer();

?>
Documentation:  	 Look Up
Update File

Thank you for creating with WordPress. Get Version 4.7