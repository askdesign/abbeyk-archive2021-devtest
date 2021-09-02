<?php

/**

 * The template for displaying all pages

 * Template Name: Video

 */

 get_header(); ?>



<!-- .site-main -->

<main id="main_inner" <?php post_class(site-main); ?> role="main">

<div  id="post-<?php the_ID(); ?>" <?php post_class(inner_wrapper); ?>>

<div  id="post-<?php the_ID(); ?>" <?php post_class(container); ?>>

	

        <!-- .entry-header -->

            <header class="entry-header">

            	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

            </header>

        <!-- .entry-header -->

        <div class="video_wrapper" id="post-<?php the_ID(); ?>">

        <?php if( have_rows('add_video') ): ?>

        <ul id="post-<?php the_ID(); ?>">

        	

				<?php while( have_rows('add_video') ): the_row(); 

                

                // vars

                $text = get_sub_field('video_title');

				$text1 = get_sub_field('content');

				$text2 = get_sub_field('video_url');

                

                ?>

              <li <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                	<header>

                    	<h5><?php echo $text; ?></h5>

                    </header>

                    <h5><?php echo $text1; ?></h5>

                </article>

                <section>

                <iframe src="<?php echo $text2; ?>" width="100%" height="370" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

                </section>

            </li>

            <?php endwhile; ?>

        </ul>

        <?php endif; ?>

		</div>

        

    



</div>

</div>

</main>

<!-- .site-main -->            

<?php get_footer(); ?>