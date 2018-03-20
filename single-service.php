<?php get_header(); ?>
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/cta-bg-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Сервисы</h2>
                </div>
            </div>
        </div>
    </div>
	
    <div class="content-block">
        <div class="container">
		 <?php while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                <div class="col-sm-6">
                    <h3>Что сюда входит</h3>
					<?php the_excerpt(); ?>
                </div>
            </div>
			<?php endwhile; ?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="service-wide-img">
                        <?php the_post_thumbnail();?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
     
 <?php get_footer(); ?>   