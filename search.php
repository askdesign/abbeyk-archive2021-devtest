<?php

/**



 *

 */



get_header(); ?>



<main id="main_inner" class="site-main" role="main">



<div class="inner_wrapper">



<div class="container">



		<?php if ( have_posts() ) : ?>



			<header class="page-header">

				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>

			</header><!-- .page-header -->



			<?php

			// Start the loop.

			while ( have_posts() ) : the_post(); ?>



				<?php

				/*

				 * Run the loop for the search to output the results.

				 * If you want to overload this in a child theme then include a file

				 * called content-search.php and that will be used instead.

				 */

				get_template_part( 'content', 'search' );



			// End the loop.

			endwhile;



			



		// If no content, include the "No posts found" template.

		else :

			get_template_part( 'content', 'none' );



		endif;

		?>

        

           <nav>

    	<?php wp_pagenavi(); ?>

    </nav>



</div>



</div>



</main>

<!-- .site-main -->



<?php get_footer(); ?>

