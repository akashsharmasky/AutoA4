<?php 
/* template name: services*/

get_header();
?>


<div class="home-banner">
    <div class="banner-common-page">
	    <?php the_post_thumbnail('large');?>
	</div><!--banner-common-page-->
    <div class="overlay">
        <div class="container">
            <div class="over-text-section">
                <h1><?php the_title();?></h1>
            </div><!--condictn-text-section-->
        </div><!--container-->
    </div><!--overlay-->

</div><!-- home-banner -->	

<div class="services-page">

	<div class="home-servicess">
		<div class="container">
			<?php
				if(have_posts()):
					while(have_posts()):the_post();
			?>
					<?php the_content();?>
			<?php
					endwhile;
				endif;
			?>
			<br/>
			<!--<div class="down-line "></div>-->
			 <?php
                $lastposts = query_posts( array(
                'post_type' => 'service',
                'order'	=>'DESC',
                'posts_per_page' => 9,
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
					<div class="home-services-img">
						<?php the_post_thumbnail('home-services');?>
					</div>
					<h4><?php the_title();?></h4>
					<p><?php echo substr(strip_tags(get_the_content()),0,200); ?></p>
					<div class="service-readmore"><a href="<?php echo get_permalink();?>">Read More</a></div>
				</li>
				<?php
					endforeach; 
                    wp_reset_postdata();
                  }
                ?> 
			</ul>
			 <?php wp_pagenavi(); ?>  
		</div><!-- container -->
	</div><!--home-servicess-->

	

</div><!--services-page-->

<?php get_footer();