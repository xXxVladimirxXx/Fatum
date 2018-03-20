<?php get_header(); ?>
<!-- header -->
    
    <div class="hero-area wow fadeInUp">
        <div class="homepage-slidesn">
            <div class="single-slide-item slide-01">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="slide-text">
								<h2><?php bloginfo('name'); ?></h2>
                                <h4><?php bloginfo('description'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="content-block">
        <div class="container">
			<div class="row">
				<?php $service = new WP_Query( array( 
				'post_type' => 'service',
				'posts_per_page'  => '6')
				); 
				$i = 0;
				$count_article_service = 0;
				?>
				
				<?php while ($service->have_posts()): $service->the_post(); $i++;?>
					<div class="col-sm-4">
						<div class="single-service-item wow fadeInUp" <?php if($i > 1) echo 'data-wow-delay="1.' .$i. 's"'; ?>>
							<h3><?php the_title(); ?></h3>
							<p><?php $content = get_the_content();
								echo wp_trim_words( $content, 10, '...' );
							?></p>
							<a href="<?php the_permalink(); ?>" class="readmore-btn">Читать полностью<i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					<?php
					$count_article_service = $count_article_service + 1;
					if($count_article_service == 3) echo '<div class="specer-70 hidden-xs"></div>';
					endwhile; ?>
			</div>
		</div>
    </div>
	
    <div class="content-block gray-bg">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="section-heading">
					<h2><a href="">Наши работы</a></h2>
				</div>
			</div>
		</div>
		<div class="container">
            <div class="row">
				
				<?php $case = new WP_Query( array( 'post_type' => 'case') ); $count_article_case = 0;?>
			
				<?php if($case->have_posts()) : while ($case->have_posts()) : $case->the_post(); ?>
				
					<div class="col-md-3 col-sm-6">
						<a href="<?php the_permalink(); ?>" class="single-agency-project">
							<div style="background-image: url(<?php the_post_thumbnail_url();?>)" class="project-bg">
								<i class="fa fa-link"></i>
							</div>
							<div class="agency-project-info">
								<h3><?php the_title(); ?></h3>
								<?php the_tags(''); ?>
							</div>
						</a>
					</div>
				<?php
				$count_article_case = $count_article_case + 1;
					if($count_article_case == 4) echo '<div class="specer-30"></div>';
					
				endwhile; else: ?>
					<p><?php _e('Ошибка: 404 Таких постов нет'); ?></p>
				<?php endif; ?>	
            </div>
        </div>
	</div>  
	
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2>Наша команда</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
			
				<?php $employe = new WP_Query( array( 'post_type' => 'employe', 'posts_per_page' => 3 ) ); ?>
				 
				<?php while ( $employe->have_posts() ) : $employe->the_post(); ?>
				 
                <div class="col-sm-4"><a href="<?php the_permalink(); ?>">
                    <div class="team-member-style-2">
                        <img src="<?php the_post_thumbnail_url();?>" alt="Фото сотрудника" style="height: 430px;" />
                        <h4><?php the_title(); ?> <span><?php echo get_field('должность'); ?></span></h4>
                    </div>
                </a></div>
				
				<?php endwhile; ?>
            </div>
        </div>
    </div>
		
    <div class="content-block gray-bg wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">
					Комментарии.</h3>
                    
                    <div class="testimonial-carousel">
                        <div class="single-testimonial-item">
                            <div class="testimonial-content">
                                <p>In on announcing if of comparison pianoforte projection. Maidsgay yet bed asked blind dried point. On abroad danger likely regretedward do. Too horrible consider followed may differed age.</p>
                            </div>
                            
                            <div class="testimonial-author-info">
                                <img src="assets/img/author.jpg" alt="">
                                <h4>James Cameron</h4>
                                CEO, Open Work Challenge
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="testimonial-content">
                                <p>In on announcing if of comparison pianoforte projection. Maidsgay yet bed asked blind dried point. On abroad danger likely regretedward do. Too horrible consider followed may differed age.</p>
                            </div>
                            
                            <div class="testimonial-author-info">
                                <img src="assets/img/author-2.jpg" alt="">
                                <h4>John Doe</h4>
                                Marketing Officer, Open Work Challenge
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="testimonial-content">
                                <p>In on announcing if of comparison pianoforte projection. Maidsgay yet bed asked blind dried point. On abroad danger likely regretedward do. Too horrible consider followed may differed age.</p>
                            </div>
                            
                            <div class="testimonial-author-info">
                                <img src="assets/img/author.jpg" alt="">
                                <h4>James Cameron</h4>
                                CEO, Open Work Challenge
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--footer-->
<?php get_footer(); ?>