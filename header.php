<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!--Bootstrap    -->
    <link rel="stylesheet" href="<?php get_stylesheet_uri()?>/assets/css/bootstrap.min.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="<?php get_stylesheet_uri()?>/assets/css/font-awesome/css/font-awesome.min.css">
    <!--Google-font-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<?php wp_head(); ?>

    <!-- for IE 9>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <!-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

    <!--header-->
    <header class="site-header" role="banner">
        <!--navbar-->
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
                    </div>

                    //create navbar in Dashboard
                    <?php
                        wp_nav_menu( array(
                                //which menu WordPress looking for
                                'theme_location' => 'primary',
                                'container' => 'nav',
                                'container_class' => 'navbar-collapse collapse',
                                'menu-_class' => 'nav navbar-nav navbar-right'
                            )
                        );
                    ?>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="resources.html">Resources</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </header>