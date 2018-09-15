<?php

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Phyuni

 */



?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'cf5251ea-32ec-4033-b3e5-d1114822efe4', f: true }); done = true; } }; })();</script> 
	<style type="text/css">
		div#flags {
    	display: none !important;
		}
	</style>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700,800" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">	

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
	<script src="<?php bloginfo('template_url');?>/js/jquery.min.js"></script>  
	

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script> -->
	<script>
	    
	jQuery(document).ready(function(){
		jQuery('.zoom-gallery').click(function(){
		    alert($(this.attr("data-target")));
		//$(this.attr("data-target")).modal();
		});
		
		 // console.debug($.cookie('modelToOpen'));
		});
	</script>
	 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/custom.css">
	<?php wp_head(); ?>
	
</head>
<script>
   jQuery(document).ready(function(){
     jQuery('#frm-srch').toggle('hide');
     jQuery('#show-srch').click(function(){

     jQuery('#frm-srch').toggle('slow');

      });

    });
</script>


<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
   $("#myModal .close").click();
   $('#myModal1').modal('show');
   setTimeout(function() {$('#myModal1').modal('hide');window.location.href = "<?php echo get_home_url();?>";}, 5000);

   
   
}, false );
</script>




<body <?php body_class(); ?>>


  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php echo get_field('success_fully_message_content',78); ?>
        </div>
        
       
        
      </div>
    </div>
  </div>	

<div id="page" class="site">

	

	<header id="masthead" class="site-header">

		<div class="container">

			<div class="site-branding">  

	           <div class="header-top">
			   <div class="logo-home">
	                	<?php $image_logo = wp_get_attachment_image_src( get_field('logo',78),'full'); ?>
	                   <a href="<?php echo get_home_url();?>"><img src="<?php echo $image_logo[0];?>"></a>

	                </div>
                    <div class="call-top">
                       <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        <div class="number">
                            <a href="tel:+919810195477"><?php the_field('contact_num',78);?></a> 
                            <a href="tel:+919650657514"><?php the_field('number_scnd',78);?></a>                             
                        </div><!--number-->
                        <div class="trans"><?php echo do_shortcode('[google-translator image="no"]'); ?></div>
                    </div>


	                
				<?php /*
	                <div class="location-top">
                        <div class="appoinmnt_sticky">
                          <a class="fst-apomnt" href="<?php echo get_field('what_our_clients_say_link',78);?>" target="_blank"><?php echo get_field('what_our_clients_say_link_text',78);?></a>
                          <a class="scnd-whtsay" href="<?php echo get_field('book_your_appointments_link',78);?>" target="_blank"><?php echo get_field('book_your_appointments_link_text',78);?></a>
                        </div><!--appoinmnt_sticky-->
                        <!-- <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                        <p><?php //the_field('addres_f',78);?></p> -->
                    </div><!--location-top-->
				*/?>
	           </div>

			</div><!-- .site-branding -->

	    </div><!--container-->

	    

	    

		<div class="container">	

		    <div class="header-menu">    

				<nav id="site-navigation" class="main-navigation">

					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'phyuni' ); ?></button> -->

					<?php

						wp_nav_menu( array(

							'theme_location' => 'menu-1',

							'menu_id'        => 'primary-menu',

						) );

					?>

					<div class="search-form-box">

	                <div class="search-con" id="frm-srch">
					<form action="<?php  echo home_url('/');?>">

	                   <input name="s" type="text" placeholder="Search" value="" tabindex="1" autocomplete="off" maxlength="240">
					</form>
	                </div><!-- search-con -->

	              <a href="javascript:void(0)" id="show-srch"><i class="fa fa-search" aria-hidden="true"></i></a> 

                </div><!-- srch-frm-bx --> 

				</nav><!-- #site-navigation -->

           



		    </div><!--header-menu-->		

		</div><!--container-->	

	    



	</header><!-- #masthead -->



	<div id="content" class="site-content">

