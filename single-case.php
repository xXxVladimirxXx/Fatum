<?php get_header(); ?>       
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/cta-bg-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Наши работы</h2>
                    <p>The ultimate multipurpose Business Theme that you can use for any of your business or clients.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="work-slider">
                        <img src="<?php bloginfo('template_url'); ?>/img/work-slide-1.jpeg" alt="">
                        <img src="<?php bloginfo('template_url'); ?>/img/work-slide-2.jpg" alt="">
                        <img src="<?php bloginfo('template_url'); ?>/img/work-slide-3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-8">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <div class="spacer-30"></div>
                </div>
			<?php endwhile; ?>
                <div class="col-md-4">
                    <div class="white-box">
                        <h3>Информация о работе</h3>
                        <ul class="project-info">
                            <li><span>Клиент:</span> <?php echo get_field('клиент'); ?></li>
                            <li><span>Дата:</span> <?php echo get_field('дата'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Похожие работы</h3>
                    <div class="row">
					
					<?php $case = new WP_Query( array( 'post_type' => 'case', 'posts_per_page'  => '4') ); ?>
					<?php if($case->have_posts()) : while ($case->have_posts()) : $case->the_post(); ?>
					
                        <div class="col-md-3 col-sm-6">
                            <a href="single-work-agency.html" class="single-agency-project">
                                <div style="background-image: url(<?php the_post_thumbnail_url();?>)" class="project-bg">
                                    <i class="fa fa-link"></i>
                                </div>
                                <div class="agency-project-info">
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_tags(''); ?>
                                </div>
                            </a>
                        </div>
						<?php endwhile; else: ?>
							<p><?php _e('Ошибка: 404 Таких постов нет'); ?></p>
						<?php endif; ?>	
                    </div>
                </div>
            </div>
        </div>
    </div>   
    
<?php get_footer(); ?>