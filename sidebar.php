<div class="col-sm-4">
	<div class="widget">
		<?php get_search_form(); ?>
	</div>
	
	<div class="widget recent_posts">
		<h3 class="widget-title">Недавние посты</h3>
		<ul>
			<?php $wpQuery = new WP_Query( 'post_type = post & posts_per_page=4');
				if ( $wpQuery->have_posts() ) :
					while($wpQuery->have_posts()): $wpQuery->the_post();  ?>
						<li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> <span> <?php the_date('j F Y'); ?> </span></a></li>
		   <?php endwhile; endif; ?>
	   </ul>
	</div>
	
	<div class="widget category_list">
		<h3 class="widget-title">Категории</h3>
		<ul>
			<li><a href=""><?php wp_list_categories(); ?></a></li>
		</ul>
	</div>
	
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div>