<?php

//custom_page_functions

?>







<?php

//===================================================================================================================================

//     												'press-television

//====================================================================================================================================

	if ( is_page( 'press-television' )) { 

?>

        

<!--// AbbeyK on TV //-->

<div class="abbeyk_tv inner_tv">



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

            	<iframe frameborder="0" width="100%" height="171" src="<?php echo $text; ?>" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>

                <h5><?php echo $content; ?></h5>

            </li>

            <?php endwhile; ?>

        </ul>

    <!-- video -->

    <?php endif; ?>

    

    

</div>

<!--// AbbeyK on TV //-->



<!--// Books //-->

<section class="books_pan">

	<h2><?php the_field('add_title_book'); ?></h2>

    

    

     <?php if( have_rows('books_images') ): ?>

    <!-- Books -->

    	<?php while( have_rows('books_images') ): the_row(); 

            

            // vars

            $image = get_sub_field('add_book');

            $text = get_sub_field('add_links');

            

            ?>

        	

            <figure>

            	<a href="<?php echo $text; ?>" target="_blank">

            	<img src="<?php echo $image['url']; ?>" alt=""/>

                </a>

            </figure>

           

            <?php endwhile; ?>

       

    <!-- Books -->

    <?php endif; ?>

    

   

    

    

    

</section>

<!--// Books //-->





<!-- // Articles //-->

<section class="articles_pan">



	<h2><?php the_field('add_title_ar'); ?></h2>

    

    <?php if( have_rows('articles_logo_and_text') ): ?> 

    <?php while( have_rows('articles_logo_and_text') ): the_row(); 

            

            // vars

            $image = get_sub_field('add_logo');

            $text = get_sub_field('add_link');

			$content = get_sub_field('add_text');

            ?>

    <article>

    	<a href="<?php echo $text; ?>" target="_blank">

        

            <figure>

                <div class="centerer"></div>

                <img src="<?php echo $image['url']; ?>" alt=""/>

            </figure>

            <header>

            	<?php echo $content; ?>

            </header>

        

        </a>

    </article>

     <?php endwhile; ?>

     <?php endif; ?>

    

    

</section>

<!-- // Articles //-->







        

<?php 

}

//===================================================================================================================================

// 													'press-television

//====================================================================================================================================



?>



<?php

//===================================================================================================================================

// 													bio

//====================================================================================================================================

	if ( is_page( 'bio' )) { 

?>





<!-- article -->

<div class="article_pan">

	

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

    <a href="<?php the_field('add_videos_links'); ?>" class="video_link"><?php the_field('video_text'); ?></a>

</div>

<!-- // article // -->





<?php 

}

//===================================================================================================================================

// 													bio

//====================================================================================================================================



?>

<?php

//===================================================================================================================================

// 													testimonials

//====================================================================================================================================

	if ( is_page( 'testimonials' )) { 

?>





<!-- // Testimonials // -->

<div class="testimonials">

<?php the_title( '<h2>', '</h2>' ); ?>





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

          <nav>

            <?php wp_pagenavi( array( 'query' => $the_query ) ); ?>

           </nav>

           

    </ul>

</div>

<!-- // Testimonials // -->



<?php 

}

//===================================================================================================================================

// 													testimonials

//====================================================================================================================================



?>

<?php

//===================================================================================================================================

// 													projects

//====================================================================================================================================

	if ( is_page( 'projects' )) { 

?>



<div class="projects_gallery_wrapper">



<div class="projects projects_desk">

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

                        'post_type'  => 'gallery_projects',

						'order' => 'ASC',

                        'paged' => $paged

                        );

            $the_query = new WP_Query($args);



            if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?> 



             <section id="loop<?php the_ID(); ?>"  <?php post_class(); ?> >

             

             		<header><?php the_title( '<h2>', '</h2>' ); ?></header>

                   

                              

                    <article  <?php post_class(no_mobile); ?>  id="loop<?php the_ID(); ?>">

                        

                        <?php if( have_rows('projects_gallery_main_image') ): ?>

                   

                        <?php while( have_rows('projects_gallery_main_image') ): the_row(); 

						$image = get_sub_field('add_thumbnail__image');

						$imagetwo = get_sub_field('add_large_image');

						?>

                        <figure>

                            <a   href="<?php echo $imagetwo['url']; ?>" title="<?php the_title( '<h2>', '</h2>' ); ?>">

                            <img src="<?php echo $image['url']; ?>" alt=""/></a>

                        </figure>

        				 <?php endwhile; ?>

                        

                   

                    <?php endif; ?>

                        

                      <?php

                        	the_content();

                        ?>

                        

                    </article>

                    

                    <?php if( have_rows('projects_gallery') ): ?>

                    <aside >

                        <?php while( have_rows('projects_gallery') ): the_row();

						$image = get_sub_field('add_thumbnail_image');

						$imagetwo = get_sub_field('add_large_image');

						?>

                        <figure>

                            <a  href="<?php echo $imagetwo['url']; ?>">

                            <img src="<?php echo $image['url']; ?>" alt=""/></a>

                        </figure>

        				 <?php endwhile; ?>

                        

                    </aside>

                    <?php endif; ?>

                    

                     <article <?php post_class(for_mobile); ?>  id="loop<?php the_ID(); ?>">

                        <?php

                        	the_content();

                        ?>

                    </article>

                   	

                   

                   

                </section>



            <?php endwhile; ?>    

            <?php endif; 

            wp_reset_query(); ?>

                <nav>

                <?php wp_pagenavi( array( 'query' => $the_query ) ); ?>

               </nav>

           

</div>





<!--// mobile //-->



<div class="projects projects_mobile">

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

                        'post_type'  => 'gallery_projects',

        				'order' => 'ASC',

                        'paged' => $paged

                        );

            $the_query = new WP_Query($args);



            if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?> 



             <section id="loop<?php the_ID(); ?>"  <?php post_class(); ?> >

             

             		<header><?php the_title( '<h2>', '</h2>' ); ?></header>

                   

                              

                    <article  <?php post_class(no_mobile); ?>  id="loop<?php the_ID(); ?>">

                        

                        <?php if( have_rows('projects_gallery_main_image') ): ?>

                   

                        <?php while( have_rows('projects_gallery_main_image') ): the_row(); 

						$image = get_sub_field('add_thumbnail__image');

						$imagetwo = get_sub_field('add_large_image');

						?>

                        <figure>

                            <a  class="swipebox"  rel="gallery<?php echo $id;  ?>"  href="<?php echo $imagetwo['url']; ?>" title="<?php the_title( '<h2>', '</h2>' ); ?>">

                            <img src="<?php echo $image['url']; ?>" alt=""/></a>

                        </figure>

        				 <?php endwhile; ?>

                        

                   

                    <?php endif; ?>

                        

                      <?php

                        	the_content();

                        ?>

                        

                    </article>

                    

                    <?php if( have_rows('projects_gallery') ): ?>

                    <aside >

                        <?php while( have_rows('projects_gallery') ): the_row();

						$image = get_sub_field('add_thumbnail_image');

						$imagetwo = get_sub_field('add_large_image');

						?>

                        <figure>

                            <a  class="swipebox"  rel="gallery<?php echo $id;  ?>" href="<?php echo $imagetwo['url']; ?>">

                            <img src="<?php echo $image['url']; ?>" alt=""/></a>

                        </figure>

        				 <?php endwhile; ?>

                        

                    </aside>

                    <?php endif; ?>

                    

                     <article <?php post_class(for_mobile); ?>  id="loop<?php the_ID(); ?>">

                        <?php

                        	the_content();

                        ?>

                    </article>

                   	

                   

                   

                </section>



            <?php endwhile; ?>    

            <?php endif; 

            wp_reset_query(); ?>

                <nav>

                <?php wp_pagenavi( array( 'query' => $the_query ) ); ?>

               </nav>

           

</div>



<!--// mobile //-->



</div>

<?php 

}

//===================================================================================================================================

// 													testimonials

//====================================================================================================================================



?>