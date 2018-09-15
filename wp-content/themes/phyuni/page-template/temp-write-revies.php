<?php
/* template name: Write Reviews*/

get_header(); ?>
<div class="home-banner">
    <div class="banner-common-page">
	    <?php the_post_thumbnail('banner-head');?>
	</div><!--banner-common-page-->
    <div class="overlay">
        <div class="container">
            <div class="over-text-section">
                <h1><?php the_title();?></h1>
            </div><!--condictn-text-section-->
        </div><!--container-->
    </div><!--overlay-->

</div><!-- home-banner -->	
	<div id="primary" class="content-area">
		<div class="container">
		<main id="main" class="site-main">
			<div class="min_servic_click">
				<div class="custom-reviews1">
					<?php
					while ( have_posts() ) : the_post();

						//get_template_part( 'template-parts/content', 'page' );
						the_content();
						?>
						<div class="social-share-services">
						<?php //echo do_shortcode('[feather_share]');?>
						</div>
						<?php

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
         </div>
		</main><!-- #main -->
	</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
