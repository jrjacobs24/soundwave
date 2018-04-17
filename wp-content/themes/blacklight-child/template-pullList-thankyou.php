<?php
/**
Template Name: Pull List Thank You
*/

get_header(); ?>

	<div id="content">
		
	    <p id="thank_you">
	    	<?php $current_user = wp_get_current_user(); 
	    	echo 'Thank you, ' . $current_user->display_name . ', your Pull List has been updated! <br />';
	    	echo '<br />';
	    	echo '-The Soundwave Crew <br />';
	    	 ?>
	    		
	    </p><!-- thank you -->
	    <?php get_sidebar(); ?>
	    <div class="clear"></div>
	</div> <!-- #content-->

<?php get_footer(); ?>