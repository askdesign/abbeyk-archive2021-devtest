<?php

/**



 */



get_header(); ?>



<main id="main_inner" class="site-main" role="main">



<div class="inner_wrapper">



<div class="container">



			<section class="error-404 not-found">

				<header class="page-header">

					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>

				</header><!-- .page-header -->



				<div class="page-content">

					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>



					<?php get_search_form(); ?>

				</div><!-- .page-content -->

			</section><!-- .error-404 -->



</div>



</div>



</main>

<!-- .site-main -->



<?php get_footer(); ?>

