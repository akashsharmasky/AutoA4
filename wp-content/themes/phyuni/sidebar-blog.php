<div class="right-side-blog">
                <div class="serch-blog">
                  <h3>Search in Blog</h3>
                  <div class="down-line Blog"></div>
                  <form method="get" action="<?php echo home_url()?>">
                      <input id="mysearch2" type="search" placeholder="search" name="s">
                      <input type="hidden" name="post_type" value="post" />
                      <input type="submit" class="search-submit">
                  </form>
                </div>
                <div class="datecomt">
                  <h3>ARCHIVE</h3>
                  <div class="down-line Blog"></div>
                    <ul>
                    <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
                    </ul>

                        <!-- <ul>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">jan 2017</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">feb 2017</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Mar 2017</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Apr 2017</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">May 2017</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Jun 2017</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">jul 2017</a></li>
                        </ul> -->
                </div>
                <div class="galery-blog">
                  <h3>ARCHIVE</h3>
                  <div class="down-line Blog"></div>
                        <ul>
                            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/sideinner1.jpg"></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/sideinner2.jpg"></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/sideinner1.jpg"></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/sideinner2.jpg"></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/sideinner1.jpg"></a></li>
                            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/sideinner2.jpg"></a></li>
                        </ul>
                </div>
                <div class="blog-post">
                  <h3>RECENT BLOG POSTS</h3>
                  <div class="down-line Blog"></div>
                  <ul>
                      <?php
                            $args = array( 'numberposts' => '5' );
                            $recent_posts = wp_get_recent_posts( $args );
                            //print_r($recent_posts);
                            foreach( $recent_posts as $recent ){
                      ?>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><p><a href="<?php echo get_permalink($recent['ID']);?>"><?php echo $recent["post_title"];?></a></p> <div class="date-time"><a href="javascript:void(0)"><?php echo date('F d, Y', strtotime($recent['post_date'])); ?> at <span><?php echo date('h:i a',strtotime($recent['post_date'])); ?></span></a></div></li>
                      <?php    }
                        wp_reset_query();
                      ?>
                  </ul>

                        <!-- <ul>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><p><a href="#">A Facelift Post-Recovery in a Time-Lapse</a></p><div class="date-time"><a href="#">June 21, 2016 at <span>8:12pm</span></a></div></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><p><a href="#">What is Reconstruction Surgery?</a></p><div class="date-time"><a href="#">June 21, 2016 at <span>8:12pm</span></a></div></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><p><a href="#">A Facelift Post-Recovery in a Time-Lapse</a></p><div class="date-time"><a href="#">June 21, 2016 at <span>8:12pm</span></a></div></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><p><a href="#">What is Reconstruction Surgery?</a></p><div class="date-time"><a href="#">June 21, 2016 at <span>8:12pm</span></a></div></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i><p><a href="#">A Facelift Post-Recovery in a Time-Lapse</a></p><div class="date-time"><a href="#">June 21, 2016 at <span>8:12pm</span></a></div></li>
                        </ul> -->
                </div> 

                <div class="banner-blog-thry">
                   <?php $Image = wp_get_attachment_image_src( get_field('right_side_bottom_image',47),'medium_large');?>
                   <img src="<?php echo $Image[0];?>">
                </div>

            </div><!--right-side-blog-->