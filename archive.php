<?php

get_header(); ?>

<main id="main_inner" class="site-main" role="main">



<div class="inner_wrapper ">



<div class="container">

<div class="blog_left">

<img class="blog_left_top" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/indesign.png" alt=""/>

	<div class="blog_left_article">

		<?php if ( have_posts() ) : ?>



			<header class="page-header archive_cat">

				<?php

					the_archive_title( '<h1 class="page-title">', '</h1>' );

					the_archive_description( '<div class="taxonomy-description">', '</div>' );

				?>

			</header><!-- .page-header -->



			<?php

			// Start the Loop.

			while ( have_posts() ) : the_post();



				/*

				 * Include the Post-Format-specific template for the content.

				 * If you want to override this in a child theme, then include a file

				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

				 */

				get_template_part( 'content', get_post_format() );



			// End the loop.

			endwhile;



			  // Previous/next page navigation.

			the_posts_pagination( array(

				'prev_text'          => __( '< previous', 'twentyfifteen' ),

				'next_text'          => __( 'next >', 'twentyfifteen' ),

				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',

			) );



		// If no content, include the "No posts found" template.

		else :

			get_template_part( 'content', 'none' );



		endif;

		?>

  

   </div> 

 </div> 

  <div class="blog_right"><?php get_sidebar(); ?></div>

<div class="clear"></div>

  

</div>



</div>



</main>

<!-- .site-main -->



<?php get_footer(); ?>

