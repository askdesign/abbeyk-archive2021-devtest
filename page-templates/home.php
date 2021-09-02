<?php

/**

 * The template for displaying all pages

 * Template Name: Home

 */



get_header(); ?>



<!-- .site-main -->

<main id="main<?php the_ID(); ?>"  role="main" <?php post_class(site-main); ?>>



<div <?php post_class(container); ?>>



<!--// body_top Start //-->



<div <?php post_class(body_top); ?>>



		<?php

				// Start the loop.

				while ( have_posts() ) : the_post();

		

					the_content();

		

				// End the loop.

				endwhile;

		  ?>



</div>



<!--// body_top End //-->









<!--// AbbeyK on TV //-->

<div  <?php post_class(abbeyk_tv); ?>>

<?php

$lastposts = get_posts('post_type=page&name=press-television');

foreach($lastposts as $post) :

setup_postdata($post);

?>	

	<h2><?php the_field('add_title'); ?></h2>

    <?php if( have_rows('tv') ): ?>

    <!-- video -->

    	<ul>

			<?php while( have_rows('tv') ): the_row(); 

            

            // vars

            $text = get_sub_field('add_video_url');

            $content = get_sub_field('add_video_title');

            

            ?>

        	<li>

            	<iframe frameborder="0" width="100%" height="171" src="<?php echo $text; ?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                <h5><?php echo $content; ?></h5>

            </li>

            <?php endwhile; ?>

        </ul>

    <!-- video -->

    <?php endif; ?>

<?php endforeach; ?>

</div>

<!--// AbbeyK on TV //-->



<!-- article -->

<div  <?php post_class(article_pan); ?>>

<?php

$lastposts = get_posts('post_type=page&name=bio');

foreach($lastposts as $post) :

setup_postdata($post);

?>	

	

    <figure>

    	<?php

		// Post thumbnail.

		twentyfifteen_post_thumbnail();

		?>

    </figure>

    

    <article>

    	<?php

        	the_content();

        ?>

        <?php if( have_rows('bio_logos') ): ?>

        <section>

        	<?php while( have_rows('bio_logos') ): the_row(); 

            $content = get_sub_field('add_link');

            // vars

            $attachment_id = get_sub_field('add_logo');

				$size = "full"; // (thumbnail, medium, large, full or custom size)

				$image = wp_get_attachment_image_src( $attachment_id, $size );

				// url = $image[0];

				// width = $image[1];

				// height = $image[2];

            ?>

        	<figure>

            	<a href="<?php echo $content; ?>">

                	<img src="<?php echo $image[0]; ?>" alt=""/>

                </a>

            </figure>

            <?php endwhile; ?>

        </section>

         <?php endif; ?>

    </article>

<?php endforeach; ?>    

</div>

<!-- // article // -->





<!-- // Testimonials // -->

<div  <?php post_class(testimonials); ?>>

<?php

$lastposts = get_posts('post_type=page&name=testimonials');

foreach($lastposts as $post) :

setup_postdata($post);

?>

	

<?php the_title( '<h2>', '</h2>' ); ?>



<?php endforeach; ?>  

   

    <ul id="loop<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if ( get_query_var('paged') ) {

            $paged = get_query_var('paged');

        } else if ( get_query_var('page') ) {

            $paged = get_query_var('page');

        } else {

            $paged = 1;

        } ?>

            <?php

            $args= array(

                        'showposts' => 3,

                        'posts_per_page' => 3,

                        'post_type'  => 'article_testimonials',

                        'paged' => $paged

                        );

            $the_query = new WP_Query($args);



            if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?> 



                <li id="loop<?php the_ID(); ?>" <?php post_class(); ?>>

                    <article id="loop<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php

                        	the_content();

                        ?>

                    </article>

                    <header>

                    <h6><a href="<?php the_permalink(); ?>">- <?php the_title(); ?></a></h6>

                    </header>

                </li>



            <?php endwhile; ?>    

            <?php endif; 

            wp_reset_query(); ?>

           

    </ul>

    

</div>

<!-- // Testimonials //-->





<!-- // blog_projects_twitter // -->

<div <?php post_class(blog_projects_twitter); ?>>

	

    

    <!-- // Blog and Current Projects //-->

    <div  <?php post_class(blog_projects); ?>>

    

    	<h2>Blog and Project Updates</h2>

        

        <section class="blog_home">

        <?php $recent = new WP_Query("showposts=2"); while($recent->have_posts()) : $recent->the_post();?>

        	<article>

            

            	<header>

                	<h6><?php the_time('F j , Y') ?></h6>

                    <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>

                </header>

                <?php the_content_limit(320, ''); ?>

            </article>

         <?php endwhile; ?>   

        </section>

        

        

        

    </div>

    <!-- // Blog and Current Projects //-->

    

    

    <!-- // Recent Tweets //-->

    <?php if ( is_active_sidebar( 'recent_tweets' ) ) : ?>

    	<!-- .widget-area -->

		<?php dynamic_sidebar( 'recent_tweets' ); ?>

		<!-- .widget-area -->

	<?php endif; ?>

   

    <!-- // Recent Tweets //-->

    

    

</div>

<!-- // blog_projects_twitter // -->







</div>



</main>

<!-- .site-main -->



<?php get_footer(); ?>