<?php 

/* template name: Contact Us*/



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



<div class="Contact-Us-page">

	<div class="container">

	<div class="lft-section-contact">
		<?php 
			if(have_posts()):
				while(have_posts()):the_post();
		?>
			<?php the_content();?>
		<?php 
			 	endwhile;
			endif;
		?>
        <div class="root-inner">   

          <?php echo do_shortcode('[contact-form-7 id="62" title="Contact form 1"]');?>

        </div><!--root-inner-->

    </div><!-- lft-section-contact -->

    <div class="rgt-contact-section">



        <div class="footer-dwn ">

                    <!--<h4>SOCIALS</h4>-->

                    <div class="ftr-text contact-social">

                        <!--<ul>

                        <?php 
                        if(have_rows('social_media',78)):
                            while(have_rows('social_media',78)):
                            the_row();
                        ?>

                                <li>

                                	<a href="<?php echo get_sub_field('url');?>"><?php echo get_sub_field('icon');?></a>

                                </li>
                        <?php 
                            endwhile;
                        endif;
                        ?>  

                        </ul>-->

                    </div><!--ftr-text-->



            </div><!--footer-dwn-->



            <div class="contct-address">

                

                <ul>
                  <?php 
                    if(have_rows('right_sidebar')):
                    	while(have_rows('right_sidebar')):
                    		the_row();


                  ?>

                    <li>

                        <h3><?php the_sub_field('title');?></h3>

                        <span><?php the_sub_field('icon');?></span>

                        <?php the_sub_field('content');?>

                    </li>
                   <?php
                   		endwhile;
                   	   endif;
                   ?>

                </ul>

            </div><!-- contct-address -->

        

    </div><!--rgt-contact-section  -->

    </div><!--container-->

</div><!--About-us-page-->



<?php get_footer();