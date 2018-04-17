<?php
/*
Template Name Posts: Full Width
*/
?>

<?php get_header(); ?>

	<div id="content">
		
	    <div id="fw-content">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="entry">
					<?php the_content(''); ?>
				<div class="clear"></div>
					<?php edit_post_link('('.__('Edit', 'themejunkie').')', '', ''); ?>
		  		</div><!-- .entry -->
		  		
		    	<?php if(get_option('blacklight_show_page_comments') == 'on') { ?>
			  		<?php comments_template(); ?>
			  	<?php } ?>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
	    </div><!-- fw-content-->

	    <div class="clear"></div>
	</div> <!-- #content-->

<?php get_footer(); ?>