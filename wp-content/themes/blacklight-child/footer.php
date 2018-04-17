<div class="clear"></div>

<ul class="footer-social-icons">
	<li><a class="icon-twitter" href="<?php echo get_option('blacklight_twitter_url'); ?>" rel="external"><?php _e('Twitter','themejunkie'); ?><span><?php _e('Follow us','themejunkie'); ?></span></a></li>
	<li><a class="icon-facebook" href="<?php echo get_option('blacklight_facebook_page_url'); ?>" rel="external"><?php _e('Facebook','themejunkie'); ?><span><?php _e('Become our fan','themejunkie'); ?></span></a></li>
	<li><a class="icon-instagram" href="http://instagram.com/soundwavecomics" rel="external"><?php _e('Intagram','themejunkie'); ?><span><?php _e('Follow us','themejunkie'); ?></span></a></li>
	<li><a class="icon-youtube" href="http://www.youtube.com/user/SoundwaveComics" rel="external"><?php _e('YouTube','themejunkie'); ?><span><?php _e('Subscribe now','themejunkie'); ?></span></a></li>
</ul>
        
<?php if ( is_active_sidebar( 'footer-widget-area-1' ) || is_active_sidebar( 'footer-widget-area-2' ) || is_active_sidebar( 'footer-widget-area-3' ) || is_active_sidebar( 'footer-widget-area-4' ) || is_active_sidebar( 'footer-widget-area-5' )) { ?>
	<footer>
		<div id="footer-widget-1">
			<?php if ( is_active_sidebar( 'footer-widget-area-1' ) ) :  dynamic_sidebar( 'footer-widget-area-1'); endif; ?>
		</div><!-- #footer-widget-1 -->
		<div id="footer-widget-2">
			<?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) :  dynamic_sidebar( 'footer-widget-area-2'); endif; ?>
		</div><!-- #footer-widget-2 -->
		<div id="footer-widget-3">
			<?php if ( is_active_sidebar( 'footer-widget-area-3' ) ) :  dynamic_sidebar( 'footer-widget-area-3'); endif; ?>
		</div><!-- #footer-widget-3 -->
		<div id="footer-widget-4">				
			<?php if ( is_active_sidebar( 'footer-widget-area-4' ) ) :  dynamic_sidebar( 'footer-widget-area-4'); endif; ?>
		</div><!-- #footer-widget-4 -->
		<div id="footer-widget-5">				
			<?php if ( is_active_sidebar( 'footer-widget-area-5' ) ) :  dynamic_sidebar( 'footer-widget-area-5'); endif; ?>
		</div><!-- #footer-widget-5 -->		
		<div class="clear"></div>
	</footer> <!-- footer -->
<?php } ?>
</div><!-- #wrapper -->

<div class="copyright">
	<div class="inner-wrap">
		<div class="left">
			Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>. <?php _e('All rights reserved','themejunkie'); ?>.		
		</div><!-- .left -->
		<div class="right">
			<?php echo get_option('blacklight_footer_credit'); ?>
		</div><!-- .right -->
		<div class="clear"></div>
	</div><!-- .inner-wrap -->
</div><!-- .copyright -->

<?php if ((get_option('blacklight_home_share_enable') == 'on') || (get_option('blacklight_single_share_enable') == 'on')) { ?>
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>