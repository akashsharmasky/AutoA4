<?php 
/* template name: Blog*/

get_header();
?>

<div class="home-banner">
    <div class="banner-common-page">
	<?php if(has_post_thumbnail()):?>
        <?php the_post_thumbnail('medium_large');?>
    <?php endif;?>
	    <!-- <img src="<?php //bloginfo('template_url');?>/images/services-banner.jpg"> -->
	</div><!--banner-common-page-->
    <div class="overlay">
        <div class="container">
            <div class="over-text-section">
                <h1><?php the_title();?></h1>
            </div><!--condictn-text-section-->
        </div><!--container-->
    </div><!--overlay-->

</div><!-- home-banner -->

<div class="Blog-page">
    <div class="container">
        
        <div class="fixed-main-blog">
            <div class="left-side-blog"> 
            <?php
                $lastposts = query_posts( array(
                'posts_per_page' => 3,
                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
                ) );
            ?>
                <ul>
                    <?php
                        if ( $lastposts ) {                       
                        foreach ( $lastposts as $post ) :
                        setup_postdata( $post ); 

                    ?>
                    <li>
                        <div class="img_blog">
                            <?php the_post_thumbnail('blog_thumbnail');?>
                        </div>
                        <div class="blog-lidwn">
                            <h2><?php the_title(); ?></h2>
                            <div class="down-line Blog"></div>
                            <p><?php echo substr(strip_tags(get_the_content()),0,200); ?></p>
                            <div class="commnt">By <?php echo ucfirst(get_the_author());?>
                                <a href="#"><span><?php the_time('F j, Y g:i a') ?></span></a>
                            </div>
                            <div class="blog_button">
                                <a href="<?php echo get_permalink();?>">READ MORE</a>
                            </div>
                        </div>
                    </li>
                    <?php
                    
                     
                        endforeach; 
                        wp_reset_postdata();
                        }
                    ?>                   
                </ul>    
                <?php wp_pagenavi(); ?> 
            </div><!--left-side-blog-->
           <?php get_sidebar('blog');?>
        </div><!--fixed-main-blog-->
       
    </div><!--container-->
</div><!--Blog-page-->

<?php get_footer();