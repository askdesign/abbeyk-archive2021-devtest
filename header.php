<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- ICON -->

		<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" type="image/x-icon">

	<!-- ICON -->



	<?php wp_head(); ?>

    	<!-- Responsiv style -->

<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css' rel='stylesheet' type='text/css'>

        <link href="<?php// echo esc_url( get_template_directory_uri() ); ?>/css/media.css" rel="stylesheet" type="text/css">

        <!-- Responsiv style -->

        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css" rel="stylesheet">

        <!-- popup style -->

        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/popup.css" rel="stylesheet" type="text/css">

        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/swipebox.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <meta name="google-site-verification" content="5JYubqTg9lxREyFpowyezR0C-lZYHNFwiWc417z6czM" />

        <!-- popup style -->

</head>



<body <?php body_class(); ?>>

 



<!--// header Start //-->

<header <?php post_class('header'); ?> id="post-<?php the_ID(); ?>">



<hgroup>

<div <?php post_class('container'); ?> id="post-<?php the_ID(); ?>">



		 <!--// nav //-->

        

            <nav <?php post_class('for_mobile_nav'); ?> id="post-<?php the_ID(); ?>" >

                <div id="mobile-nav-trigger" >

                    <h6>Menu</h6>

                    <a  href="javascript:void(0)" class="close">Close</a>

                </div>

                <?php if ( has_nav_menu( 'mobilenav' ) ) : ?>

				<?php

					// headernav navigation menu.

					wp_nav_menu( array(

						'container' => '',

						'theme_location' => 'mobilenav',

					) );

				?>

				<?php endif; ?>

            </nav>

           

        <!--// nav //-->



        <!--// logo //-->

            <figure id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h1>
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>">
						<?php 
                        
                            $image = get_field('logo' ,'option');
                        
                                if( !empty($image) ): ?>
                        
                            <img src="<?php echo $image['url']; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
                        
                        <?php endif; ?>
                      </a>
                </h1>

            </figure>

        <!--// logo //-->

        

        <!--// nav //-->

        

            <nav  <?php post_class('for_nav'); ?> id="post-<?php the_ID(); ?>">

            	<?php if ( has_nav_menu( 'headernav' ) ) : ?>

				<?php

					// headernav navigation menu.

					wp_nav_menu( array(

						'container' => '',

						'theme_location' => 'headernav',

					) );

				?>

				<?php endif; ?>

            </nav>

         

        <!--// nav //-->

    



    

    

    

</div>

</hgroup>

<?php if ( is_front_page() ) { ?> 

<div   <?php post_class('container'); ?>>

 <!--// banner //-->

    <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    	<figure id="post-<?php the_ID(); ?>" <?php post_class('banner_slider'); ?>>

            <?php echo do_shortcode('[metaslider id="1267"]'); ?>
        </figure>

        <div class="mobile_banner">
        	
            <div id="sync1" class="owl-carousel">
             <?php if ( get_query_var('paged') ) {
                    $paged = get_query_var('paged');
                } else if ( get_query_var('page') ) {
                    $paged = get_query_var('page');
                } else {
                    $paged = 1;
                } ?>
                    <?php
                    $args= array(
                                'showposts' => -1,
                                'posts_per_page' => -1,
                                'post_type'  => 'imageslider',
                                'paged' => $paged
                                );
                    $the_query = new WP_Query($args);
            
                    if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?> 
                    <div class="item">
                        <figure>
                        <?php 
                        
                            $image = get_field('add_image');
                            
                            if( !empty($image) ): ?>
                            
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        
                        <?php endif; ?>
                        </figure>
                    </div>
            <?php endwhile; ?>    
            <?php endif; 
            wp_reset_query(); ?>      
            
            </div>
            
            <div id="sync2" class="owl-carousel">
            
            <?php if ( get_query_var('paged') ) {
                    $paged = get_query_var('paged');
                } else if ( get_query_var('page') ) {
                    $paged = get_query_var('page');
                } else {
                    $paged = "1";
                } ?>
                    <?php
                    $args= array(
                                'showposts' => -1,
                                'posts_per_page' => -1,
                                'post_type'  => 'imageslider',
                                'paged' => $paged
                                );
                    $the_query = new WP_Query($args);
            
                    if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?> 
                    <div class="item">
                        <figure>
                        <?php 
                        
                            $image = get_field('add_image');
                            
                            if( !empty($image) ): ?>
                            
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        
                        <?php endif; ?>
                        </figure>
                    </div>
            <?php endwhile; ?>    
            <?php endif; 
            wp_reset_query(); ?>         
            </div>
                      
        </div>

    </section>

  <!--// banner //-->



</div>

 <?php } else { ?><?php } ?>

</header>

<!--// header End //-->