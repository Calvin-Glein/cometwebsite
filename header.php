<!DOCTYPE html>

<html>
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">

    <script src="<?php bloginfo('template_directory'); ?>/jquery-1.11.3.min.js"></script>

   

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/horizontal-timeline/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/horizontal-timeline/css/style.css"> <!-- Resource style -->
    <script src="<?php bloginfo('template_directory'); ?>/horizontal-timeline/js/modernizr.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/horizontal-timeline/js/main.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/uikit/js/uikit.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/uikit/js/components/slideshow.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/uikit/js/components/slideshow-fx.js"></script>

 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/Semantic-UI-master/dist/semantic.css"
          type="text/css" media="screen"/>
    <script src="<?php bloginfo('template_directory'); ?>/Semantic-UI-master/dist/semantic.min.js"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/uikit/css/uikit.css" type="text/css"
          media="screen"/>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/uikit/css/components/slideshow.css"
          type="text/css" media="screen"/>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/uikit/css/components/slidenav.css"
          type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/uikit/css/components/dotnav.css"
          type="text/css" media="screen"/>


    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.special.cards .image').dimmer({
                on: 'hover'
            });
        });
    </script>
</head>

<body <?php body_class(); ?>>

<!-- site-header -->
<div class="site-header">
    <!--        <h1><a href="--><?php //echo home_url(); ?><!--">--><?php //bloginfo('name'); ?><!--</a> </h1>-->
    <!--        <h5> --><?php //bloginfo('description'); ?><!-- </h5>-->


<!-- para sa make a file -glenn 
<?php touch('wp-content/themes/rissa/search.php');?> 

-->



    <div class="ui secondary pointing top attached menu">
        <div class="ui container">

            <a href="<?php bloginfo('url'); ?>"><img src="http://128.199.182.88/wp-content/uploads/2016/12/LONG-BLACK-1.png" style="margin-top: 50px; margin-right: auto; height: 75px; width: auto;"></a>
                <div class="right menu">
	



		

                <div class="right menu" >
		
	
	



            <?php
            //                $args = array( 'theme_location' => 'Primary');
            $menu_items = wp_get_nav_menu_items('Primary');


			?>
		<!-- change height below to determine height of all the parts of nav bar -->

 				<div style = "  height: 110px;  ">

			
			<div style = "margin-top: 80px; margin-right:10px;" ><?php get_search_form();?></div>
			</div>


		<?php
	

            foreach ((array)$menu_items as $key => $menu_item) {
                $title = $menu_item->title;
                $url = $menu_item->url; ?>

                <a href="<?php echo $url; ?>"
                   class="item <?php if (strcmp(get_the_title(), $title) == 0 || ($post->post_parent && strcmp(get_the_title($post->post_parent), $title) == 0) ) echo "active"; ?>">
                    <?php echo $title; ?>
                </a>
            <?php } ?>









	

	
        </div>

    </div>
</div>

</div> <!-- /site-header -->


