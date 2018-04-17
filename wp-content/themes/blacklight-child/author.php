<?php
/*
Author Page
*/
?>

<?php get_header(); ?>	

	<div id="content">		
	
	   <article>	

		<?php 
		//first get the current author whos page you are viewing
		if(isset($_GET['author_name']))
       		 $curauth = get_user_by('slug', $author_name);
		else
        	$curauth = get_userdata(intval($author));

		?>
		
		<h1 class="pagetitle"><?php echo $curauth->display_name; ?></h1>
		
		<div id="author_info">

		<h3>Staff</h3>
		<h3>Email: <a href="mailto: <?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a></h3>
		</div>
		
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
			
		     </article><!-- article -->	    
							
		     <?php get_sidebar(); ?>	    		
		     <div class="clear"></div>	
		</div><!-- #content -->
			
<?php get_footer(); ?>