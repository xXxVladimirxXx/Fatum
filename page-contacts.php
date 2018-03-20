<?php
    /*
        Template Name: Page Contacts
        Template Post Type: page
    */
?>
    
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
<script src=https://maps.googleapis.com/maps/api/js?key=AIzaSyC49SAzpTOuUhPV7FprNKXEUJqcaoRmsu0&sensor=false' type='text/javascript'></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/gsite-map.js" type="text/javascript"></script>
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
<!-- header -->
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/about-finance-breadcroumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Контакты</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-envelope"></i>
						<?php $contacts = new WP_Query( array( 'post_type' => 'contacts' ) ); ?>
						<?php while ( $contacts->have_posts() ) : $contacts->the_post(); ?>
                        <p><a href="mailto:info@website.com"> <?php echo get_option('email'); ?></a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-phone"></i>
                        <p><a href="#"> <?php echo get_option('phone'); ?></a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-map-marker"></i>
                        <p> <?php echo get_option('address'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
					<form action="" method="post" name="massform" id="massform">
						<div class="fullwidth-form-wrapper">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input placeholder="Имя" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input placeholder="Тема сообщения" name="theme" id="theme" type="text">
									</div>
								</div>
							</div>

							<div class="form-group">
								<input placeholder="Email" name="email" id="email" type="email">
							</div>

							<div class="form-group">
								<input placeholder="Phone" type="tel">
							</div>

							<div class="form-group">
								<textarea placeholder="Message" name="message" id="mass" cols="30" rows="10"></textarea>
							</div>

							<button  name="submit" type="submit" id="submit">Отправить <i class="fa fa-angle-right"></i></button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
	
	<div class="specer-70"></div>
	
	<?php 
	$location = get_field('location');
	if( !empty($location) ): 
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
	<?php endif;?>

<?php get_footer(); ?>