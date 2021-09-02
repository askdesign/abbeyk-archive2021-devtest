<?php







?>







<!--// footer //-->



<footer  <?php post_class(footer); ?> id="post-<?php the_ID(); ?>">



	



    <div  <?php post_class(container); ?>>



    



    	<!-- Keep in Touch -->



        <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    		<h3>Keep in Touch</h3>



            <?php echo do_shortcode('[contact-form-7 id="33" title="Keep in Touch"]'); ?>



        </section>



        <!-- Keep in Touch -->



        



        <!-- Connect -->



        <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



        	<h3>Connect</h3>



            <ul>



            	<li><a href="<?php the_field('instagram', 'option'); ?>"  target="_blank"></a></li>



                <li><a href="<?php the_field('facebook', 'option'); ?>"  target="_blank"></a></li>



                <li><a href="<?php the_field('pinterest', 'option'); ?>" target="_blank"></a></li>



                <li><a href="<?php the_field('houzz', 'option'); ?>"  target="_blank"></a></li>



            </ul>



        </section>



    	<!-- Connect -->



        



        <div class="clear"></div>



        



        <p><?php bloginfo('name'); ?>  |  <?php the_field('address', 'option'); ?>  |  <a href="tel:<?php the_field('phone_no', 'option'); ?>"><?php the_field('phone_no', 'option'); ?></a>  |  <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>  |  &copy; <SCRIPT>



<!--



var year=new Date();



year=year.getYear();



if (year<1900) year+=1900;



document.write(year);



//-->



</SCRIPT> <?php bloginfo('name'); ?>, Inc.  |  All Rights Reserved </p>



        



    </div>



    



</footer>



<!--// foter //-->







<!--// footer TAB + Mobile //-->



<footer class="footer mobile_footer" id="post-<?php the_ID(); ?>">



	



    <div id="post-<?php the_ID(); ?>"  <?php post_class(container); ?>>



    



     <p><span><?php bloginfo('name'); ?>  |  <?php the_field('address', 'option'); ?>  |</span>  <a href="tel:<?php the_field('phone_no', 'option'); ?>"><?php the_field('phone_no', 'option'); ?></a>  |  <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a> </p>



     



     <div class="clear"></div>



    



    	<!-- Keep in Touch -->



        <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    		<h3>Keep in Touch</h3>



            <?php echo do_shortcode('[contact-form-7 id="33" title="Keep in Touch"]'); ?>



        </section>



        <!-- Keep in Touch -->



        



        <!-- Connect -->



        <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



        	<h3>Connect</h3>



            <ul id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



            	<li><a href="<?php the_field('twitter', 'option'); ?>"  target="_blank"></a></li>



                <li><a href="<?php the_field('facebook', 'option'); ?>"  target="_blank"></a></li>



                <li><a href="<?php the_field('pinterest', 'option'); ?>" target="_blank"></a></li>



                <li><a href="<?php the_field('houzz', 'option'); ?>"  target="_blank"></a></li>



            </ul>



        </section>



    	<!-- Connect -->



        



         <div class="clear"></div>



        <p>&copy;<?php bloginfo('name'); ?>, Inc.  |  All Rights Reserved </p>



       



        



    </div>



    



</footer>



<!--// footer TAB + Mobile //-->







<?php wp_footer(); ?>



<!-- Javascript files -->



<!-- <script type="text/javascript" src="<?php //echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.11.1.min.js"></script> -->



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-migrate-1.2.1.min.js"></script>



<script type="text/javascript" src="js/classie.js"></script>



	<script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.js"></script>



<!-- backtotop -->



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/back-to-top.js"></script>



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smoothScroll.js"></script>



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/classie.js"></script>



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.magnific-popup.min.js"></script>



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.swipebox.js"></script>







<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>







<!-- HTML5 Support for IE -->



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>







<script>



  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){



  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),



  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)



  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');







  ga('create', 'UA-60997838-1', 'auto');



  ga('send', 'pageview');







</script>







</body>



</html>



