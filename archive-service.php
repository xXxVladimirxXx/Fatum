<?php get_header(); ?>
<!-- header -->
       
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/cta-bg-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Архив сервисов</h2>
				</div>
            </div>
        </div>
    </div>	
	<div class="content-block">
		<div class="container">
			<div class="row">
			<?php $service = new WP_Query( array('post_type' => 'service', 'posts_per_page'  => '9')); ?>
			
			<?php if($service->have_posts()) : while ($service->have_posts()) : $service->the_post(); ?>
				<div class="col-sm-4">
					<div class="service-box-style-5">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="readmore-btn">Читать полностью  <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			<?php endwhile; else: ?>
				<p><?php _e('Ошибка: 404 Таких постов нет'); ?></p>
			<?php endif; ?>	
			</div>
		</div>
    </div>
    
    <div class="specer-70"></div>
    
    
    <div data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/cta-bg-4.jpg" class="cta-style-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-content-wrap">
                        <h2>Get a free quote from our experts</h2>
                        <p>Best support you might get from online</p>
                    </div>
                    <a href="get-a-quote-1.html" class="boxed-btn">Get a FREE quote <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>        
    </div>
    
<!--footer-->
<?php get_footer(); ?>