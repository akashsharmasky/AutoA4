<?php
/**
 * The template for displaying all single service post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Phyuni
 */

get_header(); ?>
<div class="home-banner">
    <div class="banner-common-page">
	    <?php echo get_the_post_thumbnail( 39, 'large' ); ?>
	</div><!--banner-common-page-->
    <div class="overlay">
        <div class="container">
            <div class="over-text-section">
                <h1><?php echo single_term_title(); ?></h1>
            </div><!--condictn-text-section-->
        </div><!--container-->
    </div><!--overlay-->

</div><!-- home-banner -->
<div class="services-page">
<div class="home-servicess">
		<div class="container">
		<!--<h3>
		<?php echo single_term_title(); ?>
		</h3>

		<div class="down-line "></div>-->
			<ul>
	                <?php
	                   while ( have_posts() ) : the_post();

	                ?>
				<li>
					<div class="home-services-img">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'home-services'); ?>">
					</div>
					<h4><?php the_title();?></h4>
					<p><?php echo substr(strip_tags(get_the_content()),0,200); ?></p>
					<div class="service-readmore"><a href="<?php echo get_permalink();?>">Read More</a></div>
				</li>
				<?php
					endwhile;

			the_posts_navigation();
                  //}
                ?> 
			</ul>
		</div>
</div>
</div>
<?php
//get_sidebar();
get_footer();