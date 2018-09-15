<?php 

/* template name: What our clients say*/



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



<div class="What-ourclients-say">

  <div class="container">
<?php if(have_rows('what_our_clients_say')):?>
<?php while(have_rows('what_our_clients_say')):the_row();?>
    <div class="clint-say">
      <div class="left_sayimg">
	  <?php if(get_sub_field('image')):?>
        <img src="<?php echo get_sub_field('image')['sizes']['client-image'];?>">
		<?php endif;?>
      </div>
      <div class="right_saythink">
        <h3><?php echo get_sub_field('title');?></h3>
        <p><?php echo get_sub_field('client_says');?></p>
        <h5><?php echo get_sub_field('name');?></h5>
      </div>  
    </div><!--clint-say-->
	<?php endwhile;?>
<?php endif;?>
  </div><!--container-->

</div><!--What-ourclients-say-->



<?php get_footer();