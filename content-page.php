<?php

/**

 * pages



 */

?>

<!-- #post-## -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<div class="entry-content" id="post-<?php the_ID(); ?>">

		<?php the_content(); ?>

     </div>

    <!-- .entry-content -->

        <?php

			// Include the page custom_page_functions template.

			get_template_part( 'page-templates/custom_page_functions', 'page' );

    	?>

</article>

<!-- #post-## -->

<div class="clear"></div>







