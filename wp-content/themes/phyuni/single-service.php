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
                <h1>Services</h1>
            </div><!--condictn-text-section-->
        </div><!--container-->
    </div><!--overlay-->

</div><!-- home-banner -->	
	<div id="primary" class="content-area">
		<div class="container">
		<main id="main" class="site-main">
			<div class="min_servic_click">
		<?php
		while ( have_posts() ) : the_post();

			//get_template_part( 'template-parts/content', get_post_type() );
			?>
			<div class="blog-single">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		<?php if(has_post_thumbnail()):?>
		<div class="post_blog_image">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'home-services'); ?>">
		</div>
	<?php endif;?>
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php phyuni_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'phyuni' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'phyuni' ),
				'after'  => '</div>',
			) );
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php phyuni_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
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
		</main><!-- #main -->
	</div>
	</div><!-- #primary -->
<style type="text/css">
	/*.entry-title{display: none;}*/
</style>
<?php
get_sidebar();
get_footer();
