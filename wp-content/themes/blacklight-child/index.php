<?php get_header(); ?>
	    
	<?php if(!is_paged() && (get_option('blacklight_featured_slider_enable') == 'on')) : ?>
		<?php
		    $featured_tags = get_option('blacklight_featured_post_tags');
		    $featured_num = get_option('blacklight_featured_post_num');
		    if(!preg_match("/^\d*$/",$featured_num)){
		        $featured_num = 3;
		    }
		?>
		<div id="slider">
		    <div class="slides_container">
		        <?php
		        query_posts( array(
	                'tag' => $featured_tags,
	                'posts_per_page' => $featured_num
		            )
		        );
		        ?>
		        <?php if (have_posts()) : while ( have_posts() ) : the_post() ?>
		    		<?php include(TEMPLATEPATH. '/includes/loop-slide.php'); ?>
		        <?php endwhile; endif; ?>
		        <?php wp_reset_query();?>
		    </div><!-- .slides_container -->
		    <a class="prev" title="prev">prev</a>
		    <a class="next" title="next">next</a>
		</div><!-- #slider -->
	<?php endif; ?>
	
	<div id="content">
	    <?php if(!(!is_paged() && (get_option('blacklight_featured_slider_enable') == 'on'))) : ?>
			<?php get_template_part('includes/breadcrumbs'); ?>
	    <?php endif; ?>
		<article>
			<?php if (is_home() && !is_paged()) { ?>		
				<div class="heading">
		            <span class="heading-text"><?php _e('Latest Posts','themejunkie'); ?></span>
		        </div><!-- .heading -->
	        <?php } ?>
			<?php $counter = 1; if (have_posts()) : while ( have_posts() ) : the_post() ?>
		   		<?php include(TEMPLATEPATH. '/includes/loop.php'); ?>
				<?php if ($counter%2 == 0) { echo('<div class="clear"></div>'); } ?>
			<?php $counter ++; endwhile; ?>
		    <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>
		        <div class="pagination">
		            <div class="left"><?php previous_posts_link(__('&larr; Newer Entries', 'themejunkie')) ?></div>
		            <div class="right"><?php next_posts_link(__('Older Entries &rarr;', 'themejunkie')) ?></div>
		            <div class="clear"></div>
		        </div> <!-- .pagination -->
		    <?php } ?>
	    </article><!-- article -->
		<?php else : ?>
		<?php endif; ?>
	    <?php get_sidebar(); ?>
	    <div class="clear"></div>
	</div><!-- #content -->

<?php get_footer(); ?>