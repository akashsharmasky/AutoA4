<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Phyuni

 */



?>

	</div><!-- #content -->



	<footer id="colophon" class="site-footer">


    <div class="newsletter">
        <h3>Subscribe To AutoA4 Newsletter</h3>
        <?php echo do_shortcode('[mailpoet_form id="1"]');?>        
    </div>
        



		<div class="footer-section">

		    <div class="footer-top">

                <div class="ftr-left">

	                <div class="footer-set-inner">

                        <h4><?php the_field('footer_c',78);?></h4>

                        <h2><?php the_field('footer_get',78);?></h2>

                        <div class="footer-line"></div>

                        <p><?php the_field('footer_main',78);?></p>

                        <div class="addres">

                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
                            
                        	<p><?php the_field('footer_addres',78);?></p>
                            
                            <p class="soonadrs"><?php the_field('footer_soon',78);?></p>                              
                        </div>

                        <div class="addres">
                        	<i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Send us a Message:</span>
                        	<a href="mailto:<?php the_field('footer_e',78);?>"><?php the_field('footer_e',78);?></a>
                        </div>
                        <!-- <p class="cllnow">Give us a Call:</p>  -->
                        <span>Give us a Call: 
							<?php if(have_rows('footer_call',78)):?>
							<?php 
							$i=1;
							while(have_rows('footer_call',78)):the_row();?>
								<a href="tel:<?php echo get_sub_field('phone_no');?>"><?php echo get_sub_field('phone_no');?></a>
							<?php
							if($i==1){
								echo ',';
							}
							$i++;
							endwhile;endif;?>
						
						
						</span>

	                </div><!--footer-set-inner-->

                </div>

                <div class="ftr-right-map">

                   <div style="width: 100%"><?php echo get_field('footer_map',78);?></div><br />                              

                </div>

            </div><!--footer-top-->

            <div class="footer-dwn">

                <div class="container">

                    <p><?php the_field('dwn_copy',78);?></p>

                    <div class="ftr-text">


                        <ul>
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
                        </ul>

                    </div><!--ftr-text-->

	            </div><!--container-->

            </div><!--footer-dwn-->

		</div><!--footer-section-->

	</footer><!-- #colophon -->

</div><!-- #page -->



<?php wp_footer(); ?>



</body>

</html>

