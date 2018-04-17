<?php
/*
Archives
*/
?>

<?php get_header(); ?>	

	<div id="content">		
		<?php get_template_part('includes/breadcrumbs'); ?>	
			
	   <article>	
		
	      <?php /* If this is a category archive */ if (is_category()) { ?>
		
		  <h1 class="pagetitle"><?php single_cat_title(); ?></h1>	
		  
		  <?php } ?>	
		
		<?php $counter = 1; if (have_posts()) : while ( have_posts() ) : the_post() ?>	
		
		<?php include(TEMPLATEPATH. '/includes/loop.php'); ?>
		
		<?php if ($counter%2 == 0) { echo('<div class="clear"></div>'); } ?>			
			
			<?php $counter ++; endwhile; ?>			
			
			<?php else : ?>	
						
			<?php get_template_part('includes/not-found'); ?>		    
					
			<?php endif; ?>	  

			<?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>
		        <div class="pagination">
		            <div class="left"><?php previous_posts_link(__('&larr; Newer Entries', 'themejunkie')) ?></div>
		            <div class="right"><?php next_posts_link(__('Older Entries &rarr;', 'themejunkie')) ?></div>
		            <div class="clear"></div>
		        </div> <!-- .pagination -->
		    <?php } ?>  
			
		     </article><!-- article -->	    
							
		     <?php get_sidebar(); ?>	    		
		     <div class="clear"></div>	
		</div><!-- #content -->
			
<?php get_footer(); ?>