	<header id="masthead" class="site-header" role="banner">		        
        <?php
		$travel_diaries_topbar = get_theme_mod( 'travel_diaries_ed_top_bar' );
		if ($travel_diaries_topbar) {
		?>
        <div class="header-t">
			<div class="container">
				<div id="mobile-header">
    				<a id="top-menu-button" href="#top-menu"><span class="fa fa-bars"></span></a>
				</div>
				<?php if( has_nav_menu( 'secondary' ) ){ ?>
                <nav class="top-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'fallback_cb' => false ) ); ?>
				</nav>
				<?php } 
                if( get_theme_mod( 'travel_diaries_ed_social' ) ) do_action( 'travel_diaries_social' ); 
                ?>                
			</div><!-- .container -->
		</div><!-- .header-t -->
        <?php } ?>
        <div class="header-b">
			<div class="container">
            <a href="http://depaul.edu">
				<img class="logo-short pull-left" src="https://spca.depaul.press/prejean/wp-content/uploads/sites/2/2017/03/depaul-tree-logo-white.png" />
			</a>
			<a class="depaul-branding" href="http://library.depaul.edu">
				<span class="depaul-branding">University Library</span>
			</a>
                <div class="site-branding">
        			
                    <?php 
                    if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                        the_custom_logo();
                    }
                    ?>                    
                    <div class="text-logo">
			<h1 class="depaul-branding"><?php bloginfo( 'name' ); ?></h1>
                    
     			
                    <?php
            			$description = get_bloginfo( 'description', 'display' );
            			if ( $description || is_customize_preview() ) : ?>
            				<br /><br /><br /><p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
        			<?php
                        endif; 
                    ?>
                    </div>
        		</div><!-- .site-branding -->
            
				<?php if( get_theme_mod( 'travel_diaries_ed_header_info' ) ) do_action( 'travel_diaries_header_info' ); ?>
                
			</div><!-- .container -->
		</div><!-- -->
        
	</header><!-- #masthead -->
    
    <div class="navigation navgination-holder">
		<div class="container">
    		<nav id="site-navigation" class="main-navigation" role="navigation">
    			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    		</nav><!-- #site-navigation -->	
		</div><!-- .container -->
	</div><!-- .navigation -->
    
