<?php 
/*
Template Name: about
Template Post Type: page
*/
get_header(); ?>
<!-- header -->
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/about-construction-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>История появления</h2>
                   <?php while (have_posts()): the_post(); ?>
					<p><?php the_content(); ?></p>
				   <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Репортаж</h2>
                    <div class="spacer-30"></div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo get_field('видео_(ссылка)'); ?>" width="640" height="360"></iframe>
                    </div>
                </div>
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
<!--footer-->
<?php get_footer(); ?>