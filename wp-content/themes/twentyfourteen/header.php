<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_stylesheet_uri()); ?>" />

    <!-- Mobile Stuff + CSS -->
    <link rel = "stylesheet" type = "text/css" href = "assets/mobile.css?ver=1.02" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 user-scalable=0">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|Gentium+Book+Basic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Questrial|Montserrat+Alternates|Press+Start+2P' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/icons/favicon.png?ver=1.02"/>

    <!-- Smooth Scrolling -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script>
        var jump=function(e)
        {
            //prevent the "normal" behaviour which would be a "hard" jump
            e.preventDefault();
            //Get the target
            var target = $(this).attr("href");
            //perform animated scrolling
            $('html,body').animate(
                {
                    //get top-position of target-element and set it as scroll target
                    scrollTop: $(target).offset().top
                    //scrolldelay: 2 seconds
                },1300,function()
                {
                    //attach the hash (#jumptarget) to the pageurl
                    location.hash = target;
                });

        }

        $(document).ready(function()
        {
            $('a[href*=#]').bind("click", jump);
            $('a[id*="project"]').click(toggle);
            function toggle() {
                prefix = this.id.split('_')[0];
                switchMenu(prefix + '_projects');
                switchMenu(prefix + '_project_up');
                switchMenu(prefix + '_project_down')
            }
        });
    </script>

    <!-- Display Switcher -->
    <script type = "text/javascript">
        function switchMenu(obj)
        {
            var el = document.getElementById(obj);
            el.style.display = el.style.display.length ? '' : 'none';
        }
    </script>
    <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<!-- Container for the header; spans entire width of page -->
<div class = "header_container" id = "top">
    <!-- Container for main nav and banner; spans 1024px and centers on page -->
    <div class = "header">
        <!-- Banner -->

        <div class = "banner_container">
            <a href = "<?php echo esc_url( home_url( '/' ) ); ?>" class = "banner"></a>
        </div>
        <!-- Main nav -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'main_nav_container', 'menu_class' => 'main_menu' ) ); ?>

    </div>
</div>

<!-- Contains the meat of the page -->
<div class = "container">
    <!-- Meat of the page -->
    <div class = "meat">

        <!-- Container for meat header, image, and tagline -->
        <?php if ( get_header_image() ) : ?>
        <div class = "meat_header_container">
            <!-- The title -->
            <div id = "header" class = "meat_header">
                <h3 style = "color:#efefef">Northeastern University CCIS</h3>
                <h1 style = "color:#efefef;font-family: 'Questrial';">Undergraduate Experimental Systems Group</h1>
            </div>
            <!-- Image Slide Show -->
            <div id = "bgcarousel_shell">
                <img src = "<?php header_image(); ?>" width="100%"/>
            </div>
            <!-- The tagline -->
            <div id = "tagline" class = "meat_header">
                <h3 class = "tagline">
                    <?php bloginfo( 'description' ); ?>
                </h3>
            </div>
            <!--- / container -->
        </div>
        <?php endif; ?>
