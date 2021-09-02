<?php

/**



 */

?>



<!-- #post-## -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	

        <header>

            <h6><?php the_time('F j , Y') ?></h6>

            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>

        </header>



	<div class="entry-content">

		<?php the_content(); ?>

		 

	</div><!-- .entry-content -->



	



</article>



<div class="post_destals">

<span>Posted at <?php the_time(get_option('date_format').', '.get_option('time_format')) ?> in Products to Love</span>

<span><a href="<?php echo get_permalink(); ?>">Permalink</a> | <?php comments_popup_link(__('Comment'), __('1 Comment'), __('% Comments')); ?> <!--| TrackBack (0)--></span>

Tags: <?php if( function_exists('the_tags') ) the_tags(__('')); ?>

</div>

<!-- #post-## -->



