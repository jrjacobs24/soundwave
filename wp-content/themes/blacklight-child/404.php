<?php 

/**
Template for displaying 404 pages (Not Found).
*/

get_header(); ?>

	<div id="content">
		<?php get_template_part('includes/breadcrumbs'); ?>
	    <article>
	        <h1 class="page-title"><?php _e('Soundwave Comics Issue #404','themejunkie'); ?></h1>
	        <div class="entry">
	            <?php the_post(); ?>
	            <p><?php _e('It seems this issue of Soundwave Comics is out of print and <strong>can not be displayed</strong>. This is clearly not your intended destination. Perhaps there was a bad or outdated link, or a typo in the page you were hoping to reach. Basically, don\'t beat yourself up too much! Feel free to search again or check out one of the many awesome links above or to the right!','themejunkie') ?></p>
	        
	        
	        </div><!-- .entry -->
	    </article><!-- article -->
	    <?php get_sidebar(); ?>
	    <div class="clear"></div>
	</div><!-- #content -->
	
<?php get_footer(); ?>