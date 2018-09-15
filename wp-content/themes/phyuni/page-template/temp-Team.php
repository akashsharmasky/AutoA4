<?php 
/* template name: Team*/

get_header();
?>

<div class="home-banner">
   <div class="banner-common-page">
   <!--<img src="<?php bloginfo('template_url');?>/images/contact-us.jpg">-->
   <?php the_post_thumbnail('banner-head');?>
</div><!--banner-common-page-->
   <div class="overlay">
       <div class="container">
           <div class="over-text-section">
               <h1><?php echo get_field('banner_title');?></h1>
           </div><!--condictn-text-section-->
       </div><!--container-->
   </div><!--overlay-->

</div><!-- home-banner -->

<?php 
/* 
 * Paginate Advanced Custom Field repeater
 */

if( get_query_var('page') ) {
  $page = get_query_var( 'page' );
} else {
  $page = 1;
}

// Variables
$row              = 0;
$images_per_page  = 4; // How many images to display on each page
$images           = get_field( 'about_us' );
$total            = count( $images );
$pages            = ceil( $total / $images_per_page );
$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
$max              = ( $min + $images_per_page ) - 1;

if(have_rows('about_us')):?>
<?php while(have_rows('about_us')):the_row();$row++;
if($row < $min) { continue; }

    // Stop loop completely if $row is higher than $max
    if($row > $max) { break; }

?>
<div class="About-us-page-content">
	<div class="container">
		<div class="about-wel-rgt">
		<?php if(get_sub_field('images')):?>
			<img src="<?php echo get_sub_field('images')['sizes']['about-thumbnail'];?>">
			<?php endif;?>
			<div class="image-border-wel"></div><!-- image-border-wel -->
		</div><!-- about-wel-rgt -->
		<div class="lft-wel-content">
			<span><?php echo get_sub_field('position');?></span>
			<h3><strong><?php echo get_sub_field('name');?></strong> <?php echo get_sub_field('post');?></h3>
			<h5><?php echo get_sub_field('certifications');?></h5>
			<div class="down-line "></div>
			
			<?php echo get_sub_field('content');?>
			
			<!-- <div class="service-readmore welcome-more"><a href="http://demotoday.info/phyuni/coming-soon">MORE FEATURES</a></div> -->
		</div><!-- lft-wel-content -->
	</div><!--container  -->
</div><!--About-us-page-->

<?php endwhile;
// Pagination
?>
<div class="container">
<div class="about-pagination">
<?php
  echo paginate_links( array(
    'base' => get_permalink() . '%#%' . '/',
    'format' => '?page=%#%',
    'current' => $page,
    'total' => $pages
  ) );

?>
</div>
</div>
<?php
endif;?>
<?php /*
<div class="About-us-page-content">
	<div class="container">
		<div class="about-wel-rgt">
			<img src="<?php bloginfo('template_url');?>/images/welcome-img.png">
			<div class="image-border-wel"></div><!-- image-border-wel -->
		</div><!-- about-wel-rgt -->
		<div class="lft-wel-content">
			<span>General Manager</span>
			<h3><strong>Dr. Gulerana </strong></h3>
			<h5>BPT, MPT (Ortho), CMT, CRT</h5>
			<div class="down-line "></div>
			<p>Dr. Gulerana is a qualified physiotherapist with 3 years of expertise including 1 year in Army Hospital Research & Referral. She is currently serving as the General Manager at Phyuni and looks after all the operations on a day to day basis. She is also in-charge of all patient enquiries, bookings, and payments along with overseeing all of the physiotherapy staff and Phyuni center.<br><br>
			She likes to hear when Phyuni is doing well and also welcomes any feedback from patients of Phyuni to improve the physiotherapy services we are offering.</p>
			<!-- <div class="service-readmore welcome-more"><a href="http://demotoday.info/phyuni/coming-soon">MORE FEATURES</a></div> -->
		</div><!-- lft-wel-content -->
	</div><!--container  -->
</div><!--About-us-page-->
*/?>
<!-- End of Repeater-->

<?php get_footer();