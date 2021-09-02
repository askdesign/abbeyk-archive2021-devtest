<?php





get_header(); ?>



<!-- .site-main -->

<main id="main_inner" class="site-main" role="main">



<div class="inner_wrapper">



<div class="container">

		<?php

		// Start the loop.

		while ( have_posts() ) : the_post();



			// Include the page content template.

			get_template_part( 'content', 'page' );



			// If comments are open or we have at least one comment, load up the comment template.

			



		// End the loop.

		endwhile;

		?>





</div>



</div>



</main>

<!-- .site-main -->



<?php get_footer(); ?>

