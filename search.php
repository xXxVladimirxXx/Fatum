<?php get_header(); ?>
<!-- header -->  

    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/about-finance-breadcroumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Последние записи</h2>
				</div>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
					<h1>Поиск по: "<?php echo get_search_query(); ?>"</h1><br>
					<?php 
					$count_article = 0;
					
					if(have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-sm-6">
                            <a href="<?php the_permalink(); ?>" class="single-boxed-item wow fadeInUp">
                                <div class="boxed-preview" style="background-image: url(<?php the_post_thumbnail_url();?>)"></div>
                                <h4><?php the_title(); ?></h4>
                                <p style="height: 15px;"><?php the_date('j F Y'); ?></p>
                            </a>
                        </div>
					<?php
					$count_article = $count_article + 1;
					if($count_article % 2 == 0) echo '</div><div class="row">';

					endwhile; else: ?>
						<p><?php _e('Ошибка: Поиск ничего не дал.'); ?></p>
					<?php endif; ?>
                    </div>
				
                    <div class="blog-pagination">
                        <ul class="pagination">
                            <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
                        </ul>
                    </div>
                </div>
          
				<?php get_sidebar(); ?>
            </div>
        </div>
    </div>   
 <!--footer-->
<?php get_footer(); ?>