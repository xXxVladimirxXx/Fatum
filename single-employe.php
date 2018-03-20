<?php get_header(); ?>   
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/about-finance-breadcroumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Наша команда</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php the_post_thumbnail();?>
                </div>
                
                <div class="col-md-5 col-md-offset-1">
                    <div class="team-desc">
                        <h2>
							<?php the_title(); ?> 
							<span><?php echo get_field('должность'); ?></span>
						</h2>
                        <div class="row ">
							<div class="col-xs-4 desc-title">
								<span>CSS3/HTML5</span>
							</div>
							<div class="col-xs-8">
								<div class="progress">
								  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_field('css3/html5'); ?>%"><?php echo get_field('css3/html5'); ?>%
								  </div>
								</div>
							</div>
						</div>	
						<div class="row ">
							<div class="col-xs-4 desc-title">
								<span>Native JS</span>
							</div>
							<div class="col-xs-8">
								<div class="progress">
								  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_field('native_js'); ?>%"><?php echo get_field('native_js'); ?>%
								  </div>
								</div>
							</div>
						</div>	
						<div class="row ">
							<div class="col-xs-4 desc-title">
								<span>JQuery and Libs</span>
							</div>
							<div class="col-xs-8">
								<div class="progress">
								  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_field('jquery_and_libs'); ?>%"><?php echo get_field('jquery_and_libs'); ?>%
								  </div>
								</div>
							</div>
						</div>	
						<div class="row ">
							<div class="col-xs-4 desc-title">
								<span>PHP and OOP</span>
							</div>
							<div class="col-xs-8">
								<div class="progress">
								  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_field('php_and_oop'); ?>%"><?php echo get_field('php_and_oop'); ?>%
								  </div>
								</div>
							</div>
						</div>	
						<div class="row ">
							<div class="col-xs-4 desc-title">
								<span>WordPress API</span>
							</div>
							<div class="col-xs-8">
								<div class="progress">
								  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_field('wordpress_api'); ?>%"><?php echo get_field('wordpress_api'); ?>%
								  </div>
								</div>
							</div>							
                        </div>
						
                        <div class="social-icons">
                            <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="content-block gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
					<?php while ( have_posts() ) : the_post(); ?>
                    <h3>Информация: </h3>
                    <p><?php the_content(); ?></p>
					<?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>   
         
<?php get_footer(); ?>