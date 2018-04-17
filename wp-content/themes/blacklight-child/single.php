<?php get_header(); ?>

<div id="content"> 

    <article>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	   	<div class="entry">
            <h1 class="entry-title"><?php the_title(); ?></h1>
		    <div class="entry-meta">
		            <?php the_time('M d,Y'); ?> - <?php _e('by','theme junkie'); ?> 
		            <span class="entry-author"><?php the_author_posts_link(); ?></span>
		        
		            <span class="entry-comment"><?php comments_popup_link( __( '0', 'theme junkie' ), __( '1', 'theme junkie' ), __( '%', 'theme junkie' ) ); ?></span>
		    </div><!-- .entry-meta -->
			<?php if(get_option('blacklight_integrate_singletop_enable') == 'on') echo (get_option('blacklight_integration_single_top')); ?>
	
	 <?php if( in_category(array ('Reviews', 'Comics and Movies', 'Resources', 'Contests', 'The Edge', 'Deals and Specials', 'CultureMass' )) ) { ?>
           <div class="entry-img">
           	<?php the_post_thumbnail();?>
           	</div> 
		<?php } ?>
	
            <?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themejunkie' ), 'after' => '</div>' ) ); ?>
			<?php if(get_option('blacklight_integrate_singlebottom_enable') == 'on') echo (get_option('blacklight_integration_single_bottom')); ?>
			<div class="clear"></div>
            <?php the_tags( '<span class="entry-tags">Tags: ', ', ', '</span>'); ?>
			<?php edit_post_link('('.__('Edit', 'themejunkie').')', '<span class="entry-edit">', '</span>'); ?>
            <div class="clear"></div>
			<?php if (get_option('blacklight_single_share_enable') == 'on') { ?>
				<div class="entry-share">
					<div class="btn-tweet">
					    <a href="http://twitter.com/share" class="twitter-share-button"
					    data-url="<?php the_permalink(); ?>"
					    data-via=""
					    data-text="<?php the_title(); ?>"
					    data-related=""
					    data-count="horizontal"><?php _e('Tweet','themejunkie'); ?></a>
					</div><!-- .btn-tweet -->
					<div class="btn-like">
					    <fb:like href="<?php the_permalink(); ?>" layout="button_count" show_faces="false" width="100" font=""></fb:like>
					</div><!-- .btn-like -->
					<div class="btn-plus">
						<g:plusone size="medium"></g:plusone>
					</div><!-- .btn-plus -->
				</div><!-- .entry-share -->
			<?php } ?>
			<div class="clear"></div>
            <?php if(get_option('blacklight_show_author_box') == 'off') { ?>
	            <div class="authorbox">
	                <p><?php echo get_avatar( get_the_author_meta('email'), '48' ); ?>
	                    <strong><?php the_author_posts_link(); ?></strong><br />
	                    </p>
	                <div class="clear"></div>
	            </div><!-- .authorbox-->
            <?php } ?>
	  	</div><!-- .entry -->		
    	<?php if(get_option('blacklight_show_post_comments') == 'on') { ?>
	  		<?php comments_template(); ?>  	
	  	<?php } ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
    </article><!-- article -->
    <?php get_sidebar();?>
    <div class="clear"></div>
</div><!--end #content-->

<?php get_footer(); ?>