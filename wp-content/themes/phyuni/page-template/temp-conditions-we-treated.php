<?php 

/* template name: conditions we treated*/



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

    <div class="clint-say">
      <div class="left_sayimg">
        <img src="http://phyuni.com/wp-content/uploads/2017/11/galryimg1.jpg">
      </div>
        
    </div><!--clint-say-->

  </div><!--container-->

</div><!--What-ourclients-say-->



<?php get_footer();