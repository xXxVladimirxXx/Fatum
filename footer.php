    
    <div class="footer-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wid">
                        <h3><?php bloginfo('name'); ?></h3>
                        <p><?php bloginfo('description'); ?></p>
                        <?php $contacts = new WP_Query( array( 'post_type' => 'contacts' ) ); ?>
						<?php while ( $contacts->have_posts() ) : $contacts->the_post(); ?>
                        <p class="big-text"><i class="fa fa-envelope"></i> <?php echo get_option('email'); ?><br/>
						<i class="fa fa-phone"></i> <?php echo get_option('phone'); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wid">
                        <h4>Навигация</h4>
                        <ul>
                           <?php wp_nav_menu(array(
							'theme_location' => 'menu',
							'container'       => 'div',
							'container_id'       => 'mainmenu',
							'container_class'       => 'align-center',
							)); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-wid">
                        <h4>Контактная информация</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, sequi.</p>
                        <p> <?php echo get_option('address'); ?></p>
						<?php endwhile; ?>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright">© Copyright 2018 CrazyCafe</div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Bootstrap JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    
    <!-- Magnific Popup JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.magnific-popup.min.js"></script>
    
    <!-- OwlCarousel JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script>
    
    <!-- Parallax JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/parallax.min.js"></script>
    
    <!-- WOW JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/wow-1.3.0.min.js"></script>
    
    <!-- SlickNav JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.slicknav.min.js"></script>
    
    <!-- PerfectScrollbar JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-perfect-scrollbar.min.js"></script>
    
    <!-- Active JS -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/active.js"></script>
	
	<?php wp_footer(); ?>
</body>
</html>