<?php 
/* template name: Gallery*/

get_header();
?>
 <?php
                    if( have_rows( 'gallery_images' ) ) :  $i=1; ?>
                   
                  <?php while( have_rows( 'gallery_images' ) ): the_row();

                   // $row++;

                    // Ignore this image if $row is lower than $min
                    //if($row < $min) { continue; }

                    // Stop loop completely if $row is higher than $max
                    //if($row > $max) { break; } 
                    $image_full = wp_get_attachment_image_src( get_sub_field('image'),'full');
                    //print_r($image_full);
                    ?>  
                    <!-- bootstrap modal -->
                        <div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <!-- <h4 class="modal-title">Modal Header</h4> -->
                                </div>
                                <div class="modal-body">
                                    <?php 

                                       
                                    ?>
                                  <img src="<?php echo $image_full[0]; ?>" id="image">
                                </div>
                                <!-- <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
                              </div>
                              
                            </div>
                          </div>
                          
                         <!-- End of modal -->
                  <?php 
                        $i++;
                      endwhile;
                  endif;
                    
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

<div class="Gallery-page">
    <div class="container">
      
        <div class="gallery-img">
            <ul>
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
                    $images_per_page  = 8; // How many images to display on each page
                    $images           = get_field( 'gallery_images' );
                    $total            = count( $images );
                    $pages            = ceil( $total / $images_per_page );
                    $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
                    $max              = ( $min + $images_per_page ) - 1;
                    if( have_rows( 'gallery_images' ) ) :  $i=1; ?>
                   
                  <?php while( have_rows( 'gallery_images' ) ): the_row();

                    $row++;

                    // Ignore this image if $row is lower than $min
                    if($row < $min) { continue; }

                    // Stop loop completely if $row is higher than $max
                    if($row > $max) { break; } 
                    $image_attributes = wp_get_attachment_image_src( get_sub_field('image'),'thumbnail');
                    ?>                     
                    <li>
                   <div class="dwn-arow">                                                                               
                    <div class="mid-lims zoom-gallery" data-toggle="modal" data-target="#myModal<?php echo $i;?>">
                        <img width="379" height="260" src="<?php echo $image_attributes[0]; ?>" id="image">
                        <div class="overlay">
                            <a href="javascript:void(0);" class="zoom-ico"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                    </div>                                                                                   
                    </div>
                    </li>                    
                  <?php 
                        $i++;
                      endwhile;

                  endif;
                    
                  ?>
                    
                                            
            </ul>
            <div class="gallery_pagination">
            <?php 
                echo paginate_links( array(
                        'base' => get_permalink() . '%#%' . '/',
                        'format' => '?page=%#%',
                        'current' => $page,
                        'total' => $pages
                      ) );

            ?>
        </div>
        </div><!--gallery-img-->    

    </div><!--container-->
</div><!--Gallery-page-->

<?php get_footer(); ?>