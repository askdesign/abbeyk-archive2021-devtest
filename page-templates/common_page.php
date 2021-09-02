<?php

/**

 * The template for displaying all pages

 * Template Name: Common

 */

 get_header(); ?>



<!-- .site-main -->

<main id="main_inner" <?php post_class('site-main'); ?> role="main">

<div  id="post-<?php the_ID(); ?>" <?php post_class('inner_wrapper'); ?>>

<div  id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

	<div  id="post-<?php the_ID(); ?>" <?php post_class('common_pan'); ?>>

    	<!-- aside -->

    

    	<aside id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        	<?php if( have_rows('left_images') ): ?>

				<?php while( have_rows('left_images') ): the_row(); 

                    // vars

                    $image = get_sub_field('add_images');

                ?>

                    <figure>

                        <img src="<?php echo $image['url']; ?>" alt="" />

                    </figure>

                <?php endwhile; ?>

           <?php endif; ?>

            

        </aside>

        

        

        <!-- aside -->

        

        <!-- article -->

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        		<?php

				// Start the loop.

				while ( have_posts() ) : the_post();

		

					the_content();

		

				// End the loop.

				endwhile;

		  		?>



        </article>

        

    	<!-- article -->

    </div>



</div>

</div>

</main>

<!-- .site-main -->            

<?php get_footer(); ?>