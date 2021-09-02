<?php

/**



 */



get_header(); ?>

<!-- .site-main -->

<main id="main_inner" class="site-main" role="main">



<div class="inner_wrapper">



<div class="container">





<div class="blog_left">

<img class="blog_left_top" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/indesign.png" alt=""/>

	<div class="blog_left_article">

<!-- #post-## -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	

        <header>

            <h6><?php the_time('F j , Y') ?> </h6> 

            <h3><?php the_title(); ?></h3>

          

        </header>

        



	<div class="entry-content">

		 <?php

				// Start the loop.

				while ( have_posts() ) : the_post();

		

					the_content();

		

				// End the loop.

				endwhile;

		  ?>

	</div><!-- .entry-content -->



	



</article>

<!-- #post-## -->

<div class="post_destals">

<span>Posted at <?php the_time(get_option('').', '.get_option('time_format')) ?> in Products to Love</span>

<span><a href="<?php echo get_permalink(); ?>">Permalink</a> | <?php comments_popup_link(__('Comment'), __('1 Comment'), __('% Comments')); ?> <!--| TrackBack (0)--></span>

Tags: <?php if( function_exists('the_tags') ) the_tags(__('')); ?>

</div>



<div class="comment_wrapper">

<?php

		// Start the loop.

		while ( have_posts() ) : the_post();



			



			// If comments are open or we have at least one comment, load up the comment template.

			if ( comments_open() || get_comments_number() ) :

				comments_template();

			endif;



			

		// End the loop.

		endwhile;

		?>

</div>

</div>

</div>

<div class="blog_right"><?php get_sidebar(); ?></div>



<div class="clear"></div>







		



</div>



</div>



</main>

<!-- .site-main -->



<?php get_footer(); ?>