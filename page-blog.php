<?php
/**
* Template Name: blog
*/
?>
<?php  get_header('internal'); ?>
<div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
			<?php 

            $args = array(
                'post_type'=> 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
                );
                $result = new WP_Query( $args );
            if ( $result-> have_posts() ) : ?>
             <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
                    <div class="image-blog">
                                <a href="<?php the_permalink(); ?>">
                                   <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
                                </a>
                            </div>
                            <div class="meta-info-blog">
                                <span><i class="fa fa-calendar"></i> <a href="#"><?php echo get_the_date() ?> </a> </span>
                                <span><i class="fa fa-tag"></i> <?php the_category();   ?></span>
                                <span><i class="fa fa-comments"></i> <a href="#"><?php echo get_comments_number(); ?> Comments</a></span>
                            </div>
						<div class="blog-title">
							<h2><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2>
						</div>
						<div class="blog-desc">
							<p><?php the_excerpt() ?></p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="<?php the_permalink(); ?>"><span>Read More<span></a>
						</div>
					</div>
                </div><!-- end col -->
			 <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <?php  get_footer(); ?>