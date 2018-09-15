<?php 

/* template name: Home*/



get_header();

?>

<?php $b_img=get_field('home_banner');?>

<div class="home-banner">

	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
	<?php if(have_rows('_banner')): ?>
<ol class="carousel-indicators">
<?php $i=1;while(have_rows('_banner')):the_row();?>
    
      <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="<?php if($i==1){echo 'active';}?>"></li>
     
    
<?php $i++;endwhile;?>
</ol>
<?php endif; ?>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
<?php if(have_rows('_banner')): ?>

<?php $i=1;while(have_rows('_banner')):the_row();?>
      <div class="item <?php if($i==1){?>active<?php }?>">
	  <?php if(get_sub_field('home_banner')):?>
        <img src="<?php echo get_sub_field('home_banner')['sizes']['home-banner'];?>" alt="Los Angeles" style="width:100%;">
		<?php endif; ?>
        <div class="carousel-caption">
			<?php if(get_sub_field('text')):?>
			<?php if(get_sub_field('link')){?>
			<a href="<?php echo get_sub_field('link');?>">
	          <h1><?php echo get_sub_field('text');?></h1>
			  </a>
			<?php }else{ ?>
			<h2><?php echo get_sub_field('text');?></h2>
			<?php } ?>
			  <?php endif; ?>
			  <?php if(get_sub_field('text2')):?>
	          <p><?php if(get_sub_field('link2')){?>
			<a href="<?php echo get_sub_field('link2');?>">
	          <h3><?php echo get_sub_field('text2');?></h3>
			  </a>
            <a href="<?php echo get_sub_field('btn-link');?>" class="btnn"><?php echo get_sub_field('btn-text');?></a>
			<?php }
			else{ ?>
			<h3><?php echo get_sub_field('text2');?></h3>
			<?php } ?></p>
			   <?php endif; ?>
        </div>
      </div>
<?php $i++;endwhile;?>
      
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<?php endif;?>
</div>
</div><!-- home-banner -->

<div class="home-servicess">

	<div class="container">

		<h3><?php //echo get_field('physiotherapy_services_title');?></h3>

		
		<div class="home_products">
			<ul>
		<?php
		/*$post_objects_service = get_field('select_services');
		usort($post_objects_service, function($a, $b) {
    return strcmp($b->post_id,$a->post_id);
});
		//print_r($post_objects_service); 

if( $post_objects_service ): ?>
    <ul>
    <?php $i=0;foreach( $post_objects_service as $post): $i++;
	
		//if($i>3){break;}
	// variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
        	<?php if(has_post_thumbnail()):?>
		<div class="home-services-img">

					<?php the_post_thumbnail('home-services');?>

		</div>
	<?php endif;?>
            <h4><?php the_title(); ?></h4>
            <p>
            <?php echo substr(get_the_excerpt(),0,250);?></p>
			
				<div class="service-readmore"><a href="<?php the_permalink();?>" target="_blank">Read More</a></div>
        </li>
    <?php  endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;*/
?>
		
<?php 
if(have_rows('product_category_section')):
	while(have_rows('product_category_section')):the_row();
	$cat_id = get_sub_field('category');
	$term = get_term_by( 'id', $cat_id, 'product_cat' ); 
    ?>
    <h3><?php echo $term->name; ?></h3>
	
	<?php
 $args = array(
    'post_type'             => 'product',
    'post_status'           => 'publish',
    'ignore_sticky_posts'   => 1,
    'posts_per_page'        => '4',
    'tax_query'             => array(
        array(
            'taxonomy'      => 'product_cat',
            'field' => 'term_id', //This is optional, as it defaults to 'term_id'
            'terms'         => $cat_id,
            'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
        ),
        /*array(
            'taxonomy'      => 'product_visibility',
            'field'         => 'slug',
            'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
            'operator'      => 'NOT IN'
        )*/
    )
);





//$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 6, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

					 <!--  <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> -->
		<li>				
<?php if (has_post_thumbnail( $loop->post->ID )) 
 {
 echo get_the_post_thumbnail($loop->post->ID,'medium');
 }
 else 
 {	
echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" >';
 } 	
 ?>
 <h5><?php the_title();?></h5> 
 ?>
<!-- </a> -->
<?php
echo $product->get_price_html();
?>
  <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
</li>
<?php 
endwhile; 
wp_reset_query();
?>

<?php 
endwhile;
	else:
		// Not found
	endif;

?>
			
</ul>
</div>
				

	</div><!-- container -->

</div><!--home-servicess-->





<!--<div class="home-support-related">

	<div class="container">
		<?php if(get_field('we_are_the_best_support_for_you_tilte')):?>
		<?php echo get_field('we_are_the_best_support_for_you_tilte');?>

		<div class="down-line "></div>
		<?php endif; ?>

		<ul>
		<?php if(have_rows('we_are_the_best_support_for_you')):?>
		<?php while(have_rows('we_are_the_best_support_for_you')): the_row();
				$i_img=get_sub_field('icon_image');
		?>
			<li>

				<img src="<?php echo $i_img;?>">

				<h4><?php echo get_sub_field('title');?></h4>

				<p><?php echo get_sub_field('content');?></p>

			</li>

		<?php endwhile;?>
		<?php endif;?>

		</ul>

	</div>

</div> -->

<!-- home-support-related -->









	

	<!--<div class="home-diabeties">

		<div class="container">

			<ul>
		<?php if(have_rows('diabetic_foot_rehab')):?>
		<?php while(have_rows('diabetic_foot_rehab')):the_row();?>
				<li>
					<?php if(get_sub_field('image')['sizes']['foot-rehab']): ?>
					<div class="saeting-img"><img src="<?php echo get_sub_field('image')['sizes']['foot-rehab'];?>"></div>
					<?php endif; ?>					
					<?php if(get_sub_field('title')):?>
					<h3><?php echo get_sub_field('title');?></h3>
					<?php endif;?>

					<?php echo get_sub_field('content');?>

					<!-- <span><a href="<?php echo get_page_link(63);?>">Price - Rs. 1000.00/Seating</a></span> -->

				<!--</li>
				<?php endwhile;endif;?>
</ul>

		</div>

	</div> -->

	<!--home-diabeties  -->


	

<?php get_footer();