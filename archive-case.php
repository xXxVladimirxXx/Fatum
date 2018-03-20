<?php get_header(); ?>
 
<!-- header -->    
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/cta-bg-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Наши работы</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-block gray-bg">
        <div class="container">
            <div class="row">
			<?php $case = new WP_Query( array( 
				'post_type' => 'case',
				'posts_per_page'  => '12')
				); 
				$count_article = 0;
				?>
				<?php while ($case->have_posts()): $case->the_post(); ?>
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
					$count_article = $count_article + 1;
					if($count_article % 4 == 0) echo '<div class="specer-30"></div>';
					endwhile; ?>
            </div>
        </div>
    </div>   
    
<?php get_footer(); ?>  