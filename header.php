<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title><?php bloginfo('name'); ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/images/fevicon.png">
    
	<?php wp_head(); ?>
</head>
<body>

    <!-- Preloader starts -->
    <div class="mega-site-preloader-wrap">
        <div class="cont">
            <div class="line square"></div>
            <div class="line square2"></div>
            <div class="line square3"></div>
            <div class="line square4"></div>
        </div>
    </div>
    <!-- Preloader ends -->
    
    
    <div class="header-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    </div>
                    
                    <div class="responsive-menu-wrap"></div>
                </div>
                <div class="col-md-9">
                    <div class="mainmenu">
                        <ul id="navigation">
							<?php wp_nav_menu(array(
							'theme_location' => 'menu',
							'container'       => 'div',
							'container_id'       => 'mainmenu',
							'container_class'       => 'align-center',
							)); ?>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </div>