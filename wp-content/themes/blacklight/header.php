<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php tj_custom_titles(); ?></title>
<?php tj_custom_description(); ?>
<?php tj_custom_keywords(); ?>
<?php tj_custom_canonical(); ?>
<link rel="apple-touch-icon" sizes="60x60" href="http://www.soundwavecomics.com/images/apple-touch-60.png" />
<link rel="apple-touch-icon" sizes="76x76" href="http://www.soundwavecomics.com/images/apple-touch-76.png" />
<link rel="apple-touch-icon" sizes="120x120" href="http://www.soundwavecomics.com/images/apple-touch-120.png" />
<link rel="apple-touch-icon" sizes="152x152" href="http://www.soundwavecomics.com/images/apple-touch-152.png" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" class="main-style" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/colors/<?php echo get_option('blacklight_theme_stylesheet');?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/custom.css" />
<?php wp_head(); ?>
</head>
<?php if (is_home() || is_archive() || is_search() ) add_filter('img_caption_shortcode', create_function('$a, $b, $c','return $c;'), 10, 3); ?>
<body <?php body_class(); ?>>

    <span id="home-url" class="<?php bloginfo( 'template_url' ); ?>" style="display: none;" ></span>
    <nav id="primary-nav">
        <div class="inner-wrap">
			    <?php $menuClass = 'nav';
				$menuID = 'primary-navigation';
				$primaryNav = '';
				if (function_exists('wp_nav_menu')) {
					$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-nav', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) );
				};
				if ($primaryNav == '') { ?>
					<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">				
						<?php show_page_menu($menuClass,false,false); ?>
					</ul>
				<?php }	else echo($primaryNav); ?>
	            <ul class="header-social-icons">
	            	<li><a class="icon-rss" href="<?php echo get_option('blacklight_rss_url'); ?>" rel="external"><?php _e('Subscribe to RSS', 'themejunkie') ?></a></li>
	            	<li><a class="icon-email" href="<?php echo get_option('blacklight_newsletter_url'); ?>" rel="external"><?php _e('Join our newsletter', 'themejunkie') ?></a></li>        	     
	            	<li><a class="icon-facebook" href="<?php echo get_option('blacklight_facebook_page_url'); ?>" rel="external"><?php _e('Become a fan on Facebook', 'themejunkie') ?></a></li>
	            	<li><a class="icon-twitter" href="<?php echo get_option('blacklight_twitter_url'); ?>" rel="external"><?php _e('Follow us on Twitter', 'themejunkie') ?></a></li>
	           	</ul><!-- .header-social-icons -->
            	<div class="clear"></div>
        </div><!-- .inner-wrap -->
    </nav><!-- #primary-nav -->
    <header>
    	<div class="inner-wrap">
	      <!--  <?php if (get_option('blacklight_text_logo_enable') == 'on') { ?>
		        <div id="text-logo">
		            <h1 id="site-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		            <p id="site-desc"><?php bloginfo('description'); ?></p>
		        </div> <!-- #text-logo -->
	        <?php } else { ?>
		        <center><a href="<?php bloginfo('url'); ?>"><?php $logo = (get_option('blacklight_logo') <> '') ? get_option('blacklight_logo') : get_bloginfo('template_directory').'/images/logo.png'; ?><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" id="logo"/></a> 
	       <?php }?> -->
	        <?php if(get_option('blacklight_header_ad_enable') == 'on') { ?>
	        	<div class="header-ad">
	        		<?php echo get_option('blacklight_header_ad_code'); ?>
	        	</div> 
	        	<!-- .header-ad -->
	        <?php } else { ?>
	            <div id="header-search">
					<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
						<input type="text" class="field" name="s" id="s" title="field" />
						<input class="submit btn" type="image" src="<?php bloginfo('template_directory'); ?>/images/ico-search.png" title="Go" alt="search" />
					</form>                
	            </div><!-- #header-search -->
            <?php } ?>
            <div class="clear"></div>
	        <nav id="secondary-nav">
				<?php $menuClass = 'nav';
				$menuID = 'secondary-navigation';
				$secondaryNav = '';
				if (function_exists('wp_nav_menu')) {
					$secondaryNav = wp_nav_menu( array( 'theme_location' => 'secondary-nav', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) );
				};
				if ($secondaryNav == '') { ?>
					<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
						<li class="first"><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'themejunkie') ?></a></li>					
						<?php show_categories_menu($menuClass,false,false); ?>
					</ul>
				<?php }	else echo($secondaryNav); ?>
			</nav><!-- #secondary-nav -->
		</div><!-- .inner-wrap -->
	</header> <!-- header-->
	<div class="clear"></div>
	<div id="wrapper">