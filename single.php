<?php get_header(); ?>
    <div class="dark-overlay page-heading-area" style="background-image: url(assets/img/post.jpg)">
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
                <div class="col-sm-8">
                    <article class="post wow fadeInUp">
                        <div class="featured-content">
                            <img src="assets/img/post.jpg" alt="">
                        </div>
                        
                        <div class="post-title-wrap">
                            <p><?php the_date(); ?> | Posted by <a href="">Admin</a></p>
                        </div>
                        
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    
				<div class="comments-area wow fadeInUp">
					<h3 class="comment-title"></h3>
					<ul class="comment-list">
					
							<li class="comment-item">
								<div class="row">
								</div>
							</li>
						</ul>

                        <h3 class="comment-form-title">Leave a comment</h3>
                        <div class="comment-form-wrap">
                            <form action="single-post.html">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" placeholder="Your name *"></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><input type="text" placeholder="Your name *"></p>
                                    </div>
                                </div>

                                <p><textarea placeholder="Message" name="message" id="message" cols="30" rows="10"></textarea></p>
                                <input type="submit" value="Submit comment">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="widget wow fadeInUp">
                        <form class="search-form" action="single-post.html">
                            <input type="search" placeholder="Type to search here...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    
                    <div class="widget recent_posts wow fadeInUp">
                        <h3 class="widget-title">Recent posts</h3>
                        <ul>
                            <li><a href="">How to Create a Countdown Timer With a Full Screen Background Video. <span>21st Nov, 2016</span></a></li>
                            <li><a href="">How to Re-Order Your Blog Posts (with 2 Methods) <span>21st Nov, 2016</span></a></li>
                            <li><a href="">How to Create a Countdown Timer With a Full Screen Background Video. <span>21st Nov, 2016</span></a></li>
                            <li><a href="">How to Re-Order Your Blog Posts (with 2 Methods) <span>21st Nov, 2016</span></a></li>
                        </ul>
                    </div>
                    
                    <div class="widget category_list wow fadeInUp">
                        <h3 class="widget-title">Category</h3>
                        <ul>
                            <li><a href="">Technology</a></li>
                            <li><a href="">Business</a></li>
                            <li><a href="">Education</a></li>
                            <li><a href="">Movies</a></li>
                            <li><a href="">Travel</a></li>
                            <li><a href="">Marketing</a></li>
                            <li><a href="">Development</a></li>
                            <li><a href="">Design</a></li>
                            <li><a href="">Sports</a></li>
                            <li><a href="">Music</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
<?php get_footer(); ?>